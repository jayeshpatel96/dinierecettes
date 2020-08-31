<?php include 'common/header.php'; ?>
  
  <!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/slider/sd3.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-orange font-36">Login</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Login</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
    
    <!-- Divider: Google map -->
   

    <!-- Divider: Contact form -->
    <section>
      <div class="container">
        <div class="row">
        
          <div class="col-md-6 col-md-offset-3" >
            <h4 class="text-uppercase">Log In</h4>
            <br><br>
            <form method="post" action="controller.php" id="donation-main-form" class="donation-form">
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="form-group">
                        <label>Email</label>
                    <input type="text" placeholder="Enter Email" id="email" name="email" required="" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                    
                  <div class="form-group">
                      <label>Password</label>
                    <input type="password" placeholder="Enter Password" id="password" name="password" class="form-control" required="">
                  </div>
                </div>

                <div class="col-md-12 wthreelogin-text">
                 
                  
                      <ul> 
                        <li>
                          <label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
                            <span> Remember me ?</span> 
                          </label> 
                        </li>
                        <li><a href="forgot.php">Forgot password?</a> </li>
                      </ul>
            
                  
                  
                </div>
                
         
              <div class="form-group text-center">
                <button class="btn btn-colored btn-rounded btn-orange pl-30 pr-30" name="usercheck" id="usercheck">Log in</button>
                
              </div>
              <p align="center">Don't have an Account? <a href="signup.php"> Sign Up Now!</a></p> 
               
              </div>
            </form>
          </div>

       

        </div>
      </div>
    </section>
 
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>