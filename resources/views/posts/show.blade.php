@extends('layouts.main')

@section('style')
    <style>
        .post-img {
            text-align: justify;
            max-width: 600px;
            max-height: 600px
        }
    </style>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <div class="card">
                    <article class="m-3 ">
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <img style="float:right  " src="{{ $post->user->profile_photo_url }}" width="50px"
                                class="rounded-full" />
                            <h1 class="fw-bolder pr-3" style="display:inline-block; padding-right:10px;">{{ $post->title }}
                                <br> <span>
                                    <p>نشر {{ $post->created_at->diffForHumans() }} بواسطة
                                        {{ $post->user->name }}
                                </span></p>
                            </h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2">
                            </div>
                            <!-- Post categories-->
                            <a class="badge bg-secondary text-decoration-none link-light">
                                {{ $post->category->title }}</a>
                        </header>
                        <!-- Preview image figure-->
                        @if (file_exists(public_path('/storage/' . $post->image_path)))
                            <img class="mb-4 mx-auto post-img" src="{{ asset('/storage/' . $post->image_path) }}"
                                alt="">
                        @endif <!-- Post content-->
                        <section class="mb-5">
                            <p class="lh-lg">{!! $post->body !!}</p>

                    </article>
                </div>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            @auth
                                <!-- comments form -->
                                <div class="row form-group mt-5">
                                    <div class="col-lg-12 col-md-6 col-xs-11">
                                        <form action="{{ route('comment.store') }}" id="comments" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <textarea class="form-control @error('body') is-invalid @enderror" rows="5" name="body"
                                                    placeholder="أضف تعليقًا ..."></textarea>
                                                @error('body')
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-outline-dark mt-3 mb-3 mb-10">تعليق</button>
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="alert alert-info mt-3" role="alert">
                                    يرجى تسجيل الدخول لكي تستطيع وضع تعليق
                                </div>
                            @endauth


                            <!-- Comment with nested comments-->
                            @foreach ($comments as $comment)
                                <div class="card bg-green ">
                                    <div class="d-flex px-3 ">
                                        <img style="float:right" src="{{ $comment->user->profile_photo_url }}"
                                            width="50px" class="rounded-full" />
                                        <p class="mt-2 me-3" style="display:inline-block;">
                                            <strong>{{ $comment->user->name }}</strong> <span>
                                                <i class="far fa-clock"></i> <span
                                                    class="comment_date text-secondary">{{ $comment->created_at->diffForHumans() }}</span>
                                            </span>
                                        </p>

                                    </div>
                                    <p class="my-3 px-3">{{ $comment->body }}</p>
                                    <hr style="border-radius: 40px;">
                                </div>
                            @endforeach
                            <!-- Single comment-->

                        </div>
                    </div>
                </section>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->

                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">الأصناف</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    @include('partials.sidebar')
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Side widget-->

            </div>
        </div>
    </div>
    <footer class="py-3 bg-primary">
        <div class="container">
            <p class="m-0 text-center text-white"> <span>جميع الحقوق محفوظة لدى انس معرف &copy; {{ date('Y') }}</span>
            </p>
        </div>
    </footer>
@endsection
