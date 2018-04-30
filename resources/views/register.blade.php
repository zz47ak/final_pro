@extends('layouts.app')
@section('content')

<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Register now</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
{!! Form::open(['url' => 'register/submit']) !!}
<div class="row">
      <div class="col-md-6">
          <div class="form-group">
              {{ Form::text('name','',['class' => 'form-control', 'placeholder' => 'Name']) }}
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
          {{ Form::text('email','',['class' => 'form-control', 'placeholder' => 'Email ID']) }}
          </div>
      </div>
    </div>

<div class="row">
      <div class="col-md-6">
          <div class="form-group">
              {{ Form::text('regno','',['class' => 'form-control', 'placeholder' => 'Registration Number']) }}
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
              {{ Form::text('mob','',['class' => 'form-control', 'placeholder' => 'Mobile Number']) }}  
          </div>
      </div>
</div>
<div class="row">
      <div class="col-md-12">
          <div class="form-group">
              {{ Form::select('event', ['talkz' => 'Echo Talkz', 'dress' => 'Dress to Express', 'blog' => 'Blogathon'], null, ['class' =>'form-control' , 'placeholder' => 'Choose event']) }}
          </div>
      </div>
</div>
<div class=row>
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  <div class="col-sm-4"></div>
  @if(count($errors)> 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
  </div>
</div>
<div class="row">
      <div class="col-md-12">
          <div class="form-group">
              {{ Form::submit('Register' , ['class' => 'btn btn-default btn-lg'])}}
          </div>
      </div>
</div>

<div class=row>
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  <div class="col-sm-4"></div>
  @if(session('success'))
  <div class="alert alert-success">
            {{session('success')}}
        </div>
  @endif
  </div>
</div>
{!! Form::close() !!}
    
      <div class="social">
      <h6>Follow us on social media</h6><br>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection