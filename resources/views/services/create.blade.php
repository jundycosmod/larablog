@extends ('entries.master')

@section ('content')
<div class="col-sm-8 blog-main" style="margin-top: 50px">

    <h1>Add Services</h1>

    <hr>

    <form method="POST" action='/posts'>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" >
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id='body' name="body" class='form-control' ></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

        @include ('layouts.errors')

    </form>


</div>
@endsection