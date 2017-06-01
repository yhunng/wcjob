@extends('layouts.nav')

@section('title')
Employer Profile - WeConnect Jobs
@endsection
@section('main')

  @include("layouts.pages.header")


  <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="bg-color2 block-section line-bottom">
          <div class="container">
            <h1 class="text-center no-margin">Post a Job</h1>
          </div>
        </div>

        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">

                <!-- form post a job -->
                <form>

                  <div class="form-group">
                    <label>Job title</label>
                    <input type="text" class="form-control "  placeholder="Enter Job Title">
                  </div>
                  <div class="form-group">
                    <label>Job description</label>
                    <div class="color-white-mute"><small>Describe the responsibilities of this job, required work experience, skills, or education.</small></div>
                    <textarea class="form-control" rows="6" placeholder="Enter Job Description"></textarea>
                    <small class="color-white-mute">Formatting Options:    ##heading      *bold*          _italic_          * bulleted list</small>
                  </div>
                  <div class="form-group">
                            <label>Location</label>
                            <select class="form-control" required>
                              <option value="">--Select--</option>
                              <option value="">Online</option>
                              <option value="1">Greater Accra Region</option>
                              <option value="2">Central Region</option>
                              <option value="3">Eastern Region</option>
                              <option value="4">Western Region</option>
                              <option value="5">Ashanti Region</option>
                              <option value="6">Volta Region</option>
                              <option value="7">Northern Region</option>
                              <option value="8">Upper East Region</option>
                              <option value="9">Upper West Region</option>
                              <option value="10">Brong Ahafo Region</option>
                            </select>
                        </div>

                  <!-- industries -->
                  <!-- checkboxs -->
                  <div class="form-group">
                    <label>Industries</label>
                    <div class="row clearfix">
                      <div class="col-md-4">
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="industry[]">
                            <span class="fa fa-check"></span>
                            Accounting
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="industry[]">
                            <span class="fa fa-check"></span>
                            Admin & HR
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="industry[]">
                            <span class="fa fa-check"></span>
                            Banking  /  Finance
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="industry[]">
                            <span class="fa fa-check"></span>
                            Beauty Care  /  Health
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="industry[]">
                            <span class="fa fa-check"></span>
                            Building & Construction
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="industry[]">
                            <span class="fa fa-check"></span>
                            Design
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="industry[]">
                            <span class="fa fa-check"></span>
                            Education
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox" name="industry[]">
                            <span class="fa fa-check"></span>
                            Engineering
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox">
                            <span class="fa fa-check"></span>
                            Hospitality  /  F & B
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox">
                            <span class="fa fa-check"></span>
                            Information Technology (IT)
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox">
                            <span class="fa fa-check"></span>
                            Insurance
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox">
                            <span class="fa fa-check"></span>
                            Management
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox">
                            <span class="fa fa-check"></span>
                            Manufacturing
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox">
                            <span class="fa fa-check"></span>
                            Media & Advertising
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox">
                            <span class="fa fa-check"></span>
                            Property
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox">
                            <span class="fa fa-check"></span>
                            Others
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- end checkboxs -->



                  <div class="form-group">
                    <label>Salary Range (optional)</label>
                    <div class="row clearfix">
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option>500 - 100</option>
                          <option>400- 8000</option>
                          <option>5000- 8999</option>
                          <option>9000 - 98999</option>
                          <option>5575- 9997r</option>
                        </select>
                      </div>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option>per hour</option>
                          <option>per day</option>
                          <option>per week</option>
                          <option>per month</option>
                          <option>per year</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row clearfix">
                  <div class="col-xs-6">
                  <div class="form-group">
                    <label>Qualification (optional)</label>


                        <select class="form-control">
                          <option>Wassce</option>
                          <option>Bece</option>
                          <option>3 years</option>
                          <option>4 years</option>
                          <option>5 years</option>
                        </select>
                      </div>
                      </div>
                      <div class="col-xs-6">
                      <div class="form-group">

                        <label>Job Type</label>
                        <select class="form-control">
                          <option>Part Time</option>
                          <option>Full time</option>
                          <option>Contract</option>
                          <option>Internship</option>
                          <option>Temporary</option>
                        </select>

                      </div>
                    </div>
                  </div>
                  <p>Applications will be emailed to: <a href="#">your@email.com</a> – <a href="#">change email</a></p>

                  <div class="form-group ">
                    <button class="btn btn-t-primary btn-theme">Continue</button>
                  </div>


                </form> <!-- end form post a job -->
              </div>
            </div>
          </div>
        </div>
      </div><!--end body-content -->


@endsection
