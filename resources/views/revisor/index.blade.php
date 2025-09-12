<x-layouts.layout>
    <x-slot name="title">{{__('ui.articles_to_review')}}</x-slot>
    
    <section class="container mt-4">
        <header class="text-center mb-5 header-section my-5 rounded-5 shadow p-1">
            <h1 class="h3 fw-bold mb-0 mb-1">{{__('ui.articles_to_review')}}:</h1>
        </header>
        
        <div class="table-responsive rounded-4 custom-table p-2">
            <table class="table m-0">
                <thead>
                    <tr class="table-section">
                        <th class="bg-primary text-white rounded-start-3">
                            {{__('ui.image')}}
                            <i class="fa-solid fa-images ms-1 d-none d-md-inline"></i>
                        </th>
                        <th class="bg-primary text-white">                            
                            {{__('ui.title')}}
                        </th>
                        <th class="bg-primary text-white">
                            {{__('ui.author')}}
                        </th>
                        <th class="bg-primary text-white">
                            {{__('ui.description')}}
                        </th>
                        <th class="bg-primary text-white">
                            {{__('ui.labels')}}
                            <i class="fa-solid fa-shield ms-1 d-none d-md-inline"></i>
                        </th>
                        <th class="bg-primary text-white rounded-end-3">
                            {{__('ui.actions')}}
                            <i class="fa-solid fa-pen-to-square ms-1"></i>
                        </th>
                    </tr>
                </thead>
                
                <tbody>
                    @forelse($article_to_check as $article)
                    <tr>
                        @if (count($article->images) > 0)
                        <td class="card-log-bg">
                            <img src="{{ $article->images[0]->getUrl(300, 300) }}" 
                            alt="{{ $article->title }}" 
                            class="img-fluid rounded-3 shadow ms-1" 
                            style="max-height: 100px;">
                        </td>
                        @else
                        <td class="card-log-bg">
                            <img src="{{ asset('images/placeholder/placeholder1.jpg') }}" 
                            alt="placeholder" 
                            class="img-fluid rounded" 
                            style="max-height: 100px;">
                        </td>
                        @endif
                        
                        <td class="card-log-bg">{{ $article->title }}</td>
                        <td class="card-log-bg">{{ $article->user->name }}</td>
                        <td class="card-log-bg" style="max-width:150px;">
                            <div class="text-truncate">{{ $article->description }}</div>
                        </td>
                        
                        <td class="card-log-bg">
                            @if(count($article->images) > 0)
                            @php 
                            $image = $article->images[0]; 
                            $icons = [
                            'adult' => 'fa-person-circle-exclamation',
                            'violence' => 'fa-skull-crossbones',
                            'spoof' => 'fa-mask',
                            'racy' => 'fa-heart-crack',
                            'medical' => 'fa-hospital'
                            ]; 
                            @endphp
                            
                            <div class="labels-container">
                                @if($image->labels && count($image->labels) > 0)
                                @foreach($image->labels as $label)
                                <span class="badge bg-secondary me-1 mb-1">#{{ $label }}</span>
                                @endforeach
                                @else
                                <p class="fst-italic mb-2">{{__('ui.no_labels')}}</p>
                                @endif
                                
                                <ul class="list-unstyled mb-0 mt-3 d-flex flex-wrap justify-content-center">
                                    @foreach($icons as $key => $icon)
                                    <li>
                                        <i class="{{ $image->$key }} me-1 ms-4"></i> {{ ucfirst($key) }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @else
                            <span class="text-muted">N/A</span>
                            @endif
                        </td>
                        
                        
                        
                        <td class="card-log-bg">
                            <a href="{{ route('revisor.show', $article) }}" 
                            class="botton-detail btn-sm rounded-4 px-3 me-2 d-inline-block text-nowrap">
                            {{__('ui.article_detail')}}</a>                            
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 card-log-bg rounded-2">
                            <p class="fw-bold text-muted m-0">{{__('ui.no_articles_review')}}</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <section class="mt-5 section-hidden">
            {{ $article_to_check->links() }}
        </section>
        
        <section class="d-flex justify-content-center mt-1 w-75 mx-auto section-hidden">
            <a href="{{ route('home') }}" class="btn btn-primary w-50 rounded-5">{{__('ui.back_to_list')}}</a>
        </section> 
    </section>
</x-layouts.layout>
