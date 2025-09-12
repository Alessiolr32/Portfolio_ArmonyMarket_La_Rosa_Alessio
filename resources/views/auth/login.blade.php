<x-layouts.layout>
    <x-slot:title>{{__('ui.login')}}</x-slot:title>
    
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">                    
                    <div class="card bg-transparent rounded-4">                        
                        <header class="card-header text-center p-0">
                            <h1 class="fw-semibold my-auto text-white bg-primary py-1">{{__('ui.login')}}</h1>
                        </header>                        
                        
                        <section class="card-body card-log-bg">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{__('ui.email_address')}}</label>
                                    <input type="email" class="form-control rounded-4" id="email" name="email" value="{{ old('email') }}">
                                    @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{__('ui.password')}}</label>
                                    <input type="password" class="form-control rounded-4" id="password" name="password">
                                    @error('password')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                
                                <p>
                                    {{__('ui.not_account')}}? 
                                    <a href="{{ route('register') }}" class="text-decoration-none">
                                        <span class="text-primary fw-bold">
                                            {{__('ui.register')}}                      
                                        </span>
                                    </a>
                                </p>
                                
                                <button type="submit" class="btn btn-primary d-block mx-auto w-25 rounded-5">{{__('ui.login')}}</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.layout>