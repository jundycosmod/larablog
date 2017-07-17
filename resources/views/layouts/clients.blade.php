<!-- Clients -->
<section id="clients">
    <div class="container">
        <div class="row">
            @foreach($clients as $client)
            <div class="col-md-3 col-sm-6">
                <a href="{{ $client->website }}">
                    <img class="img-fluid d-block mx-auto" src="storage/{{ $client->client_logo }}" alt="">
                </a>
            </div>
            @endforeach
            
        </div>
    </div>
</section>