<nav class="navbar navbar-expand-lg bg-primary shadow p-0" data-bs-theme="dark">
    <div class="container-fluid">
        <a href="{{ route('home') }}">
            <img class="navbar-icon me-3 navbar-logo-img" src="/images/armonylogo.png" alt="ArmonyMarket Logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">{{ __('ui.home') }}</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('articles.index') }}">{{ __('ui.all_the_articles') }}</a>
                </li>
                
                <li class="nav-item dropdown me-5">
                    <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button">
                        {{ __('ui.categories') }}
                    </a>
                    <div class="dropdown-menu py-3 mb-2" data-bs-popper="static">
                        @foreach ($categories as $category)
                        <a class="dropdown-item" href="{{ route('articles.byCategory', $category) }}">{{ __("ui.{$category->name}") }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>
            
            <form class="d-flex flex-grow-1 justify-content-center" role="search" action="{{ route('article.search') }}" method="GET">
                <input type="search" name="query" class="form-control me-1 bg-light rounded-4 search-input w-50" placeholder="{{__('ui.search_placeholder')}}" aria-label="search">
                <button type="submit" class="btn btn-primary rounded-4">{{__('ui.search_button')}}</button>
            </form>
            
            <ul class="navbar-nav ms-md-5">
                @auth
                <li class="nav-item">
                    <a href="{{ route('create.article') }}" class="nav-link active me-2"> {{ __('ui.publish') }}</a>
                </li>
                
                @if (!auth()->user()->is_revisor)
                <li class="nav-item">
                    <a href="{{ route('work.with.us') }}" class="nav-link active me-2">{{__('ui.work_with_us')}}</a>
                </li>
                @endif
                
                @if (auth()->user()->is_revisor)
                <li class="nav-item me-2">
                    <a href="{{ route('revisor.index') }}" class="nav-link active d-flex align-items-center">  
                        {{ __('ui.dashboard') }}
                        
                        @if($articlesToReviewCount > 0 && $articlesToReviewCount < 10)
                        <span class="revisor-count">
                            {{ $articlesToReviewCount }}
                        </span>
                        @elseif ($articlesToReviewCount >= 10)
                        <span class="revisor-count p-1">
                            9+
                        </span>
                        @endif
                    </a>
                </li>
                @endif
                
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user me-1"></i>
                        {{ ucwords(auth()->user()->name) }}
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-end p-0 mb-1 overflow-hidden">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-center fw-semibold p-2 dropdown-menu-color">{{ __('ui.logout') }}</button>
                            </form>
                        </li>
                    </ul>                    
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('login') }}">
                        <i class="fa-solid fa-lock-open me-1"></i>
                        {{__('ui.login_register')}}
                    </a>
                </li>
                @endauth
            </ul>            
        </div>
    </div>
</nav>
