<x-layouts.layout>
    <x-slot:title>{{__('ui.article_detail')}}</x-slot:title>    
    
    <header class="text-center header-section my-5 rounded-5 shadow w-75 mx-auto">
        <h1 class="h3 fw-bold my-2">{{__('ui.discover_all')}}: {{ $article->title }}</h1>
    </header>  
    
    <article class="container mt-5 card-show-bg shadow pt-1">
        <div class="p-3">
            <div class="row justify-content-center">
                <section class="col-12 col-md-6 mt-3">
                    <x-layouts.carousel :article="$article"/>
                </section>
                
                <section class="col-md-6 ps-4 pe-1">
                    <div class="mt-1">
                        <h1 class="text-center display-3 fw-semibold mb-3 text-break">{{ $article->title }}</h1>
                        
                        <div class="d-flex">
                            <span class="me-1 fw-bold">
                                {{__('ui.price')}}:
                            </span>
                            <p class="fw-bold">
                                €{{ number_format($article->price, 2, ',', '.') }}
                            </p>
                        </div>
                        
                        <p>
                            <strong>{{__('ui.categories')}}:</strong>
                            <a href="{{ route('articles.byCategory', $article->category) }}"
                                class="text-decoration-none fw-bold text-primary">
                                {{ __("ui.{$article->category->name}") }}
                            </a>
                        </p>
                        
                        
                        <p class="text-break">
                            <strong>{{__('ui.description')}}:</strong> {{ $article->description }}
                        </p>
                        
                        
                        <h6 class="small ">
                            <strong>{{__('ui.publish_date')}}:</strong>
                            {{ $article->created_at->format('d/m/Y') }}
                        </h6>
                        
                        <h6 class="text-muted mt-3">
                            <strong>{{__('ui.published_by')}}:</strong>
                            {{ $article->user->name }}
                        </h6>
                    </div>
                    
                    <div>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="{{ route('home') }}" class="btn btn-primary w-50 rounded-5">{{__('ui.back_to_list')}}</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </article>
</x-layouts.layout>