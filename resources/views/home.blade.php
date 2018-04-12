@extends('layouts.app')
@section('content')
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1 style="color:black">Club Echo</h1>
          <p style="color:black">Every Champion Has an Opinion</p>
          <br><br><br>
         <!--  <a href="#about" class="btn btn-custom btn-lg page-scroll">About</a> --> </div>
      </div>
    </div>
  </div>
</header>

<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Club Echo</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p>Club ECHO lives with the principles that everyone is a champion and every champion has an opinion. The club runs in LPU by the department of soft skills- I</p>
          <a href="/gallery" class="btn btn-default btn-lg page-scroll">Photo Gallery</a> </div>
      </div>
    </div>
  </div>
</div>



@endsection