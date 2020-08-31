<?php 
include 'common/header.php'; 





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
              <h2 class="text-orange font-36">Advance Search</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Search Recipes</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
  

  <section class="bg-orange"> 
  
    <div class="container ">
      <div class="row ">
          <div class="col-sm-12 col-md-5">
                
                <div class="search-form">
                      <style>

                        #ingredient_ul{
                          background-color:#eee;
                          cursor:pointer;
                        }
                        .ingredient_li{
                          padding: 12px;
                        }

                      </style>
                      <form action="search.php" method="post" >
                        <div class="input-group col-sm-12 col-md-12">
                          <input type="text" class="form-control"  name="ingredient2" id="ingredient2" placeholder="Search by ingredients" data-height="50px" autocomplete='off'> 
                          <span class="input-group-btn">
                            <button type="submit" name="ingredient_value" id="ingredient_value" class="btn btn-lg m-0" style="height: 50px; width: 50px;"><i class="fa fa-search"></i></button>
                          </span>
                        </div>
                      </form>
                      

                        <div id="ingredient_List2" style="position: absolute; display: block; z-index: 10; width: 406px;">
                        </div>

                      
                </div>
                <div class="container ">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="social-icons flat pl-15 mt-sm-15">
                      <?php
                      if(isset($_SESSION['response']))
                        {
                            if (empty($_SESSION['response']))
                            {
                              unset($_SESSION['response']);
                            }

                            foreach ($_SESSION['response'] as $k => $v)
                            {  
                                foreach ($v as $key => $value)
                                {  

                      ?>
                                  <li style="background-color: white; border-radius:5px; font-size: 20px;" class="p-10" >
                                    
                                    
                                        <span><?php echo $value; ?></span>
                                        <span>
                                        <form action="controller.php" method="post" >
                                          <input type="hidden" name="unset_ingredient" value="<?php echo $k; ?>" >
                                          <button style="border:none; background-color: white"  type="submit" id="delete_ingredient" name="delete_ingredient">✕</button>
                                        </form>
                                        </span>
                                    

                                  </li>
                        <?php 
                                }
                                                      
                            }
                                                   
                        }
                        ?>
                       
                      </ul>
                    </div>
                  </div>
                </div>

              </div>

              <form action="search.php" method="post" >
                <div class="col-md-3">
                    <div class="form-group">
                             
                      <select class="form-control" name="recipe_category" data-height="50px">
                        <option value=" ">Search By Category</option>
                        <option>Breakfast</option>
                        <option>Lunch</option>
                        <option>Diner</option>
                      </select>
                    </div>
                </div>

                 <div class="col-md-3">
                    <div class="form-group">
                             
                      <select class="form-control" name="recipe_cuisine" data-height="50px">
                        <option value=" ">Seach By Cuisine</option>
                        <option>Indian</option>
                        <option>American</option>
                        <option>French</option>
                        <option>Italian</option>
                        <option>Chinese</option>
                        <option>Thai</option>
                        <option>African</option>
                    
                      </select>
                    
                    </div>
                </div>

                 <div class="col-md-1">
                    <div class="form-group">
                             
                      <div class="input-group col-sm-12 col-md-12">
                          
                          <span class="input-group-btn">

                            <button type="submit" name="val" id="val" class="btn btn-lg m-0" style="height: 50px; width: 50px; border-radius: 5px"><i class="fa fa-search" ></i></button>
                          </span>
                        </div>
                      
                    </div>
                </div>
              
               </form>
          </div>
        </div>
 
  </section>
    <!-- Section: View Recipe -->
 <section>
      <div class="container">
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <?php 
                    
                    if(isset($_POST['search_val']))
                    {           
                      extract($_POST);
                      echo $recipe;
                      $q=$d->select("recipe_details","recipe_name='$recipe'","");
                    }

                    if(isset($_POST['val']))
                        {
                          extract($_POST);

                          $query = '';
                          if($recipe_cuisine != " ")
                          {
                              $query = $query. "recipe_cuisine='$recipe_cuisine'";
                          }

                          if($recipe_category != " ")
                          {
                            if($query!='')
                            {
                              $query = $query. " and recipe_category='$recipe_category'";
                            }
                            else 
                            {
                              $query = $query. "recipe_category='$recipe_category'";
                            }
                          }
                          
                          $q=$d->select("recipe_details",$query,"");
                                 
                        }

                      if(isset($_POST['ingredient_value']) and isset($_SESSION['response']))
                    {           
                        
                          if (isset($_SESSION['response'])) 
                          {
                              $query1="ingredient_id IN (";
                              $i=0;
                              foreach ($_SESSION['response'] as $k => $v)
                            {  
                                foreach ($v as $key => $value)
                                {  
                                    $ingredient_id=$key;

                                    if($i == 0)
                                    { 
                                        $query1.="'$ingredient_id'";
                                    }
                                    
                                    else 
                                    {
                                        
                                        $query1.=",'$ingredient_id'";
                                        
                                    }
                                    $i++;
                                  
                                }
                            }
                            $query1.=")";
                            $count_ingredients=$i;
                            

                            $q=$d->select_field("recipe_id","recipe_ingredients_details",$query1,"GROUP BY recipe_id HAVING COUNT(DISTINCT ingredient_id)='$count_ingredients'");
                            
                          
                                $list=array();

                                while($data=mysqli_fetch_array($q)) 
                                {
                                  
                                      extract($data);
                                      
                                      $recipe_details['recipe_id']=$recipe_id;
                                    
                                      array_push($list,$recipe_details);
                                      
                                }
                            
                                
                              if (!(empty($list)))
                              {
                              
                                $i=0;
                                $query=" ";
                                foreach ($list as $item)
                                {

                                  $recipe_id=$item['recipe_id'];


                                  if($i == 0)
                                        { 
                                            $query.="recipe_id='$recipe_id'";
                                        }
                                        
                                        else 
                                        {
                                            
                                            $query.=" OR recipe_id='$recipe_id'";
                                            
                                        }
                                        $i++;       
                                }
                                
                              $q=$d->select("recipe_details",$query,"");

                              }
                              else
                              {
                                echo "No Match Found..!!";
                              }   
                          }
                    }

                         
                         
                    

                    

                        
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
                  <a class="btn btn-colored btn-orange btn-sm pull-left mt-0" href="recipe_details.php?recipe_id=<?php echo $recipe_id; ?>">View Details</a>
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
    </section>
 
    
  </div>
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>

  <script>
                    $(document).ready(function()
                    {
                    
                      $('#ingredient2').keyup(function()
                      {
                        var query = $(this).val();
                      
                        
                        if(query!='')
                        {
                            $.ajax({
                                  url:"controller.php",
                                  method:"POST",
                                  data:{query:query},
                                  success:function(data)
                                  {
                                    $('#ingredient_List2').fadeIn();
                                    $('#ingredient_List2').html(data);
                                  }
                            });
                        }
                        else
                        {
                          $('#ingredient_List2').fadeOut();
                          $('#ingredient_List2').html("");
                        }
                      });
                      $(document).on('click','.ingredient_li',function(){
                          var docVal = $(this).text();

                          $.post("search_ingredients.php", {"iname": docVal});
                          location.reload();
                         
                          $('#ingredient_List2').fadeOut();

                        });

                      

                      
                     
                    });
/*
                    function delete_ingredient(data) {
                        
                    $.post("controller.php", {"unset_ingredients": data});
                                
                        location.reload();
                                  
                          
                      }*/

</script>

 <?php 
                   
                  
                    
                  ?>