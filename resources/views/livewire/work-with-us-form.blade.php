<div class="container mt-5 card-show-bg p-2 shadow">
    @if(session('success'))
    <div class="alert alert-success text-center rounded-4 mb-4">{{ session('success') }}</div>
    @endif
    
    <form wire:submit="sendEmail" id="workWithUsForm"">
        <header class="header-section rounded-4">
            <h1 class="h2 display-6 fw-bold mb-0 text-center">{{__('ui.work_with_us')}}</h1>
            <h6 class="text-muted mb-1 text-center">
                {{__('ui.form_work_with_us')}}
            </h6>
        </header>
        
        <section class="mb-3 p-2">
            <label class="form-label fw-semibold text-muted mt-3 h6">
                {{__('ui.motivation')}}:
            </label>
            <textarea wire:model.live="message" class="form-control" rows="4"></textarea>
            
            <small class="{{ strlen($message) > 480 ? 'text-danger' : 'text-muted' }}">
                {{ strlen($message) }} / 500
            </small>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </section>
        
        <i class="fas fa-envelope" id="flyIcon"></i>
        
        <button type="submit" class="btn btn-primary rounded-5 ms-1" id="submitButton">{{__('ui.send_request')}}</button>
    </form>
</div>