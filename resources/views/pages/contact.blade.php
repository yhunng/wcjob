@extends('layouts.nav')

@section('title')
Jobseeker Profile - WeConnect Jobs
@endsection
@section('main')

  @include("layouts.pages.header",['page'=>'Contact Us'])


  <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <h2 class="text-center">We're here to help in any way we can.<br/>
              <small> Please submit your request below and we'll get back to you shortly.</small></h2>
            <div class="white-space-20"></div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <!-- form contact -->
                <form>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="your@email.com">
                  </div>
                  <div class="form-group">
                    <label>Subject</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="6"></textarea>
                  </div>
                  <div class="form-group text-center">
                    <div class="white-space-10"></div>
                    <button type="submit" class="btn btn-theme btn-lg btn-long btn-t-primary btn-pill">Send</button>
                  </div>
                </form><!-- end form contact -->

                <div class="white-space-10"></div>
                <p class="text-center"><span class="span-line">OR</span></p>

                <!-- box with icon -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="box-ic-center ">
                      <i class="fa fa-phone ic-box"></i>
                      <h4>Phone</h4>
                      <p>0270 11 6464</p>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="box-ic-center ">
                      <i class="fa fa-envelope ic-box"></i>
                      <h4>Email</h4>
                      <p>support@weconnectjobs.com</p>
                    </div>

                  </div>
                </div> <!-- end box with icon -->

              </div>
            </div>
          </div>
        </div>




      </div><!--end body-content -->

@endsection
