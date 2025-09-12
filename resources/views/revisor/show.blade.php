<x-layouts.layout>
    <x-slot:title>{{__('ui.article_detail')}}</x-slot:title>
    
    <header class="text-center header-section my-5 rounded-5 shadow w-75 mx-auto">
        <h1 class="h3 fw-bold my-2">{{__('ui.approval_request')}}: 
            <span class="text-primary h2 fw-bold">
                {{ $article->title }}
            </span>
        </h1>
    </header>
    
    <article class="container mt-5 card-show-bg shadow pt-1">
        <div class="p-3 pt-2">
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
                    
                    <div class="d-flex justify-content-center mt-4 mb-3">
                        <a href="{{ route('home') }}" class="btn btn-primary w-50 rounded-5">{{__('ui.back_to_list')}}</a>
                    </div>
                </section>
            </div>
            
            <section>
                @if($article->is_accepted === null)
                <div class="d-flex justify-content-center">
                    <p class="fw-bold mb-2">{{__('ui.article_public')}}?</p>
                </div>
                <div class="d-flex justify-content-center mb-1">
                    <button type="button" class="btn btn-success btn-sm me-3" data-bs-toggle="modal" data-bs-target="#conferma">
                        {{__('ui.accept')}}
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rifiuta">
                        {{__('ui.refuse')}}
                    </button>
                </div>
                @endif
            </section>
        </div>
    </article>
    @if(auth()->user()->is_revisor && $article->is_accepted === null)
    <section class="d-flex justify-content-center mt-1 w-75 mx-auto mt-5 section-hidden">
        <a href="{{ route('revisor.index') }}" class="btn btn-primary w-50 rounded-5">{{ __('ui.dashboard') }}</a>
    </section>
    @endif
</x-layouts.layout>

<div class="modal fade" id="conferma" tabindex="-1" aria-labelledby="confermaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                {{__('ui.want_to_accept')}}?
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <form method="POST" action="{{ route('revisor.accept',$article) }}" class="d-inline">
                    @csrf
                    <button class="btn btn-success me-3">{{__('ui.accept')}}</button>
                </form>
                <button type="button" class="btn btn-secondary ms-3" data-bs-dismiss="modal">{{__('ui.cancel')}}</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="rifiuta" tabindex="-1" aria-labelledby="rifiutaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                {{__('ui.want_to_refuse')}}?
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <form method="POST" action="{{ route('revisor.reject',$article) }}" class="d-inline">
                    @csrf
                    <button class="btn btn-danger me-3">{{__('ui.refuse')}}</button>
                </form>
                <button type="button" class="btn btn-secondary ms-3" data-bs-dismiss="modal">{{__('ui.cancel')}}</button>
            </div>
        </div>
    </div>
</div>