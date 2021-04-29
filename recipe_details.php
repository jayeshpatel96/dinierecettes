<?php 

include 'common/header.php'; 
include_once('Admin/lib/dao.php');
include_once('Admin/lib/model.php');

$d = new dao();
$m = new model();
$stars=0;

/*if(isset($_SESSION['user_id']))
{
    $user_id=$_SESSION['user_id'];

    $recipe_id=$_GET['recipe_id'];
    
    $q=$d->select("rating_details","recipe_id='$recipe_id' && user_id='$user_id'","");
   
    $data=mysqli_fetch_array($q);
    
    if($data>0) 
    {
      extract($data);
      $stars=$number_of_stars;
    
    }
    else
    {
      $stars=0;
    }
}*/
   
   




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
              <h2 class="text-orange font-36">Recipe Details</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                
                <li class="active">Recipe Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

   

          <?php
              $recipe_id=$_GET['recipe_id'];
              $q=$d->select("recipe_details","recipe_id='$recipe_id'","");
              $data=mysqli_fetch_array($q);
              extract($data);
              $star_value=$rating;
             
          ?>

   


     <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-posts single-post">

          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images2/<?php echo $picture_of_recipe . ".jpg"; ?>" alt="" height="350px">
              </div>
            </div>
            <div class="col-md-8">
              <h4 class="text-uppercase mt-0"><?php echo $recipe_name; ?></h4>
              <div class="line-bottom"></div>
              <br><br>

              <div class="col-md-6">
                <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="media border-bottom p-10 mb-20" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fas fa-pizza-slice text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Cuisine:</h5>
                        <p><?php echo $recipe_cuisine; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media border-bottom p-10 mb-20" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fas fa-utensils text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Category:</h5>
                        <p><?php echo $recipe_category; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media border-bottom p-10" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fas fa-user-plus text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Created By:</h5>
                        <p><?php echo $user_id; ?></p>
                      </div>
                    </div>
                  </li>
                </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="media border-bottom p-10 mb-20" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fas fa-clock text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Cook Time:</h5>
                        <p><?php echo $cook_time; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media border-bottom p-10 mb-20" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fas fa-users text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Number of Serving:</h5>
                        <p><?php echo $number_of_serving; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media border-bottom p-10" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fas fa-utensils text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Calories:</h5>
                        <p><?php echo $calories; ?></p>
                      </div>
                    </div>
                  </li>
                </ul>
                </div>
              </div> 
            </div>
          </div>

          <div class="row">
          
            <div class="col-md-12">
              <br>
             

            

                    <div class="col-md-12 media border-bottom">
                      
                        <div class="media-body">
                           
                            <div style="background-color:lightgrey; color:white;">
                                    <i class="fa fa-star fa-3x set_star" data-index="0"></i>
                                    <i class="fa fa-star fa-3x set_star" data-index="1"></i>
                                    <i class="fa fa-star fa-3x set_star" data-index="2"></i>
                                    <i class="fa fa-star fa-3x set_star" data-index="3"></i>
                                    <i class="fa fa-star fa-3x set_star" data-index="4"></i>
                                  
                                </div>
                            <div><h4 class=" mt-0"><?php echo $rating_number . " Ratings"; ?></h4></div>
                        
                        </div>
                    </div>
              
              
              <br>

              
            </div>
          </div>
           
          
          <div class="comments-area">
                
                  <div class="container">
                    <div class="section-content">
                      <div class="row">
                      <div class="row mt-30">
                      <div class="col-sm-6 col-md-3 col-lg-3 mb-60">
                        <h4 class="text-orange title-border line-bottom mb-20 pb-10">List of Ingredients</h4>
                        <ul class="list-default">
                       
                          <?php 
                            
                            $i=1;                  
                            $q=$d->select("recipe_ingredients_details","recipe_id='$recipe_id'","");    
                           

                            while ($data=mysqli_fetch_array($q)) {
                            extract($data);

                              $q1=$d->select("ingredients_details","ingredient_id='$ingredient_id'","");
                              $data1=mysqli_fetch_array($q1);

                              extract($data1);

                          ?>

                              <li><i class="fa fa-chevron-circle-right text-orange"></i><?php echo $ingredient_amount . " " . $ingredient_name; ?></li>

                          <?php } ?>
                          
                        </ul>
                        
                      </div>

                      

                      <div class="col-md-8 volunteer-address">
                         <h4 class="text-orange title-border line-bottom mb-20 pb-10">List of Instruction</h4>
                        <ul>
                       
                          <?php 
                            
                                               
                            $q=$d->select("instruction_details","recipe_id='$recipe_id'","");    
                           

                            while ($data=mysqli_fetch_array($q)) {
                            extract($data);

                          ?>
                            

                          <li>

                            <div class="media border-bottom p-10 mb-20" data-bg-color="#f5f5f5">
                              
                              <div class="media-body">

                                <span class="text-highlight light"><?php echo $i; $i++; ?></span> 
                                
                              </div>
                              &nbsp;
                              <div class="media-body">
                                <?php echo $instruction_step; ?>
                              </div>
                            </div>
                          </li>

                          <?php } ?>
                        </ul>
                        
                      </div>
                    </div>
                  </div>
            
          </div>


          <div class="comments-area">
                
                  <div class="container">
                    <div class="section-content">
                      <div class="row">
                        <div class="row mt-30">
                          <div class="col-sm-12 col-md-12 col-lg-12 mb-60">
                            <h4 class="text-orange title-border line-bottom mb-20 pb-10">Youtube</h4>
                              <div class="fluid-video-wrapper" >
                                  

                                
                                  <iframe width="560" height="315" src="https://www.youtube.com/embed/oIDqz2BrVec" allowfullscreen></iframe>

                                  <div ></div>
                              </div>
                                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
      
         <div class="comments-area">
                
                  <div class="container">
                    <div class="section-content">
                      <div class="row">
                        <div class="row mt-30">
                          <div class="col-sm-12 col-md-12 col-lg-12 mb-60">
                            <h4 class="text-orange title-border line-bottom mb-20 pb-10">Similar Recipess</h4>
                              
                                <div class="gallery-list-carosel owl-nav-top">

                 <?php 
                    $i=1;
                                                 
                    $q=$d->select("recipe_details","recipe_cuisine='$recipe_cuisine' AND recipe_category='$recipe_category' AND recipe_id!='$recipe_id'"," ");
                    while ($data=mysqli_fetch_array($q)) {
                    extract($data);
                 ?>


                                    <div class="item">
                  <a href="recipe_details.php?recipe_id=<?php echo $recipe_id; ?>">
                    <img alt="" src="images2/<?php echo $picture_of_recipe . ".jpg"; ?>" height=180px width=100px>
                  </a>
                                    </div>
                
                                    <?php } ?>
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>


  <?php
    if(isset($_SESSION['name']))
      { ?>          
          <div class="comments-area">
                
                  <div class="container">
                    <div class="section-content">
                      <div class="row">
                        <div class="row mt-30">
                          <div class="col-sm-12 col-md-12 col-lg-12 mb-60">
                           
                            <h2 class="text-orange title-border mb-20 pb-10 text-center">Rate Recipe</h2>
                            
                               <div class="col-md-12" align="center" style="background-color:lightgrey; color:white;">
                                    <i class="fa fa-star fa-4x star" data-index="0"></i>
                                    <i class="fa fa-star fa-4x star" data-index="1"></i>
                                    <i class="fa fa-star fa-4x star" data-index="2"></i>
                                    <i class="fa fa-star fa-4x star" data-index="3"></i>
                                    <i class="fa fa-star fa-4x star" data-index="4"></i>
                             
                                </div>

                               
                                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
  <?php } ?> 

                              <script>
        

                                  $(document).ready(function () {
                                    
                                        var stars=<?php echo $stars;?>;
                                        var star_value=<?php echo $star_value;?>;
                                        var recipe_id=<?php echo $_GET['recipe_id'];?>;
                                        
                                        setStarsAll(star_value);

                                       if (stars != 0) 
                                       {
                                          setStars(parseInt(stars));
                                          
                                          
                                       }

                                       $('.star').on('click', function () {
                                         number_of_stars = parseInt($(this).data('index'))+1;
                                         
                                         
                                         if(number_of_stars!='')
                                                  {
                                                      
                                                      $.ajax({
                                                            url:"test.php",
                                                            method:"POST",
                                                            data: {number_of_stars : number_of_stars, recipe_id : recipe_id},
                                                            success:function(data)
                                                            {
                                                             
                                                                setStars(parseInt(data));
                                                                location.reload();

                                                            }
                                                      });
                                                  }
                                        
                                         
                                      });
                                   


                                      $('.star').mouseover(function () {
                                          resetStarColors();
                                          var currentIndex = parseInt($(this).data('index'));
                                          setStars(currentIndex+1);
                                      });

                                      $('.star').mouseleave(function () {
                                          resetStarColors();

                                          if (stars != 0)
                                              setStars(stars);
                                      });
                                  });

      

                                  function setStars(max) {
                                      for (var i=0; i < max; i++)
                                          $('.star:eq('+i+')').css('color', '#ff5a5f');
                                  }

                                  function resetStarColors() {
                                      $('.star').css('color', 'white');
                                  }

                                  function setStarsAll(max) {
                                      for (var i=0; i < max; i++)
                                          $('.set_star:eq('+i+')').css('color', '#ff5a5f');
                                  }

                                </script>

            </div>
          </div>
        </div>
      </div>
    </section>


     

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
<?php 

