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
                  <h3 class="no-margin-top">About My Company</h3>
                  <hr/>

                  <p>For over 50 years, Our Company has been a leader in the global IT industry. </p>
                    <p>Early on, we were instrumental in the rise of the U.S. space program, the creation of global computer timesharing networks, the use of complex databases to consolidate credit information, and we were the first software firm to be listed on the New York Stock Exchange. </p>
                    <p>More recently we invented the concept of business process reengineering, implemented the first airport ground traffic system, pioneered the strategic use of IT outsourcing by the world’s leading businesses, and led the first major public sector cloud computing project. </p>
                    <p>Currently, Our Company employs 91,000 professionals in 90 countries and is listed as a Fortune "World's Most Admired Company," ranking in the Top 4 of IT services providers (2011) for the second consecutive year.</p>
                    <p>Our Company offers challenging professional opportunities that will draw on your skills and allow you to identify and achieve your career goals in a supportive environment. Our Company also offers many avenues to mastering your chosen profession - with exciting work assignments, training opportunities and exposure to new business ideas, knowledge and people. At Our Company, you can have a voice in your job, take control of your career path and contribute to the company's overall operation and growth. Count on us for excellent career opportunities.</p>
                  <h3 class="no-margin-top">Contact</h3>
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
        </div><!--end body-content -->



@endsection
