<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Me</h2>
                <h3 class="section-subheading text-muted">Like my work? Contact me now!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                
                @if(Session::has('success'))
                    <div class="alert alert-success">
                      {{ Session::get('success') }}
                    </div>
                @endif
                {!! Form::open(['route'=>'contactus.store']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Your Name *', 'required', 'data-validation-required-message' => 'Please enter your name.']) !!}
                                <p class="help-block text-danger">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Your Email*', 'required', 'data-validation-required-message' => 'Please enter your email address.']) !!}
                                <p class="help-block text-danger">{{ $errors->first('email') }}</p>
                            </div>
                            
                            <div class="form-group {{ $errors->has('number') ? 'has-error' : '' }}">
                                {!! Form::text('number', old('number'), ['class'=>'form-control', 'placeholder'=>'You Phone Number', 'required', 'data-validation-required-message' => 'Please enter your phone number.']) !!}
                                <p class="help-block text-danger">{{ $errors->first('number') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Your Message *', 'required', 'data-validation-required-message' => 'Please enter a message']) !!}
                                <p class="help-block text-danger">{{ $errors->first('message') }}</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button class="btn btn-xl" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>