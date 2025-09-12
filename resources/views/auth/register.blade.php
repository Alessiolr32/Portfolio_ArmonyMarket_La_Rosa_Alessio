<x-layouts.layout>
    <x-slot:title>{{__('ui.register')}}</x-slot:title>
    
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-transparent rounded-4">
                    <div class="card-header text-center p-0">
                        <h1 class="fw-semibold my-auto text-white bg-primary py-1">{{__('ui.register')}}</h1>
                    </div>
                    
                    <div class="card-body card-log-bg pt-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{__('ui.name')}}</label>
                                
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control rounded-4" name="name" value="{{ old('name') }}">                                    
                                    @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{__('ui.email_address')}}</label>
                                
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control rounded-4" name="email" value="{{ old('email') }}">                                    
                                    @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{__('ui.password')}}
                                </label> 
                                
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control rounded-4" name="password">                                
                                    @error('password')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{__('ui.confirm_password')}}</label>
                                
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control rounded-4" name="password_confirmation">
                                    @error('password-confirmation')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-12 text-center">
                                    <p class="mt-1">
                                        {{__('ui.have_account')}}? 
                                        <a href="{{ route('login') }}" class="text-decoration-none">
                                            <span class="fw-bold">{{__('ui.login')}}</span>
                                        </a>
                                    </p>
                                    <button type="submit" class="btn btn-primary w-50 rounded-5">
                                        {{__('ui.register')}}
                                    </button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.layout>