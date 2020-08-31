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
              <h2 class="text-orange font-36">Register</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Register</li>
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
        
          <div class="col-md-6 col-md-offset-3" data-bg-color="#f5f5f5">
            
            
            <h4 class="text-uppercase">OTP Validation</h4>
            <br><br>
            <form method="post" action="controller.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="form-group">
                    <input type="text" placeholder="Enter OTP" id="otp" name="otp" required="" class="form-control">
                  </div>
                </div>
                
                
                <div class="col-md-12">
                  <div class="form-group text-center">
                      <button class="btn btn-colored btn-rounded btn-orange pl-30 pr-30" type="submit" name="validate_otp">Validate OTP</button>
                  </div>

                </div>
               </div>
            </form>
          </div>

      

        </div>
      </div>
    </section>
 
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>