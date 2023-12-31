@extends('main.main')
@section('content')
      <!-- Carousel Start -->
      <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="../assets/img/carousel-1.jpg" alt="" />
            <div
              class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
              style="background: rgba(24, 29, 56, 0.7)"
            >
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-sm-10 col-lg-8">
                    <h5
                      class="text-primary text-uppercase mb-3 animated slideInDown"
                    >
                      Best Online Courses
                    </h5>
                    <h1 class="display-3 text-white animated slideInDown">
                      The Best Online Learning Platform
                    </h1>
                    <p class="fs-5 text-white mb-4 pb-2">
                      Gaeni Moentari Nusantara (GEMA) is a non-profit organization
                      that is intended for developing education.
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                      >Read More</a
                    >
                    <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="../assets/img/carousel-2.jpg" alt="" />
            <div
              class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
              style="background: rgba(24, 29, 56, 0.7)"
            >
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-sm-10 col-lg-8">
                    <h5
                      class="text-primary text-uppercase mb-3 animated slideInDown"
                    >
                      Best Online Courses
                    </h5>
                    <h1 class="display-3 text-white animated slideInDown">
                      Get Educated Online From Your Home
                    </h1>
                    <p class="fs-5 text-white mb-4 pb-2">
                      Learning doesn't have to be face-to-face! GEMA serves an
                      online educational so you can learn anytime and anywhere
                      around the world.
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                      >Read More</a
                    >
                    <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel End -->

      <!-- About Start -->
      @include('partials.about')
      <!-- About End -->

      <!-- Who Start -->
      @include('partials.service')
      <!-- Who End -->
@endsection
