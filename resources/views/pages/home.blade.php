@extends('layouts.nav')

@section('title')
WeConnect Jobs
@endsection
@section('main')



  <div class="hero-header">
            <div class="inner-hero-header">
              <div class="container">
                <div class="text-center logo"> <a href="index.html"><img src="assets/theme/images/logo.png" alt=""></a></div>
                <div class="relative">
                  <i class="fa fa-globe ic-fade-globe"></i>
                  <!-- form search -->
                  <form class="form-search-home" method="post" action="job_list.html">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>What</label>
                          <input class="form-control  input-lg" placeholder="job title">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Where</label>
                          <input class="form-control input-lg" placeholder="city or region">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-t-primary btn-lg btn-theme btn-pill btn-block">Find a Job</button>
                    </div>
                    <div class="text-center">
                      <span style="visibility:hidden">Advanced Job Search</span>
                    </div>
                  </form> <!-- end form search -->
                </div>
              </div>
            </div>


          </div>
        </header><!-- end main-header -->


        <!-- body-content -->
        <div class="body-content clearfix" >

          <!-- box simple static -->
          <div class="block-section bg-color1">
            <div class="container">
              <div class="row text-center">
                <div class="col-md-4">
                  <h3 class="font-2x ">203,285</h3>
                  <h4 class="color-text">Registered Member</h4>
                </div>
                <div class="col-md-4">
                  <h3 class="font-2x ">3,603,945</h3>
                  <h4 class="color-text">Joblist Posted</h4>
                </div>
                <div class="col-md-4">
                  <h3 class="font-2x ">53,945</h3>
                  <h4 class="color-text">Awesome Company</h4>
                </div>
              </div>
            </div>
          </div><!-- end box simple static -->

        </div><!--end body-content -->




@endsection
