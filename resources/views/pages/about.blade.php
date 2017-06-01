@extends('layouts.nav')

@section('title')
Jobseeker Profile - WeConnect Jobs
@endsection
@section('main')

  @include("layouts.pages.header",['page'=>'About Us'])



  <!-- body-content -->
        <div class="body-content clearfix" >

          <!-- block top -->
          <div class="bg-color1 block-section line-bottom">
            <div class="container text-center">
              <h2 class="">We help people all over the country hire and get hired</h2>
              <div class="white-space-15"></div>
              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

              <!-- world map -->
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <img src="./assets/theme/images/World_map_png-7.png" alt="" class="img-full">
                </div>
              </div><!-- world map -->

              <!--<h4>JobPlanet helps people get jobs: <a href="#" class="color-white-mute">Over 3.5 million stories shared</a></h4>-->
              <hr/>
              <div class="white-space-15"></div>
              <h2>We can help you get a job</h2>
              <p>If the job is online, you will find it on WeConnect Jobs</p>
              <div class="white-space-15"></div>

              <!-- box with icon center -->
              <div class="row">
                <div class="col-md-4">
                  <div class="box-ic-center">
                    <i class="fa fa-laptop ic-box"></i>
                    <h4>Web</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, </p>
                    <a href="#" class="btn btn-sm btn-pill btn-theme btn-line dark">Find a Job</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-ic-center ">
                    <i class="fa fa-envelope-o ic-box"></i>
                    <h4>Email Alert</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, </p>
                    <a href="#" class="btn btn-sm btn-pill btn-theme btn-line dark">Register Now</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="box-ic-center">
                    <i class="fa fa-tablet ic-box"></i>
                    <h4>Search Order</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, </p>
                    <a href="#" class="btn btn-sm btn-pill btn-theme btn-line dark">Contac US</a>
                  </div>
                </div>
              </div><!-- box with icon center -->

              <hr/>
              <div class="white-space-15"></div>
              <h2>We can help you hire</h2>
              <p>JobPlanet for Employers provides easy and effective ways to hire.</p>
              <div class="white-space-15"></div>

              <!-- box with icon center -->
              <div class="row">
                <div class="col-md-6">
                  <div class="box-ic-center">
                    <i class="fa fa-clipboard ic-box"></i>
                    <h4>Post a job</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, </p>
                    <a href="#" class="btn btn-sm btn-pill btn-theme btn-line dark">Post a Job</a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-ic-center ">
                    <i class="fa fa-search ic-box"></i>
                    <h4>Find Resumes</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, </p>
                    <a href="#" class="btn btn-sm btn-pill btn-theme btn-line dark">Find Resumes</a>
                  </div>
                </div>
              </div><!-- box with icon center -->

            </div>
          </div><!-- end block top -->

          <!-- testimonial -->
          <div class="bg-color2 block-section line-bottom">
            <div class="container text-center">
              <h2>Testimonial</h2>
              <div class="white-space-30"></div>
              <div class="row">
                <div class="col-md-3">
                  <div class="box-testimonial">
                    <p class="desc"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                    <img src="./assets/theme/images/people/1.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box-testimonial">
                    <p class="desc"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                    <img src="./assets/theme/images/people/2.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box-testimonial">
                    <p class="desc"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                    <img src="./assets/theme/images/people/3.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box-testimonial">
                    <p class="desc"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                    <img src="./assets/theme/images/people/5.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- end testimonial -->

          <!-- patners logo
          <div class="bg-color1 block-section line-bottom">
            <div class="container text-center clients ">
              <a href="#"><img src="./assets/theme/images/patner/1.png" alt=""></a>
              <a href="#"><img src="./assets/theme/images/patner/2.png" alt=""></a>
              <a href="#"><img src="./assets/theme/images/patner/3.png" alt=""></a>
              <a href="#"><img src="./assets/theme/images/patner/4.png" alt=""></a>
              <a href="#"><img src="./assets/theme/images/patner/5.png" alt=""></a>
            </div>
          </div> end patners logo-->
        </div><!--end body-content -->

@endsection
