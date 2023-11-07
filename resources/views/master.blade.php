<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ecom-project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/custom.css')}}" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('Footer')}}

</body>
<style>
/* .custom-login
{
    height:500px;
    padding-top:100px;
} */

</style>



</html>
