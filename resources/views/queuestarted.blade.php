@extends('child')

<form  method="POST" class="form-group">
@csrf
    <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="LOGOUT" formaction="/logout">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD LETTER BODY" formaction="">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SETUP QUEUE" formaction="/emailpage">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SET UP COMPAIN" formaction="/showTables">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="VIEW REPORTS" formaction="/getDomains">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="NEXT BUTTON" formaction="/showEmails">
<input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="KILL PID" formaction="/">
<input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="CHECK BOUNCES" formaction="/showCheckBouncesPage">
</form>

Queue was started with :

<p>Hello, {{$user ?? ''}}</p>
<p>Hello, {{$user2 ?? ''}}</p>
<p>Hello, {{$user3 ?? ''}}</p>