@extends('layouts.nav')

@section('title')
Employer Profile - WeConnect Jobs
@endsection
@section('main')

  @include("layouts.pages.header")


  <!-- body-content -->
      <div class="body-content clearfix" >


        <div class="bg-color1">
          <div class="container">

            @include('sidebar.employer')

            <div class="col-md-9 col-sm-9">
              <div class="block-section box-side-account">
                <h3 class="no-margin-top">Applications</h3>
                <hr/>

                <div class="alert alert-warning alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="color-heading">Android App Developer Wanted In Ho for Three Days</h4>
                  <p>Application Recieved From <a href="#">John Doe Jhon</a></p>
                  <div class="white-space-10"></div>
                  <p>
                    <a href="#" class="btn btn-sm btn-default btn-theme ">Check Profile</a>
                    <a href="#" class="btn btn-sm btn-danger btn-theme">Decline</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--end body-content -->


@endsection