if(isset($_SESSION['user_id']))
{
$recipe_id=$_GET['recipe_id'];
$user_id=$_SESSION['user_id'];
$q1=$d->select("recipe_details","recipe_id='$recipe_id' && user_id='$user_id'","");
$data1=mysqli_fetch_array($q1);
if(!($data1>0))
{
  $exist=$d->select("history_of_recipe","recipe_id=$recipe_id","");

  if(mysqli_fetch_array($exist)>0)
  {
    $q=$d->delete_history("history_of_recipe","recipe_id='$recipe_id'");
  }
  


    $m->set_data('recipe_id',$recipe_id);
    $m->set_data('user_id',$user_id);
    $m->set_data('history_date',date("Y-m-d"));
   

    $a =array(
      'recipe_id'=>$m->get_data('recipe_id'),
      'user_id'=>$m->get_data('user_id'),
      'history_date'=>$m->get_data('history_date'),
      
    ) ;  

    $q=$d->insert("history_of_recipe",$a);  

    

    if($q>0)
    {

      $count=$d->count("history_id","history_of_recipe","user_id='$user_id'");
      $row = mysqli_fetch_assoc($count);

      if($row['total']>9)
      {
        $q=$d->delete_history("history_of_recipe","user_id='$user_id'");
      } 
    }

}
} ?>
<?php 
include 'common/footer.php'; ?>