<article class="card shadow card-section rounded-4">
  <a href="{{ route('articles.show', $article) }}" class="text-decoration-none text-dark">
    <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : '/images/placeholder/placeholder1.jpg'}}" alt="Immagine dell'articolo {{$article->title}}" class="card-img-top" style="height: 230px; object-fit: cover;">
    
    <span>
      <a href="{{ route('articles.byCategory', $article->category) }}"
        class="text-decoration-none d-block position-absolute top-0 start-0 m-2 badge rounded-pill px-2" style="{{ $article->category->color }}">
        <span class="p">{{ __('ui.' . $article->category->name) }}</span>
      </a>
    </span>
    
    <div class="card-body">
      <p class="fw-bold fs-4 card-text mb-2">
        €{{ number_format($article->price, 2, ',', '.') }}
      </p>
      <h3 class="text-truncate">{{$article->title}}</h3>
      <p class="card-text text-truncate mb-2">{{$article->description}}</p>
      <p class="text-secondary mb-1">{{__('ui.published_by')}}: {{$article->user->name}}</p>
    </div>
    
    <div class="d-flex justify-content-center">
      <a href="{{route('articles.show', $article)}}"
      class="btn btn-primary text-center w-75 rounded-4 fw-semibold mb-3 p-1">
      {{__('ui.show_article')}}</a>
    </div>    
  </a>
</article>