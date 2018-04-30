@extends('layouts.app')
@section('content')
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Registrations</h2>
      <hr>
    </div>
    @if(count($messages)>0)
        @foreach($messages as $message)
        <ul class="list-group">
        <li class="list-group-item">Name:{{ $message->name}}</li>
        <li class="list-group-item">Email ID:{{ $message->email}}</li>
        <li class="list-group-item">Registration Number:{{ $message->regno}}</li>
        <li class="list-group-item">Mobile Number:{{ $message->mob}}</li>
        <li class="list-group-item">Event:{{ $message->event}}</li>
        </ul>
        @endforeach
    @endif
  </div>
</div>
@endsection