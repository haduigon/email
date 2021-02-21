@extends('ancestor')

@section('body')
Queue was started with :

<p>Hello, {{$user ?? ''}}</p>
<p>Hello, {{$user2 ?? ''}}</p>
<p>Hello, {{$user3 ?? ''}}</p>
@endsection