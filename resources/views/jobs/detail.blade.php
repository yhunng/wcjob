@extends('layouts.nav')

@section('title')
Jobseeker Profile - WeConnect Jobs
@endsection
@section('main')

  @include("layouts.features.header")

  </header>


  <!-- body-content -->
        <div class="body-content clearfix" >

          <!-- link top -->
          <div class="bg-color2 block-section-xs line-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-6 hidden-xs">
                  <div>Job details :</div>
                </div>
                <div class="col-sm-6">
                  <div class="text-right"><a href="#">&laquo; Go back to job listings</a></div>
                </div>
              </div>
            </div>
          </div><!-- end link top -->

          <div class="bg-color2">
            <div class="container">
              <div class="row">
                <div class="col-md-9">

                  <!-- box item details -->
                  <div class="block-section box-item-details">
                    <div class="row">
                      <div class="col-md-8">
                        <a href="company_page.html"><img src="./assets/theme/images/patner/4.png" alt=""></a>
                      </div>
                      <div class="col-md-4">
                        <p class="text-right"><a href="#">Go to our website &raquo;</a></p>
                      </div>
                    </div>

                    <h2 class="title"><a href="#">Full Stack Web Developer, Internal Tools</a></h2>
                    <div class="job-meta">
                      <ul class="list-inline">
                        <li><i class="fa fa-briefcase"></i> Contract Full-Time</li>
                        <li><i class="fa fa-map-marker"></i> San Diego, CA</li>
                        <li><i class="fa fa-money"></i> $50k - $140k</li>
                      </ul>
                    </div>
                    <p>Location: New York, NY Type: Contracted to Full Time Min. Experience: Experienced
                      Krossover is looking for a Web Application Developer to join our team of smart developers. We build web and mobile applications and games for coaches, athletes and fans. If you're a talented programmer, and like sports and sports analytics, this is the position for you.</p>
                    <p>Our ideal candidate is technically curious, has a solid understanding of OOP and web development, and wants to build applications that improve people's lives.</p>
                    <p>We're interested in filling this position on either a contract or full-time basis. </p>

                    <h4>What you'll do:</h4>
                    <ul>
                      <li>Build operations related applications for daily use</li>
                      <li>Create dashboards and daily / weekly reports </li>
                      <li>Architect features with the development team</li>
                      <li>PHP and/or JavaScript development.  (We use Silex and AngularJS.)</li>
                    </ul>
                    <h4>What we're looking for:</h4>
                    <ul>
                      <li>Experience with the web. Know your GET vs. POST</li>
                      <li>OOP concepts</li>
                      <li>Experience with at least one OOP language, such as:
                        <ul>
                          <li>PHP</li>
                          <li>Java</li>
                          <li>C#</li>
                          <li>Ruby</li>
                          <li>etc.</li>
                        </ul>
                      </li>
                      <li>A love of clean, understandable code and interface</li>
                      <li>You can SELECT, INSERT, UPDATE and DELETE in your SQL database all day</li>
                      <li>Experience working on a team</li>
                      <li>Smarts, humility, and the desire to teach and learn</li>
                    </ul>

                    <p>Krossover is a sports media and analytics startup that brings easy video breakdown and in-depth analytics to coaches and athletes at all levels. Think Friday Night Lights meets Moneyball. We're located in New York's Chelsea neighborhood. It's a spacious, sunny office with not a single grey wall anywhere. Our culture is one of intelligence and collaboration. Every now and then we talk sports.</p>
                    <p>We offer a competitive salary and benefits.</p>
                  </div><!-- end box item details -->

                </div>


                @include('sidebars.job_detailed')


              </div>
            </div>
          </div>




          <!-- modal apply -->
          <div class="modal fade" id="modal-apply">
            <div class="modal-dialog ">
              <div class="modal-content">
                  <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" >Apply</h4>
                  </div>
                  <div class="modal-body">
                    <a href="" class="btn btn-success btn-theme">Login</a>
                    <a href="" class="btn btn-success btn-theme">Register</a>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div><!-- end modal  apply -->
        </div><!--end body-content -->


@endsection
