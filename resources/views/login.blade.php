@extends('layout.app')
@section('content')
@foreach($users as $user)
  <p>{{$user->id}}</p>
@endforeach
<p>rizki</p>
@endsection