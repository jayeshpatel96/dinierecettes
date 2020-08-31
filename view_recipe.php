<?php 
include 'common/header.php'; 

$results_per_page = 12;

$result=$d->select("recipe_details","","");
$number_of_results = mysqli_num_rows($result);

$number_of_pages = ceil($number_of_results/$results_per_page);

if (!isset($_GET['page'])) {
  $page_number = 1;
} else {
  $page_number = $_GET['page'];
}

$this_page_first_result = ($page_number-1)*$results_per_page;

?>
  
  <!-- Start main-content -->
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/slider/sd3.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Con
$currentpage='gallery';tent -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-orange font-36">Recipes</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Recipes</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
  
    <!-- Section: View Recipe -->

     <section id="causes"> 
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Food Recipies</h3>
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
                                           
                    $q=$d->select("recipe_details","","LIMIT $this_page_first_result,$results_per_page");

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
                        <li><a class="text-white" href="#"><i class="fas fa-star-half-alt"></i> <?php echo $rating_number; ?> <br> Ratings</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fas fa-clock"></i> <?php echo $cook_time; ?> <br> Cook Time</a></li>
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

           <div class="row">
              <div class="col-sm-7">
                <nav>
                  <ul class="pagination pull-right xs-pull-center mb-xs-40">
                    <?php if($number_of_pages!=1 and $page_number!=1){?>
                    <li> <a href="view_recipe.php?page=<?php echo $page_number-1; ?>"> <span aria-hidden="true" >«</span> </a> </li>
                  <?php } ?>
                    <?php
                      for ($page=1;$page<=$number_of_pages;$page++) {
                    ?>
                        <!--<li class="active"><a href="#">1</a></li>-->
                        <li <?php if($page==$page_number){?> class="active" <?php } ?> ><a href="view_recipe.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                      

                    <?php } ?>
                    <!--<li><a href="#">...</a></li>-->
                    <?php if($number_of_pages!=$page_number){?>
                    <li ><a href="view_recipe.php?page=<?php echo $page_number+1; ?>"> <span aria-hidden="true">»</span> </a> </li>
                    <?php } ?>
                  </ul>
                </nav>
              </div>
            </div>
        </div>
      </div>
    </section>
    
  </div>
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>