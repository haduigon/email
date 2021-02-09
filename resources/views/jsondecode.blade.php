@extends('child')

<form  method="POST" class="form-group">
    @csrf
    <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="LOGOUT" formaction="/logout">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD LETTER BODY" formaction="">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SHOW FILES" formaction="/showuploadedfiles">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SET UP COMPAIN" formaction="/showTables">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="VIEW REPORTS" formaction="/showReport">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD SMTH" formaction="/upload">
<input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="KILL PID" formaction="/">
<input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="CHECK BOUNCES" formaction="/">
</form>
<p>Number of unique emails: {{$emails_number ?? ''}}<p>

<form  method="post" class="form-group">
    @foreach($emails as $email)
@foreach($email as $line)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="domain" id="exampleRadios1" value="{{ $line}}" checked>
            <label class="form-check-label" for="">
                {{ $line}}
            </label>
        </div>
    @endforeach
@endforeach
        <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="START SMTH" formaction="">
</form>
