
<x-layout>
    <x-nav></x-nav>


    <div class="slider_posts">
    </div>

    <div class="text_news">
        <h1>SOME NEWS ABOUT US</h1>
    </div>

    {{-- bloc nouvelle en boucle --}}
    <div class="news">
    @foreach ( $posts as $post)
    <div class="card">
        <div class="hover-image"><h2>NEWS</h2></div>
        <div class="card__content">
          <div class="card__date"> <h4>
            {{ $post->date_post }}</h4>
        </div>

          <span class="card__title"> <h1>{{ $post->title }}</h1><p>{{ $post->description }}</p><span>
        </div>
        <img src="{{ url('storage/images/' . $post->image_path) }}" width="350" height="350" class="card__image" alt="activity" />
      </div>
      @endforeach
    </div>

<x-footer></x-footer>
</x-layout>

