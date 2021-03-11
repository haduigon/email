@extends ('ancestor')

@section ('body')

<p align="center"> Input text what you want to find and choose DB where to do it</p>

<form method="post" class="form-group">
<textarea class="form-control" type="textarea" name="searchtext" placeholder=""></textarea>
@error('searchtext')
<div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
@enderror



@csrf
    @foreach($tables as $table)
<div class="form-check">
@csrf
<input class ="form=check-input" type="radio" name="databasedata" id="db" value="{{$table->Tables_in_test}}" checked>
@csrf
<label class="form-check-label" for="">
{{$table->Tables_in_test}}
</label>
</div>
    @endforeach

<input type="submit" class="btn btn-success" role="group" aria-label="Basic example" value="SEARCH" formaction="/search">
</form>

<p> {{$result ?? ''}}  </p>

@endsection