 <!--authentication-->
 <div class="overlay">
      <div class='loader position-absolute top-50 start-50 translate-middle'><img src="views/images/logoloader.gif" alt=""></div>
    </div>
 <body style="background-image: url('views/images/marblebackground.png'); background-size: cover; background-repeat: no-repeat;">
 

   <div class="container-fluid" style="">
          <div class="row">
          <div class="d-flex justify-content-center align-items-center">
             <div class="col-12 col-md-8 col-lg-6 col-xl-4 col-sm-10 ">
              <div class="card border-3 rounded-5 position-absolute top-50 start-50 translate-middle">
                <div class="card-body p-5">
                 <div class=" text-center">
                    <img src="views/images/try.png" class="align-center mb-4" width="100" alt="">
                    <h4 class="fw-bold">Forgot Password?</h4>
                    <p class="mb-0">Enter your registered email to reset the password</p>
                 </div>
  
                    <div class="form-body mt-4">
                       <form class="row g-3" id="forgotForm" method="POST" role="form" autocomplete="nope">
                          <div class="col-12">
                             <label class="form-label">Registered Email</label>
                             <input type="text" id="forgot_email" class="form-control" placeholder="example@user.com">
                          </div>
                          <div class="col-12">
                             <div class="d-grid gap-2">
                                <button  type="submit"  class="btn text-white"  style="background: radial-gradient(circle, rgba(192,128,249,1) 0%, rgba(148,191,242,1) 100%); font-weight:bold;">Proceed</button>
                                <a href="login" class="btn btn-light border">Back to Login</a>
                             </div>
                          </div>
                       </form>
                    </div>
                </div>
              </div>
           </div>
        </div>
     </div><!--end row-->
  </div>
  </body>     
      <!--authentication-->
  