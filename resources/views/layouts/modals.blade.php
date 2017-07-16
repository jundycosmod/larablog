<!-- Portfolio Modals -->

<!-- Modal 1 -->
@foreach ($portfolios as $portfolio)
<div class="portfolio-modal modal fade" id="{{ preg_replace('/\s+/', '', $portfolio->title) }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="modal-body" style="text-align: left">
                            <!-- Project Details Go Here -->
                            <h2>{{ $portfolio->title }}</h2>
                            <p class="item-intro text-muted"></p>
                            {!!html_entity_decode($portfolio->body)!!}
                            <ul class="list-inline">
                                <li>Start Date: {{ Carbon\Carbon::parse($portfolio->start_date)->format('F Y') }}</li>
                                <li>End Date: {{ Carbon\Carbon::parse($portfolio->end_date)->format('F Y') }}</li>
                                <li>Client: {{ $portfolio->client_name }}</li>
                                <li>Category: {{ $portfolio->category_name }}</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach