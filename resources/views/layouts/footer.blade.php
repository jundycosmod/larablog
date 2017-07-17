<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">{{ Voyager::setting('copyright') }}</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    @foreach($socialmedias as $socialmedia)
                    <li class="list-inline-item">
                        <a href="{{ $socialmedia->profile_link }}" target="_blank">
                            <i class="{{ $socialmedia->icon }}"></i>
                        </a>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
            <div class="col-md-4">
<!--                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>
</footer>