@extends ('ancestor')

@section('body')

<p align = "center"> Please, choose the database for check trash emails </p>

<form method = "post" class = "form-group">
    @csrf
	@foreach ($tables as $table)

<div class = "form-check">
@csrf
 <input class = "form-check-input" type = "radio" name = "databasedata" id="exampleRadios1" value = "{{$table->Tables_in_test}}" checked>
@csrf
    <label class = "form-check-label" for = "">
	{{$table->Tables_in_test}}
	</label>
</div>
	@endforeach

<p align = "center"> Input email box to check for bounces. Most probably it has to be return-path from headers </p>
@csrf
<textarea class = "form-control" type = "textarea" name = "return-path" placeholder = ""></textarea>
@error('return-path')
<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
@enderror
<p align = "center"> Input the password for email boounces box</p>

<textarea class = "form-control" type = "textarea" name = "password" placeholder = ""></textarea>
@error('password')
<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
@enderror
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
{{$message}}
</div>
@endif
<input type = "submit" class = "btn-success" role = "group" aria-label="Basic example" value="CHECK THE BOUNCES & CLEAR DB" formaction="/checkBounces">
</form>
@endsection