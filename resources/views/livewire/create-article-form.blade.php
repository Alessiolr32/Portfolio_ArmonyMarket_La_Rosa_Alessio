<div class="container my-5 card-bg-color card-body p-4">
    <form wire:submit="save">
        <x-shared.flash-message />           
        <div class="row">
            <section class="col-md-6 pe-0">
                <div class="mb-3 col-md-11"><label for="title" class="form-label">{{__('ui.image')}}:</label>
                    <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow rounded-4 @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
                    @error('temporary_images.*')
                    <p class="fst-italic text-danger">{{$message}}</p>
                    @enderror
                    @error('temporary_images')
                    <p class="fst-italic text-danger">{{$message}}</p>
                    @enderror
                </div>
                @if(!empty($images))
                <div class="row">
                    <div class="col-md-11">
                        <p>{{__('ui.photo_preview')}}</p>
                        <div class="row border border-2 border-primary rounded shadow py-4">
                            @foreach($images as $key => $image)
                            <div class="col d-flex flex-column align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl() }});"></div>
                                <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{$key}})">X</button>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <div class="mb-3 col-md-11">
                    <label for="title" class="form-label">{{__('ui.title')}}:</label>
                    <input type="text" class="form-control rounded-4" id="title" wire:model="title" placeholder="{{__('ui.title_placeholder')}}">
                    @error('title')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
                
                <div class="mb-3 col-md-11">
                    <label for="price" class="form-label">{{__('ui.price')}}:</label>
                    <input type="text" class="form-control rounded-4" id="price" wire:model="price" placeholder="{{__('ui.price_placeholder')}}">
                    @error('price')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
                
                <div class="mb-3 col-md-11">
                    <label for="category" class="form-label">{{__('ui.categories')}}:</label>
                    <select name="category" id="category" class="form-select rounded-4" wire:model="category">
                        <option value="" selected>{{__('ui.select_category')}}</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ __("ui.$category->name") }}</option>                        
                        @endforeach
                    </select>
                    @error('category')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </section>
            
            <section class="col-md-6 ps-0">
                <div class="mb-3">
                    <label for="description" class="form-label">{{__('ui.description')}}:</label>
                    <textarea class="form-control rounded-4" id="description" cols="30" rows="8" wire:model="description" placeholder="{{__('ui.description_placeholder')}}"></textarea>
                    @error('description')<p class="text-danger">{{ $message }}</p>@enderror
                </div>
            </section>
        </div>
        
        <section class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary w-50 rounded-4">
                {{__('ui.create_article')}}
            </button>
        </section>
    </form>    
</div>