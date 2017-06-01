<!-- form search area-->
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="logo text-center-sm inline"> <a href="index.html">
                  <img src="assets/theme/images/logo.png" alt="">
                  <div class="label-add">
                    @if (isset($label))
                      {{$label}}
                    @endif

                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-8">

              <!-- form search  -->
              <form class="form-search-list">
                <div class="row">
                  <div class="col-sm-5 col-xs-6">
                    <div class="form-group">
                      <label class="color-white">What</label>
                      <input class="form-control" placeholder="job title" >
                    </div>
                  </div>
                  <div class="col-sm-5 col-xs-6">
                    <div class="form-group">
                      <label class="color-white">Where</label>
                      <input class="form-control" placeholder="region">
                    </div>
                  </div>
                  <div class="col-sm-2 col-xs-12">
                    <div class="form-group">
                      <label class="hidden-xs">&nbsp;</label>
                      <button class="btn btn-block btn-theme  btn-success">Search</button>
                    </div>
                  </div>
                </div>
              </form><!-- end form search  -->


            </div>
          </div>
