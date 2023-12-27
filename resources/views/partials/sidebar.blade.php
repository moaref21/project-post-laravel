   @foreach ($categories as $cat)
         <li class="nav-item " style="list-style: none !important;">
            <a class="nav-link text-dark"
               href="{{ route('category', $cat) }}">{{ $cat->title }}
               ({{ $cat->posts->count() }})</a>
         </li>
   @endforeach
