@extends('layouts.app')
@section('content')
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Gallery</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Web Design</a></li>
            <li><a href="#" data-filter=".photography">Photography</a></li>
            <li><a href="#" data-filter=".product">Product Design</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 product">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 product">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 photography">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 photography">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 product">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 photography">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 photography">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/11-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/12-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Project Title</h4>
              </div>
              <img src="img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection