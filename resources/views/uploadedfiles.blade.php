@extends ('child')


<form  method="POST" class="form-group">
    @csrf
    <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="LOGOUT" formaction="/logout">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD LETTER BODY" formaction="">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SHOW FILES" formaction="/showuploadedfiles">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SET UP COMPAIN" formaction="/showTables">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="VIEW REPORTS" formaction="/showReport">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD SMTH" formaction="/upload">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="KILL PID" formaction="/">
<input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="CHECK BOUNCES" formaction="/showCheckBouncesPage">
</form>

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

<input type="submit" class="btn-success"role="group" aria-label="Basic example" value="SHOW WHAT WE HAVE" formaction="/parse">


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