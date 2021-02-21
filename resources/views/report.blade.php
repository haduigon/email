@extends('ancestor')

@section('body')
@foreach($output as $row)
<p>{{$row}}</p>
@endforeach
@endsection