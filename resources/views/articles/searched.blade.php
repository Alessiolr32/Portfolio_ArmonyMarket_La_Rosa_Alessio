<x-layouts.layout>
    <x-slot:title>{{__('ui.search_button')}}</x-slot:title>
    
    <header class="text-center header-section my-5 rounded-5 shadow w-75 mx-auto">
        <h1 class="h3 fw-bold mt-1">
           {{__('ui.items_found_for')}}
            <span class="h2 fw-bold">{{$query}}</span>
        </h1>
    </header>  
    
    <div class="container my-5">           
        <section class="row g-4 card-bg-color p-3 pt-1 pb-4 shadow mt-4">
            @forelse($articles as $article)   
            @if($article->is_accepted)         
            @php
            $delay = 500 + ($loop->index / max($loop->count - 1, 1)) * 500;
            @endphp
            <article class="col-md-4 col-lg-3 article-animate" style="animation-delay: {{ $delay }}ms;">
                <x-shared.card 
                :article="$article" 
                :user="auth()->user()" 
                :category="$article->category" />
            </article>
            @endif
            @empty
            <p class="text-center text-muted fs-6 pt-2">
                {{__('ui.no_articles_available')}}
            </p>
            @endforelse
        </section>
        
        <section class="mt-5 section-hidden">
            {{ $articles->links() }}
        </section>
        
        <section class="d-flex justify-content-center mt-1 w-75 mx-auto section-hidden">
            <a href="{{ route('home') }}" class="btn btn-primary w-50 rounded-5">{{__('ui.back_to_list')}}</a>
        </section> 
    </div>    
</x-layouts.layout>