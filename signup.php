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
            <h4 class="text-uppercase">Sign Up</h4>
            <br><br>
            <form method="post" action="email_verification.php" enctype="multipart/form-data" id="donation-main-form" class="donation-form">
              <div class="row">

                <div class="col-md-12">
                  
                  <div class="form-group">
                   <label>Name</label>
                    <input type="text" placeholder="Enter Name" id="name" name="name" required="" class="form-control">
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                      <label>Email</label>
                    <input type="text" placeholder="Enter Email" id="email" name="email" class="form-control" required="">
                  </div>
                </div>

             
                
                <div class="col-md-12">
                  <div class="form-group">
                      <label>Password</label>
                    <input type="text" placeholder="Enter password" id="password" name="password" class="form-control" required="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                      <label>Confirm Password</label>
                    <input type="text" placeholder="Enter Confirm Password" name="confirmpassword" class="form-control" required="">
                  </div>
                </div>
                

                 <div class="col-md-12">
                     
                  <div class="form-group">
                      <label>Phone Number</label>
                    <input type="text" placeholder="Enter Phone number" id="phone_number" name="phone_number" class="form-control" required="">
                  </div>
                </div>

                
                
                <div class="col-sm-12">
                  <div class="form-group mb-20">
                    <label>Profile Picture</label>
                    <input type="file" name="profile_photo">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group text-center">
                      <button class="btn btn-colored btn-rounded btn-orange pl-30 pr-30" type="submit" name="user_details" id="user_details">Register</button>
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