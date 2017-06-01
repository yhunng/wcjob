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
            @include('sidebars.jobseeker')
            <div class="col-md-9 col-sm-9">
              <div class="block-section box-side-account">
                <h3 class="no-margin-top">Update Profile</h3>
                <hr/>
                <form>
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="x" value="" class="form-control" id="name" placeholder="Enter Your Full name">
                  </div>

                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="x" value="" class="form-control" id="name" placeholder="Eg. Sales Representative, PHP Developer etc.">
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
                    <label>About You</label>
                    <div class="color-white-mute"><small>Write a short, eye catchy description about you.</small></div>
                    <textarea class="form-control" rows="6" placeholder="Write about you."></textarea>
                    <small class="color-white-mute">Formatting Options:    ##heading      *bold*          _italic_          * bulleted list</small>
                  </div>





                  <h4>Contact Details</h4>
                  <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" value="" class="form-control" id="name" placeholder="Enter email">
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
                <hr/>

                <button type="button" class="btn btn-theme btn-t-primary" st data-toggle="modal" data-target="#myExperience">Add Experience</button>
                <hr/>

                  <!--Start Work experience-->

                    <div>
                      <h4>PHP Developer</h4>
                      <h5>Barcode Giant <span class="color-white-mute"> - Chicago, IL</span></h5>
                      <p  class="color-white-mute">March 2014 to August 2014</p>
                      <h5>Responsibilities :</h5>
                      <p>Magento/PHP development for a Point-of-sale equiptment dealer. I worked on setting up VMware ESX sandbox developer environment. I also built their quote system in Magento. They have 8 other websites that sell the same equipment so I also worked on keeping them up to date with the main website that brings in revenue. </p>
                    </div>


                <!--End Work experience-->
                <hr/>


                  <button type="button" class="btn btn-theme btn-t-primary" data-toggle="modal" data-target="#myEducation">Add Education</button>
                  <hr/>

                  <!--Start Education-->
                      <div>
                      <h4>Bachelor in Computer Science</h4>
                      <h5>Telkom University <span class="color-white-mute">- Bloomington, IN</span></h5>
                      </div>

                  <!--End Education-->
                  <hr/>

                  <button type="button" class="btn btn-theme btn-t-primary" data-toggle="modal" data-target="#mySkill">Add Skill</button>

                  <hr/>

                  <!--Start SKill-->
                  <div>
                    <ul>
                        <li> PHP 5, Perl and Python scripting </li>
                        <li>Java</li>
                    </ul>
                  </div>
                  <!--End SKill-->
                  <hr/>

                  <!--Start Modal-->


                <div class="modal fade" id="myExperience" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    <form action="#">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>×</span></button>
                        <h4 class="modal-title">Add an Experience</h4>
                      </div>
                      <div class="modal-body">

                          <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="" class="form-control" id="name" placeholder="Eg. Financial Manager, Web Developer etc.">
                          </div>

                          <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="title" value="" class="form-control" id="name" placeholder="Which Company did you work at?">
                          </div>

                          <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="location" value="" class="form-control" id="name" placeholder="">
                          </div>

                          <div class="form-group">
                            <label>From</label>
                            <select class="form-control">
                              <option value="">Month</option>
                              <option value="1">January</option>
                              <option value="2">February</option>
                              <option value="3">March</option>
                              <option value="4">April</option>
                              <option value="5">May</option>
                              <option value="6">June</option>
                              <option value="7">July</option>
                              <option value="8">August</option>
                              <option value="9">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                            </select>

                            <select class="form-control">
                              <option value="">Year</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                              <option value="2010">2010</option>
                              <option value="2009">2009</option>
                              <option value="2008">2008</option>
                              <option value="2007">2007</option>
                              <option value="2006">2006</option>
                              <option value="2005">2005</option>
                              <option value="2004">2004</option>
                              <option value="2003">2003</option>
                              <option value="2002">2002</option>
                              <option value="2001">2001</option>
                              <option value="2000">2000</option>
                              <option value="1999">1999</option>
                              <option value="1998">1998</option>
                              <option value="1997">1997</option>
                              <option value="1996">1996</option>
                              <option value="1995">1995</option>
                              <option value="1994">1994</option>
                              <option value="1993">1993</option>
                              <option value="1992">1992</option>
                              <option value="1991">1991</option>
                              <option value="1990">1990</option>
                              <option value="1989">1989</option>
                              <option value="1988">1988</option>
                              <option value="1987">1987</option>
                              <option value="1986">1986</option>
                              <option value="1985">1985</option>
                              <option value="1984">1984</option>
                              <option value="1983">1983</option>
                              <option value="1982">1982</option>
                              <option value="1981">1981</option>
                              <option value="1980">1980</option>
                              <option value="1979">1979</option>
                              <option value="1978">1978</option>
                              <option value="1977">1977</option>
                              <option value="1976">1976</option>
                              <option value="1975">1975</option>
                              <option value="1974">1974</option>
                              <option value="1973">1973</option>
                              <option value="1972">1972</option>
                              <option value="1971">1971</option>
                              <option value="1970">1970</option>
                              <option value="1969">1969</option>
                              <option value="1968">1968</option>
                              <option value="1967">1967</option>
                              <option value="1966">1966</option>
                              <option value="1965">1965</option>
                              <option value="1964">1964</option>
                              <option value="1963">1963</option>
                              <option value="1962">1962</option>
                              <option value="1961">1961</option>
                              <option value="1960">1960</option>
                              <option value="1959">1959</option>
                              <option value="1958">1958</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label>To</label>
                            <select class="form-control">
                              <option value="">Month</option>
                              <option value="1">January</option>
                              <option value="2">February</option>
                              <option value="3">March</option>
                              <option value="4">April</option>
                              <option value="5">May</option>
                              <option value="6">June</option>
                              <option value="7">July</option>
                              <option value="8">August</option>
                              <option value="9">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12">December</option>
                            </select>

                            <select class="form-control">
                              <option value="">Year</option>
                              <option value="2017">2017</option>
                              <option value="2016">2016</option>
                              <option value="2015">2015</option>
                              <option value="2014">2014</option>
                              <option value="2013">2013</option>
                              <option value="2012">2012</option>
                              <option value="2011">2011</option>
                              <option value="2010">2010</option>
                              <option value="2009">2009</option>
                              <option value="2008">2008</option>
                              <option value="2007">2007</option>
                              <option value="2006">2006</option>
                              <option value="2005">2005</option>
                              <option value="2004">2004</option>
                              <option value="2003">2003</option>
                              <option value="2002">2002</option>
                              <option value="2001">2001</option>
                              <option value="2000">2000</option>
                              <option value="1999">1999</option>
                              <option value="1998">1998</option>
                              <option value="1997">1997</option>
                              <option value="1996">1996</option>
                              <option value="1995">1995</option>
                              <option value="1994">1994</option>
                              <option value="1993">1993</option>
                              <option value="1992">1992</option>
                              <option value="1991">1991</option>
                              <option value="1990">1990</option>
                              <option value="1989">1989</option>
                              <option value="1988">1988</option>
                              <option value="1987">1987</option>
                              <option value="1986">1986</option>
                              <option value="1985">1985</option>
                              <option value="1984">1984</option>
                              <option value="1983">1983</option>
                              <option value="1982">1982</option>
                              <option value="1981">1981</option>
                              <option value="1980">1980</option>
                              <option value="1979">1979</option>
                              <option value="1978">1978</option>
                              <option value="1977">1977</option>
                              <option value="1976">1976</option>
                              <option value="1975">1975</option>
                              <option value="1974">1974</option>
                              <option value="1973">1973</option>
                              <option value="1972">1972</option>
                              <option value="1971">1971</option>
                              <option value="1970">1970</option>
                              <option value="1969">1969</option>
                              <option value="1968">1968</option>
                              <option value="1967">1967</option>
                              <option value="1966">1966</option>
                              <option value="1965">1965</option>
                              <option value="1964">1964</option>
                              <option value="1963">1963</option>
                              <option value="1962">1962</option>
                              <option value="1961">1961</option>
                              <option value="1960">1960</option>
                              <option value="1959">1959</option>
                              <option value="1958">1958</option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label>Responsibilities</label>
                            <textarea class="form-control" rows="6"></textarea>
                          </div>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-theme btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-theme">Save Changes</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="myEducation" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    <form>
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>×</span></button>
                        <h4 class="modal-title">Add Education</h4>
                      </div>
                      <div class="modal-body">
                          <div class="form-group">
                            <label>Qualification</label>
                            <input type="text" name="skill" value="" class="form-control" id="name" placeholder="Eg.Bachelor in Computer Science">
                          </div>
                          <div class="form-group">
                            <label>School</label>
                            <input type="text" name="skill" value="" class="form-control" id="name" placeholder="">
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-theme btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-theme">Save Changes</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="mySkill" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    <form>
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span>×</span></button>
                        <h4 class="modal-title">Add a Skill</h4>
                      </div>
                      <div class="modal-body">

                          <label>Enter Your Skill</label>
                          <input type="text" name="skill" value="" class="form-control" id="name" placeholder="Public Speaking, Wordpress, Organizing Events etc.">


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-theme btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-theme">Save Changes</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!--End Modal-->

              </div>
            </div>
          </div>
        </div>
      </div><!--end body-content -->



@endsection
