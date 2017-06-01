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
                  <div class="resume-block">
                      <div class="img-profile"><img src="./assets/theme/images/people/7.jpg" alt=""></div>
                      <div class="desc">
                        <h2>Bryon Czoch</h2>
                        <h4>PHP Developer</h4>
                        <p>Chicago, IL</p>

                        <hr/>
                        <h5>About Me</h5>
                        <p>Early on, we were instrumental in the rise of the U.S. space program, the creation of global computer timesharing networks, the use of complex databases to consolidate credit information, and we were the first software firm to be listed on the New York Stock Exchange</p>

                        <h3 class="resume-sub-title"><span>Work Experience</span></h3>

                        <h4>PHP Developer</h4>
                        <h5>Barcode Giant <span class="color-white-mute"> - Chicago, IL</span></h5>
                        <p  class="color-white-mute">March 2014 to August 2014</p>
                        <h5>Responsibilities :</h5>
                        <p>Magento/PHP development for a Point-of-sale equiptment dealer. I worked on setting up VMware ESX sandbox developer environment. I also built their quote system in Magento. They have 8 other websites that sell the same equipment so I also worked on keeping them up to date with the main website that brings in revenue. </p>
                        <h5>Skills Used :</h5>
                        <p>PHP, Javascript, XML, JSON, Linux Apache Mysql and Python</p>


                        <h4>Programmer/Analyst II</h4>
                        <h5>University of Chicago</h5>
                        <p class="color-white-mute">March 2012 to March 2014</p>
                        <p>Extending/Customizing Zend Framework 2 based library search resource portal (http://myportal.domain.com)
                          <br/>Maintaining legacy employee travel/training requisition system and division hours site</p>

                        <h4>Web Developer/System Administrator</h4>
                        <h5>American Nuclear Society</h5>
                        <p  class="color-white-mute">March 2011 to March 2012</p>
                        <p>Programming additions to the existing Ans.org website </p>
                        <ul>
                          <li>Supporting/migrating Wordpress blog AnsNuclearCafe.org </li>
                          <li>Setup, support of Linux servers</li>
                          <li>Supporting operations of the organization w/ tech knowledge </li>
                        </ul>


                        <h3 class="resume-sub-title"><span>Education</span></h3>
                        <h4>Bachelor in Computer Science</h4>
                        <h5>Telkom University <span class="color-white-mute">- Bloomington, IN</span></h5>

                        <h3  class="resume-sub-title"><span>Additional Information</span></h3>
                        <h4>SKILLS:</h4>
                        <ul>
                          <li> PHP 5, Perl and Python scripting </li>
                          <li>Java</li>
                          <li>SQL, Mysql, MongoDB </li>
                          <li>Revision control/source code management using Mercurial, GIT, RCS/CVS </li>
                          <li>JavaScript Libraries</li>
                          <li>Apache Solr search engine </li>
                          <li>Wordpress, Drupal, Joomla, Mambo, CMS </li>
                          <li>Adobe Photoshop & GIMP </li>
                          <li> Working in a Linux / Unix environment (shell scripting and command line utilities)</li>
                        </ul>

                        <h3  class="resume-sub-title"><span>Contact Information</span></h3>
                  <div>
                    <label>Email: </label>
                    <span>awalmubarak6@gmail.com</span>
                  </div>
                  <div>
                    <label>Phone: </label>
                    <span>0270 11 6464</span>
                  </div>
                  <div>
                    <label>Facebook URL: </label>
                    <a href="#"><span>facebook.com/weconnectjobs</span></a>
                  </div>
                  <div>
                    <label>Linkedin URL: </label>
                    <span>linkedin.com/weconnectjobs</span>
                  </div>
                  <div>
                    <label>Website: </label>
                    <span>company.com</span>
                  </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--end body-content -->


@endsection
