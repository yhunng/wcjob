@extends('layouts.nav')

@section('title')
Jobseeker Profile - WeConnect Jobs
@endsection
@section('main')

  @include("layouts.pages.header")




  <!-- body-content -->
        <div class="body-content clearfix" >

          <div class="bg-color1">
            <div class="container">

              @include('sidebars.jobseeker')


              <div class="col-md-9 col-sm-9">
                <div class="block-section box-side-account">
                  <h3 class="no-margin-top">Applied Jobs</h3>
                  <hr/>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Job Title</th>
                          <th class="text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Php Developer</td>
                          <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Web Design</td>
                          <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>SEO Analytics</td>
                          <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Project Manager</td>
                          <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Ruby on Rails</td>
                          <td class="text-right"><a href="#" class="btn btn-theme btn-xs btn-default">Remove</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!-- pagination -->
                  <nav >
                    <ul class="pagination pagination-theme  ">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&larr;</span>
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&rarr;</span>
                        </a>
                      </li>
                    </ul>
                  </nav><!-- pagination -->

                </div>
              </div>
            </div>
          </div>
        </div><!--end body-content -->



@endsection
