@extends('ancestor')

@section('body')
<p align="center"> Look into list of compains and input below the pid to kill</p>
@csrf
@foreach($lines as $line)
<dl>
<dt>{{$line}}</dt>
</dl>
@endforeach
<input class="form-control" type="number" name="pid" placeholder="PID">
<input type="submit" class="btn-success" role="group" aria-label="Basic example" value="KILL PID" formaction="/killPid"
@endsection

