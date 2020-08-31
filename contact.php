<?php 
$currentpage='contact';
include 'common/header.php'; ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/slider/sd3.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-orange font-36">Contact</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
    
    <!-- Divider: Google map -->
    <section id="contact" class="divider" data-bg-color="#fff">
      <div class="container pb-30">
        <div class="row">
          <div class="col-sm-5 col-md-3">
            <img width="200px" height="200px" src="images/logo.png" alt="">
          </div>
          <div class="col-sm-7 col-md-4 pl-60">
            <h4 class="text-uppercase">Get In Touch</h4>
            <div class="line-bottom mb-30"></div>
            <ul class="list-default footer-contact">
              <li><i class="fa fa-phone"></i><?php echo $contact_no; ?></li>
              <li><i class="fa fa-envelope"></i><?php echo $email; ?></li>
              <li><i class="fa fa-clock-o"></i>Mon-Sat 9.00am-6.00pm</li>
              <li><i class="fa fa-map-marker"></i><?php echo $address; ?></li>
            </ul>
            <ul class="social-icons icon-blue small m-0 mt-30 mb-30">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-5">
            <h4 class="text-uppercase">Find Our Location</h4>
            <div class="line-bottom mb-30"></div>
            <div class="map-canvas autoload-map" data-height="200" data-address="121 King Street, Melbourne Victoria 3000 Australia" data-zoom="14" data-mapstyle="style2" data-marker="images/map-icon-blue.png"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact form 
   <section>
      <div class="container pt-0">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-uppercase">Send Us a Messase</h4>
            <div class="line-bottom mb-30"></div>
            <form method="post" action="controller.php" >
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Name" id="name" name="name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Email" id="email" name="email" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Subject" id="subject" name="subject" class="form-control" required="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea rows="5" placeholder="Enter Message" id="message" name="message" required class="form-control"></textarea>
              </div>
              <div class="form-group text-center">
                <button data-loading-text="Please wait..." class="btn btn-colored btn-rounded btn-orange pl-30 pr-30" name="feedbtn" id="feedbtn">Send your message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  end main-content -->
  
  <?php include 'common/footer.php'; ?>