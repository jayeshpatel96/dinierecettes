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
              <h2 class="text-orange font-36">Chef Details</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Chefs</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: Volunteer -->

     <section id="causes"> 
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Our Best Chefs</h3>
              <div class="title-icon">
                <i class="fas fa-pepper-hot text-orange font-24 mt-5"></i>
              </div>
             
            </div>
          </div>
        </div>
          
      </div>
    </section>


    <section>
      <div class="container pb-40">
        <div class="section-content">
          <div class="row multi-row-clearfix">

            <?php 
                    $i=1;
                                           
                    $q=$d->select("user_details","","ORDER BY user_id DESC LIMIT 3");

                    while ($data=mysqli_fetch_array($q)) {
                    extract($data);
            ?>
              <div class="col-sm-6 col-md-4 mb-sm-60 text-left sm-text-center">
              <div class="volunteer maxwidth400 mb-30">
                <div class="thumb"><img alt="" src="images/user/<?php echo $profile_photo; ?>" class="img-fullwidth"></div>
                <div class="overlay">
                  <div class="content text-center">
                    <h4 class="author mb-0"><a href="chef_details.php?user_id=<?php echo $user_id; ?>" class="text-white"><?php echo $name; ?></a></h4>
                    <h6 class="title text-black font-14 mt-5 mb-15">Contact Info :<?php echo $phone_number; ?></h6>
                    <ul class="social-icons icon-dark square small mt-10">
                      <li class="mr-10"><a href="chef_details.php?user_id=<?php echo $user_id; ?>"><i class="fa fa-facebook"></i></a></li>
                      <li class="mr-10"><a href="chef_details.php?user_id=<?php echo $user_id; ?>"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="chef_details.php?user_id=<?php echo $user_id; ?>"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              </div>

            <?php } ?>
            
          </div>
        </div>
      </div>

      
    </section>
    
    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-white"  data-bg-img="images/bg/bg2.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0">How you can help us</h3>
              <h2>Just call at <span class="text-orange">(01) 234 5678</span> to make a donation</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
<?php include 'common/footer.php'; ?>