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
                     <?php $count= 0; ?>
                    @foreach( $experiences as $experience)
                    <?php $count += 1; ?>
                    <li <?php echo ($count%2 == 0) ? "class='timeline-inverted'" : "" ?>>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="storage/{{ $experience->experience_image }}" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{ $experience->date_range }}</h4>
                                <h4 class="subheading">{!!html_entity_decode($experience->summary)!!}</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">{!!html_entity_decode($experience->details)!!}</p>
                            </div>
                        </div>
                    </li>
                    
                    @endforeach
                    
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of My
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>