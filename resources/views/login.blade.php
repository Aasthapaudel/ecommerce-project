@extends('master');
@section('content')
<div class=" container custom-login">
    <div class="row">
         <div class="col-sm-4 col-sm-offset-4">
        <form action="/login" method="POST">

        <div class="form-group">
        @csrf
            <label for="email">Email address:</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
</div>
</div>

<!-- <button type="button" class="btn btn-primary">Click on me</button> -->
@endsection
