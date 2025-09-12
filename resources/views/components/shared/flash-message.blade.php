@if (session('success'))
<div class="alert alert-success text-center rounded-3">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger text-center rounded-3 mb-0">
    {{ session('error') }}
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning">
    {{ session('warning') }}
</div>
@endif