@extends('ancestor')

@section('body')

<p align="center">Please, setup the queue</p>
@csrf
<p align="center">Choose the database</p>

@csrf

<form  method="post" class="form-group">
    @csrf
	@foreach($tables as $table)
<div class="form-check">
@csrf   
 <input class="form-check-input" type="radio" name="databasedata" id="exampleRadios1" value="{{ $table->Tables_in_test}}" checked>
@csrf  
  <label class="form-check-label" for="">
        {{ $table->Tables_in_test}}
    </label>
</div>

        @endforeach

<p align="center"> Input the compain name</p>
@csrf
<textarea class="form-control" type="textarea" name="compainname" placeholder=""></textarea>
<p align="center"> Input compain description </p>
@csrf
<textarea class="form-control" type="textarea" name="compaindescription" placeholder=""></textarea>

<p align="center">Input the subject of the letter</p>
@csrf
<textarea class="form-control" type="textarea" name="subject" placeholder=""></textarea>

<p align="center">Input mail body</p>
@csrf
            <textarea class="form-control" type="textarea" name="emailtext" placeholder=""></textarea>
@csrf
    <p align="center">Input the speed of sent</p>
@csrf
    <input class="form-control" type="number"  name="speed" placeholder="">
@csrf
	    <p align="center">Input sender email address "from"</p>
@csrf
            <input class="form-control" type="text"  name="sender_address" placeholder="">
@csrf
	    <p align="center">Input Username </p>
@csrf
            <input class="form-control" type="text"  name="username" placeholder="">
@csrf
	    <p align="center">Input password </p>
@csrf
            <input class="form-control" type="text"  name="userpassword" placeholder="">
@csrf
	    <p align="center">Set up Helo data </p>
@csrf
            <input class="form-control" type="text"  name="helo" placeholder="">
@csrf


<p align="center">Input the name of sender</p>
@csrf
<input class="form-control" type="text" name="name" placeholder="">



                <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="START THE QUEUE" formaction="/startQueue">


    </div>
</form>
</div>
    </form>

@endsection





