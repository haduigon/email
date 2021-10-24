@extends('ancestor')

@section('body')

<p align="center">Choose file for parsing</p>

<form  method="post" class="form-group">
@csrf
    @foreach($files as $file)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="file" id="exampleRadios1" value="{{ $file}}" checked>
            <label class="form-check-label" for="">
                {{ $file}}
            </label>
        </div>
            @endforeach

<input type="submit" class="btn-success"role="group" aria-label="Basic example" value="SHOW WHAT WE HAVE" formaction="/showWhatWeHave">


<p align="center">Choose table for writing data</p>
@csrf

<form  method="post" class="form-group">
@csrf    
    @foreach($tables as $table)
<div class="form-check">
    <input class="form-check-input" type="radio" name="databasedata" id="exampleRadios1" value="{{ $table->Tables_in_test}}" checked>
    <label class="form-check-label" for="">
        {{ $table->Tables_in_test}}
    </label>
</div>
	@endforeach
@csrf
<input type="submit" class="btn-success"role="group" aria-label="Basic example" value="PARSE AND WRITE DATA INTO THE CHOOSEN DB" formaction="/writeemailsdb">
<a href = "buboff.com">Here is the URL</a>
@endsection
