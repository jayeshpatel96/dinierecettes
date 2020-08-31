<?php 
include 'common/header.php'; 

if(!isset($_SESSION['instruction']))
  {
    $i=1;
    $_SESSION['instruction'] = array();
    $b[$i]="";
    array_push($_SESSION['instruction'],$b);
   
  

for($count=0; $count<count($_POST['ingredient_name']); $count++)
{
 
  $ingredient_details[$_POST['ingredient_id'][$count]]=$_POST['ingredient_amount'][$count] ." " . $_POST['amount_type'][$count];

}
$_SESSION['ingredient_details']=$ingredient_details;

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
                <h2 class="text-orange font-36">Create Recipe</h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="index.php">Home</a></li>
                
                  <li class="active">Add Ingredients</li>
                </ol>
              </div>
            </div>
          </div>
        </div>      
      </section>


      <section> 
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <h4 class="text-uppercase mb-5">Add Instruction!</h4>
                <div class="line-bottom mb-20"></div>

              </div>
              <div class="col-sm-12 col-md-12" id="display_ingredients">
                <form method="post" action="controller.php">
                    <table class="table">
                           
                            <thead>
                              
                                <tr>
                                  <th>#</th>
                                  <th>Ingredient Name</th>               
                                
                                  </tr>
                            </thead>

                            <tbody id="msg">
                                            <?php 
                                            
                                          
                                            if(isset($_SESSION['instruction']))
                                            {
                                            
                                              // foreach ($_SESSION['response'] as $response)
                                            foreach ($_SESSION['instruction'] as $k => $v)
                                              {  

                                                foreach ($v as $key => $value)
                                                {  

                                              ?>
                                            
                                                <tr>
                                                    <td><?php $k+=1; echo "Step : ".$k;?></td>
                                                    <td><textarea type="text" name="instruction_step[]"  class="form-control"></textarea></td>
                                                    
                                                    <?php if(count($_SESSION['instruction'])==$k && $k!=1){ ?>
                                                    <td align="right">
                                                      <a class="btn btn-danger" href="controller.php?unset_instruction=<?php $k-=1; echo $k; ?>">Delete Step</a>
                                                    </td>
                                                  <?php } ?>

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
                  <div class="col-sm-4">
                    <a class="btn btn-colored btn-orange pl-30 pr-30" href="instruction_session.php?step=<?php echo $k; ?>" id="addstep"><< Back</a>
                  </div>
                  <div class="col-sm-4">
                    <a class="btn btn-colored btn-orange pl-30 pr-30" href="instruction_session.php?step=<?php echo $k; ?>" id="addstep">+ Add Step</a>
                  </div>
                  <div class="col-sm-4">
                    <button class="btn btn-colored btn-orange pl-30 pr-30" type="submit" name="instruction_details" id="instruction_details">Add Recipe  >>  </button>
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

