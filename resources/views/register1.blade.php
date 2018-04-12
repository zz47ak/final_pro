@extends('layouts.app')
@section('content')

<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Register now</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form action="store" method="POST" name="sentMessage" id="contactForm" novalidate>
 <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" name="regno" class="form-control" placeholder="Regisgtration Number" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" name="mob" class="form-control" placeholder="Mobile Number" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <select name="event" class="form-control">
    <option value="null">Select Event</option>              
    <option value="Echo">Echo Talkz</option>
    <option value="kahani">Kahaaniyo ka pitara</option>
    <option value="dress">Dress to Express</option>
    <option value="blog">Blogathon</option>
  </select>
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div id="success"></div>
        <button type="submit" name="submit" id="Submit" class="btn btn-default btn-lg">Register</button>
      </form>
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