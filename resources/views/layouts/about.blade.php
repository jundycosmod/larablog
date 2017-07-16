<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    @foreach( $experiences as $experience)
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="storage/{{ $experience->experience_image }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{ Carbon\Carbon::parse($experience->start_date)->format('F Y') }} - {{ Carbon\Carbon::parse($experience->end_date)->format('F Y') }}</h4>
                                <h4 class="subheading">{{ $experience->summary }}</h4>
                            </div>
                            <div class="timeline-body">
                                {!!html_entity_decode($experience->details)!!}
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>