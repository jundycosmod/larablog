<!-- Portfolio Grid -->
<section class="bg-faded" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            @foreach ($portfolios as $portfolio)
            <div class="col-md-4 col-sm-6 portfolio-item">
                <div class="portfolio-link" data-toggle="modal" href="#{{ preg_replace('/\s+/', '', $portfolio->title) }}">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="storage/{{ $portfolio->portfolio_image }}" alt="">
                </div>
                <div class="portfolio-caption">
                    <h4>{{ $portfolio->title }}</h4>
                    <p class="text-muted">{{ $portfolio->category_name }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>