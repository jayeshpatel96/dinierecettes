<?php 
$currentpage='about';
include 'common/header.php'; 



?>
  
  <!-- Start main-content -->
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/slider/sd3.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-orange font-36">About</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                
                <li class="active">About</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: About -->
    <section> 
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7">
            <div class="image-carousel">
                <?php 
                      $i=1;
                                           
                      $q=$d->select("sliders","","");
                      while ($data=mysqli_fetch_array($q)) {
                      extract($data); 
                ?>
              <div class="item">
                <div class="thumb">
                  <img src="images/slider/<?php echo $photo; ?>" alt="">
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-sm-12 col-md-5">
            <h3 class="text-orange text-uppercase">About Us</h3>
            <p>Dinie Recettes helps people to find variety of recipes using specification like Recipe name, Category, Cuisine type or Ingredients.The ambition of Dinie Recettes is to provide its users a detailed instruction of a recipe like a list and portion of ingredients required, cooking time, number of serving, step-by-step instruction and a link to video instruction of that recipe. It also takes care of all kind of its users who love to follow their diet and eat food with specific calories.</p>
            <div class="row mt-30 mb-30 ml-20">
             <div class="col-xs-6">
              <ul class="mt-10">
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;View Recipe</li>
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Search Recipe</li>
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Add/Update/Delete Recipe</li>
              </ul>
             </div>
             <div class="col-xs-6">
              <ul class="mt-10">
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;User Profile</li>
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Save Recipe</li>
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Rate Recipe</li>
              </ul>
             </div>
            </div>
            <p>The main purpose of this Food Recipe website is to make cooking both a chore and pleasure by featuring plenty of food recipes prepared by Chefs with easy and step-by-step cooking instructions. It is a beautiful concept central to the fact that food recipes must always be at its user’s fingertips. The application aims to help newbies as much as experienced foodie users of this application.</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-white"  data-bg-img="images/slider/sd3.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0">How you can help us</h3>
              <h2>Just call at <span class="text-orange"><?php echo $contact_no; ?></span> for any Queries</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
    
 

  

  
  </div>
 
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>