<?php 
include 'common/header.php'; 

if(isset($_POST['addrecipe']))
{
  extract($_POST);


        $imagetype=$_FILES["picture_of_recipe"]['type'];
        $imagesize=$_FILES["picture_of_recipe"]['size'];

        $img_arr=$_FILES['picture_of_recipe'];

        move_uploaded_file($img_arr['tmp_name'],'images/recipe_images/'.$img_arr['name']);

        $picture_of_recipe=$img_arr['name'];

        $recipe_details['recipe_name']=$recipe_name;
        $recipe_details['cook_time']=$cook_time;
        $recipe_details['number_of_serving']=$number_of_serving;
        $recipe_details['recipe_cuisine']=$recipe_cuisine;
        $recipe_details['recipe_category']=$recipe_category;
        $recipe_details['picture_of_recipe']=$picture_of_recipe;
        $recipe_details['calories']=$calories;
        $recipe_details['rating_number']=$calories;
        $recipe_details['rating']=$calories;

        $_SESSION['recipe_details']=$recipe_details;
        

}

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
                <h2 class="text-orange font-36">Add Ingredients</h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="index.php">Home</a></li>
                
                  <li class="active">Add Ingredients</li>
                </ol>
              </div>
            </div>
          </div>
        </div>      
      </section>


      <div class="container">
        <div class="row">
         
      </div>
    


      <section> 
        
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-5">
                <h4 class="text-uppercase mb-5">Search Ingredients!</h4>
                <div class="line-bottom mb-20"></div>

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
                      
                        <div class="input-group col-sm-12 col-md-12">
                          <input type="text" class="form-control" name="ingredient" id="ingredient"> 
                        </div>

                        <div id="ingredient_List" style="position: absolute; display: block; z-index: 10; width: 457px;">
                        </div>

                    </div>
              </div>
              <div class="col-sm-12 col-md-7" id="display_ingredients">
                <h4 class="text-uppercase mb-5">List of Ingredients!</h4>
                <div class="line-bottom mb-20"></div>
                <form method="post" action="addrecipe3.php">
                    <table class="table" style="background-color: #eee;">
                           
                            <thead>
                                
                                <tr>
                                  <th>#</th>
                                  <th>Ingredient Name</th>               
                                  <th colspan="2" style="text-align: center;">Ingredient Amount</th>
                                  
                                  <th>Action</th>
                                  </tr>
                            </thead>

                            <tbody id="msg">
                                            <?php 
                                            
                                          
                                            if(isset($_SESSION['response']))
                                            {
                                            
                                              // foreach ($_SESSION['response'] as $response)
                                            foreach ($_SESSION['response'] as $k => $v)
                                              {  

                                                foreach ($v as $key => $value)
                                                {  

                                              ?>
                                            
                                                <tr>
                                                    <td><?php echo $key;?></td>
                                                    <td><input type="text" name="ingredient_name[]"  class="form-control" value="<?php echo $value; ?>" id="ingredient_name"></td>
                                                    
                                                    <td><input type="text" name="ingredient_amount[]"  class="form-control" placeholder="Enter Amount" id="ingredient_amount">
                                                    </td>
                                                   <input type="hidden" name="ingredient_id[]"  class="form-control" value="<?php echo $key;?>">
                                                    <td>
                                                      <select class="form-control" name="amount_type[]">
                                                            <option>tsp</option>
                                                            <option>unit</option>
                                                            <option>tbsp</option>
                                                            <option>gms</option>
                                                            <option>kg</option>
                                                            <option>ltr</option>
                                                      </select>
                                                    </td>
                                                    <td>
                                                      <a class="btn btn-danger" href="controller.php?unset_ingredient=<?php echo $k; ?>">Delete</a>
                                                    </td>

                                                </tr>
                                              
                                            <?php 
                                              }
                                              
                                            }
                                           
                                          }
                                          else
                                          {
                                              ?>
                                          <tr>
                                              <td>No data Found</td>
                                          </tr>
                                        <?php } ?>


                            </tbody>
                                           
                        </table>
                   

                  <div class="form-group text-center">
                      

                      <div class="col-sm-6">
                        <a class="btn btn-colored btn-orange pl-30 pr-30" id="addstep"><< Back</a>
                      </div>
                      <div class="col-sm-6">
                        <button class="btn btn-colored btn-orange pl-30 pr-30" type="submit" name="addrecipe2" id="addrecipe2">Save & Continue  >>  </button>
                      </div>
                  </div>

                   </form>
              </div>
            </div>
          </div>
      </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
<?php 
include 'common/footer.php'; ?>

<script>
                    $(document).ready(function()
                    {
                    
                      $('#ingredient').keyup(function()
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
                                    $('#ingredient_List').fadeIn();
                                    $('#ingredient_List').html(data);
                                  }
                            });
                        }
                        else
                        {
                          $('#ingredient_List').fadeOut();
                          $('#ingredient_List').html("");
                        }
                      });
                      $(document).on('click','.ingredient_li',function(){
                          var docVal = $(this).text();

                          $.post("search_ingredients.php", {"iname": docVal});
                          location.reload();
                         
                          $('#ingredient_List').fadeOut();

                        });
                      /*
                      $(document).on('submit','#addrecipe2',function(){
                        
                          var count_data=0;

                          $('#ingredient_name').each(function(){
                              count_data=count_data+1;
                          });

                          if(count_data > 0)
                          {
                              var form_data=$(this).serialize();
                              $.ajax({
                                url:"addrecipe3.php",
                                method:"POST",
                                data:form_data:form_data,
                                success:function(data)
                                {

                                }
                              })

                          }

                         
                        });
                        */
                    });
</script>