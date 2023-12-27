@extends('layouts.main')
@section('content')


    <!-- Page content-->
    <div class="container">
        <div class="col-md-12">
            <p class="h4 my-4">
                {{ $title }}
            </p>
        </div>
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    @if (file_exists(public_path('/storage/' . $post->image_path)))
                                        <img class="mb-4 mx-auto post-img " style="width: 300px; "
                                            src="{{ asset('/storage/' . $post->image_path) }}" alt="">
                                    @endif
                                    <div class="card-body">
                                        <img style="float:right" src="{{ $post->user->profile_photo_url }}" width="50px"
                                            class="h-10 w-10 rounded-full" />
                                        <p class="mt-2 " style="display:inline-block; padding-right:5px;">
                                            <strong>{{ $post->user->name }}</strong>
                                        </p>
                                        <div class="row mt-2">
                                            <div class="col-3">
                                                <i class="far fa-clock"></i> <span
                                                    class="text-secondary">{{ $post->created_at->diffForHumans() }}</span>
                                            </div>
                                            <div class="col-3">
                                                <i class="fa-solid fa-align-justify"></i> <span
                                                    class="text-secondary">{{ $post->category->title }}</span>
                                            </div>
                                            <div class="col-3">
                                                <i class="fa-solid fa-comment"></i>{{ $post->comments->count() }} <span
                                                    class="text-secondary"> تعليقات</span>
                                            </div>
                                        </div>
                                        <h2 class="card-title h4">{{ $post->title }}</h2>
                                        <p class="card-text">{!! Str::limit($post->body, 200) !!}.</p>
                                        <a class="btn btn-primary" href="{{ route('posts.show', $post) }}">قراءة المزيد
                                            →</a>
                                    </div>
                                </div>
                                <!-- Blog post-->

                            </div>

                        </div>
                    @endforeach
                @else
                    <div class="alert alert-info" role="alert">
                        <h5>لا نتائج</h5>
                    </div>
                @endif

                <!-- Pagination-->
                <nav aria-label="Pagination">

                    <ul class="pagination justify-content-center my-4">
                        {{ $posts->links() }}
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">

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
