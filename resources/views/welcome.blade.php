<x-layouts.layout>
    <x-slot:title>{{__('ui.home')}}</x-slot:title>
    
    <section>
        <x-hero-section/> 
    </section>
    
    <section class="my-5 py-5 background-feature rounded-4">
        <div class="container">
            <div class="row g-4 d-flex flex-wrap">
                <div class="col-md-4 d-flex">
                    <div class="feature-card text-center p-4 rounded-4 shadow d-flex flex-column">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shipping-fast fa-3x text-primary"></i>
                        </div>
                        <h5>{{__('ui.fast_shipping')}}</h5>
                        <p class="text-muted">{{__('ui.fast_shipping_description')}}</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="feature-card text-center p-4 rounded-4 shadow d-flex flex-column">
                        <div class="feature-icon mb-3 mt-2">
                            <i class="fas fa-shield-alt fa-3x text-success"></i>
                        </div>
                        <h5>{{__('ui.quality_guarantee')}}</h5>
                        <p class="text-muted">{{__('ui.quality_guarantee_description')}}</p>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="feature-card text-center p-4 rounded-4 shadow d-flex flex-column">
                        <div class="feature-icon mb-3 mt-2">
                            <i class="fas fa-user fa-3x text-info"></i>
                        </div>
                        <h5>{{__('ui.items_sold')}}</h5>
                        <p class="text-muted">{{__('ui.article_sold_description')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <header class="text-center my-5 rounded-5 shadow w-75 mx-auto header-section section-hidden">
        <h1 class="h3 fw-bold mb-0 mt-0">{{__('ui.recent_articles')}}</h1>
        <p class="text-black mb-0">{{__('ui.recent_articles_description')}}</p>
    </header>  
    
    <div class="container my-5">                        
        <section class="row g-4 mt-5 card-bg-color p-3 pt-1 pb-4 shadow">
            @forelse($articles as $article)
            @php
            $delay = 700 + ($loop->index / max($loop->count - 1, 1)) * 700;
            @endphp
            <article class="col-12 col-md-4 col-lg-3 article-animate" style="animation-delay: {{ $delay }}ms;">
                <x-shared.card :article="$article" />
            </article>
            @empty
            <div>
                <p class="text-center text-muted mb-0">{{__('ui.no_items_available')}}</p>
            </div>
            @endforelse
        </section>
    </div>
    
    <section class="d-flex justify-content-center mt-1 w-75 mx-auto mt-5 section-hidden">
        <a href="{{ route('articles.index') }}" class="btn btn-primary w-50 rounded-5">{{__('ui.all_the_articles')}}</a>
    </section>             
</x-layouts.layout>