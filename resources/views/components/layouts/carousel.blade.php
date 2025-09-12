<div id="carouselArticle" class="carousel slide mb-3" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
        @if($article->images->count())
        @foreach($article->images as $key=>$image)
        <div class="carousel-item @if ($loop->first) active @endif">
            <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded-3 shadow" style="height: 350px; object-fit: cover;"  alt="Immagine {{ $article->title }}">
        </div>
        @endforeach
        @else
        @foreach (range(1,3) as $i)
        <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
            <img src="/images/placeholder/placeholder{{ $i }}.jpg"
            class="d-block w-100"
            style="object-fit: cover; border-radius: 15px; height: 350px;"
            alt="Article Image {{ $i }}">
        </div>
        @endforeach
        @endif        
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselArticle" data-bs-slide="prev">
        <i class="fas fa-chevron-left text-white fs-4 carousel-icon-bg"></i>
        <span class="visually-hidden">Precedente</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselArticle" data-bs-slide="next">
        <i class="fas fa-chevron-right text-white fs-4 carousel-icon-bg"></i>
        <span class="visually-hidden">Successivo</span>
    </button>
</div>