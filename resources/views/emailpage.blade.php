@extends('child')

<form  method="POST" class="form-group">
    @csrf
    <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="LOGOUT" formaction="/logout">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD LETTER BODY" formaction="">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SHOW FILES" formaction="/showuploadedfiles">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SET UP COMPAIN" formaction="/showTables">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="VIEW REPORTS" formaction="/showReport">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD SMTH" formaction="/upload">
</form>




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

    <p align="center">Choose domain and IP for sending</p>
@csrf
<form  method="post" class="form-group">   
@csrf
 @foreach($domains as $domain)
@csrf     
	<div class="form-check">
@csrf	    
<input class="form-check-input" type="radio" name="domain" id="exampleRadios1" value="{{ $domain}}" checked>
            <label class="form-check-label" for="">
                {{ $domain}}
            </label>
        </div>
            @endforeach



	            <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="START THE QUEUE" formaction="/startQueue">
@csrf

    </div>
</form>
</div>
    </form>






