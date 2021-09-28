@extends('stage')

@section('body')
<p>Hello, {{$user ?? 'Guest'}}</p>



<form  method="POST" class="form-group">
@csrf
    <input class="form-control" type="email" name="email" placeholder="example@email.com">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
@enderror
    <input class="form-control" type="password" name="password" placeholder="Password">
@error('password')
<div class="alert alert-danger mt-q mb-1">{{$message}}</div>
@enderror

 <input type="submit" class="btn btn-success" value="CREATE USER" formaction="">

<input type="submit" class="btn btn-success" value="LOGIN" formaction="/login">

</form>

@endsection