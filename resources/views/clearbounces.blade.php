@extends ('child')


<form  method="POST" class="form-group">
    @csrf
    <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="LOGOUT" formaction="/logout">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD LETTER BODY" formaction="">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SHOW FILES" formaction="/showuploadedfiles">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SET UP COMPAIN" formaction="/showTables">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="VIEW REPORTS" formaction="/showReport">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="NEXT BUTTON" formaction="/upload">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="KILL PID" formaction="/">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="CHECK BOUNCES" formaction="/showCheckBouncesPage">
</form>

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

<p align = "center"> Input the password for email boounces box</p>

<textarea class = "form-control" type = "textarea" name = "password" placeholder = ""></textarea>

<input type = "submit" class = "btn-success" role = "group" aria-label="Basic example" value="CHECK THE BOUNCES & CLEAR DB" formaction="/checkBounces">

</form>