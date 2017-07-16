<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row text-center">
             @foreach ($services as $service)
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa {{ $service->icon }} fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">{{ $service->title }}</h4>
                <p class="text-muted">{{ $service->body }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

