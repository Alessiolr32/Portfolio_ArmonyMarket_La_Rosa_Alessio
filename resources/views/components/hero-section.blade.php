<section class="hero shadow">
    <div class="hero-content">
        <div class="container-fluid text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    @auth
                    <a href="{{ route('create.article') }}" class="btn btn-primary mt-5 rounded-4">
                        {{__('ui.publish_article')}}
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>