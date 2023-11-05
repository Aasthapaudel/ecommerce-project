@extends('master');
@section('content')
<div class="custom-login">
    <div class="row">
         <div class="col-sm-4 col-sm-offset-4">
        <form action="/action_page.php">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>

<!-- <button type="button" class="btn btn-primary">Click on me</button> -->
@endsection
