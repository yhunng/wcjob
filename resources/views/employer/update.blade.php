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
                  <h3 class="no-margin-top">Update Profile</h3>
                  <hr/>
                  <form>
                    <div class="form-group">
                      <label for="name">Company Name</label>
                      <input type="text" name="x" value="" class="form-control" id="name" placeholder="Enter Company name">
                    </div>

                    <div class="form-group">
                              <label>Location</label>
                              <select class="form-control">
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

                    <div class="form-group">
                      <label>About Company</label>
                      <div class="color-white-mute"><small>Write about your company, what you do etc.</small></div>
                      <textarea class="form-control" rows="6" placeholder="Write about your company here"></textarea>
                      <small class="color-white-mute">Formatting Options:    ##heading      *bold*          _italic_          * bulleted list</small>
                    </div>
                    <h4>Contact Details</h4>
                    <div class="form-group">
                      <label for="name">Email</label>
                      <input type="text" name="email" value="" class="form-control" id="name" placeholder="Enter Company email">
                    </div>
                    <div class="form-group">
                      <label for="name">Phone (Optional)</label>
                      <input type="text" name="phone" value="" class="form-control" id="name" placeholder="Enter Phone (Optional)">
                    </div>
                    <div class="form-group">
                      <label for="name">Facebook URL (Optional)</label>
                      <input type="text" name="facebook" value="" class="form-control" id="name" placeholder="Enter Facebook URL Optional">
                    </div>
                    <div class="form-group">
                      <label for="name">Linkedin URL (Optional)</label>
                      <input type="text" name="linkedin" value="" class="form-control" id="name" placeholder="Enter Linkedin URL (Optional)">
                    </div>
                    <div class="form-group">
                      <label for="name">Company Website (Optional)</label>
                      <input type="text" name="website" value="" class="form-control" id="name" placeholder="Enter Website (Optional)">
                    </div>

                    <button type="button" class="btn btn-theme btn-t-primary">Update Profile</button>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div><!--end body-content -->


@endsection
