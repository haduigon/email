@extends ('child')


<form  method="POST" class="form-group">
    @csrf
    <input type="submit" class="btn-success"role="group" aria-label="Basic example" value="LOGOUT" formaction="/logout">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="DOWNLOAD LETTER BODY" formaction="">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SETUP QUEUE" formaction="/showuploadedfiles">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="SET UP COMPAIN" formaction="/showTables">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="VIEW REPORTS" formaction="/showReport">
    <input type="submit" class="btn-secondary" role="group" aria-label="Basic example" value="NEXT BUTTON" formaction="/upload">
</form>


<form  method="post" class="form-group">
    @foreach($files as $file)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="domain" id="exampleRadios1" value="{{ $file}}" checked>
            <label class="form-check-label" for="">
                {{ $file}}
            </label>
        </div>
            @endforeach

