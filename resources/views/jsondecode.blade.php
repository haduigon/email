@extends('ancestor')

@section('body')
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
@endsection