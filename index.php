<?php
$currentpage='index';
 include 'common/header.php'; ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <?php   include 'common/slider.php'; ?>
    <!-- Section: featured project -->
    
    
    <!-- Section: Causes -->
    <section id="causes"> 
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Our Popular Recipies</h3>
              <div class="title-icon">
                <i class="fas fa-pepper-hot text-orange font-24 mt-5"></i>
              </div>
             
            </div>
          </div>
        </div>
          
      </div>
    </section>

    <section>
      <div class="container">
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <?php 
                    $i=1;
                                           
                    $q=$d->select("recipe_details","","LIMIT 9");

                    while ($data=mysqli_fetch_array($q)) {
                    extract($data);

                  ?>

            <div class="col-sm-6 col-md-4 col-lg-4">
              <article class="post clearfix maxwidth600 mb-sm-30 mb-30">
                <div class="entry-header">

                 
                  <div class="post-thumb thumb"> <img src="images2/<?php echo $picture_of_recipe . ".jpg"; ?>" alt="" class="img-fullwidth" height=270px width=270px> </div>
                  <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> <?php echo $rating_number; ?> <br> Rating Number</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> <?php echo $cook_time; ?> <br> Cook Time</a></li>
                      </ul>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="#"><?php echo $recipe_name; ?></a></h5>
                  <p class="text-left mb-20 mt-15 font-13"></p>
                  <a class="btn btn-colored btn-orange btn-bg pull-left mt-0" href="recipe_details.php?recipe_id=<?php echo $recipe_id; ?>">View Details</a>
                  <ul class="list-inline entry-date pull-right font-12 mt-5">
                    <li><a class="text-orange" href="#"><?php echo $recipe_cuisine; ?> |</a></li>
                    <li><span class="text-orange"><?php echo $recipe_category; ?></span></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
           <?php } ?>
          </div>
        </div>
      </div>

       <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
             <a class="btn btn-colored btn-orange btn-bg mt-0" href="view_recipe.php">View All Recipes</a>
              
            </div>
          </div>
        </div>
          
      </div>
    </section>




 
    
   
    
    
  </div>
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>