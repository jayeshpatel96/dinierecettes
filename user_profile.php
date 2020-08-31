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
              <h3 class="text-orange font-36">My Account</h3>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">My Account</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
      
    <!-- Section: Practice Area -->
            <?php
              $user_id=$_GET['user_id'];
              $q=$d->select("user_details","user_id='$user_id'","");

              $data=mysqli_fetch_array($q);
              extract($data);
            ?>
    <section>
      <div class="container">
        <div class="section-content">
          <h2><?php echo $name; ?></h2>
          <div class="line-bottom mb-30"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img class="profile_img" width="100%" src="images/user/<?php echo $profile_photo; ?>" alt="Profile Picture">
              </div>
            </div>
            
            
             <div class="col-md-8">
              <h3>About me</h3>
              <div class="line-bottom mb-30"></div>
              <div class="volunteer-address">
                <ul>

                  <li>
                    <div class="media border-bottom p-15 mb-20" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fa fa-envelope text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Username:</h5>
                        <p><?php echo $name; ?></p>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="media border-bottom p-15 mb-20" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fa fa-envelope text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Email:</h5>
                        <p><?php echo $email; ?></p>
                      </div>
                    </div>
                  </li>
                 
                  <li>
                    <div class="media border-bottom p-15" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fa fa-phone-square text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Contact:</h5>
                        <p><span>Phone:</span> <?php echo $phone_number; ?></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

            <div class="col-sm-12 col-md-12 col-lg-12 mb-60">
              <h4 class="text-orange title-border line-bottom mb-20 pb-10">Tab</h4>            
              <div class="horizontal-tab">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab1" data-toggle="tab">My Recipes</a></li>
                  <li ><a href="#tab2" data-toggle="tab">My Cookbook</a></li>
                  <li><a href="#tab3" data-toggle="tab">Recently Visited Recipies</a></li>

                  
                  
                  
                </ul>
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="tab1">
                    <div class="row">
                      <div class="col-md-12">

                          <?php 
                              $i=1;
                                                                                   
                              $user_id=$_SESSION['user_id'];
                              $q=$d->select("recipe_details","user_id='$user_id'","");
                              while ($data=mysqli_fetch_array($q)) 
                              {
                                extract($data);
                          ?>
                            <div class="col-md-4">
                                <div class="masonry-item">
                                    <div class="box-hover-effect effect11">
                                        <style> 
                                          table{ 
                                            border-collapse:separate; 
                                            border-spacing: 0 2px; 
                                          } 
                                                                
                                        </style>    
                                        <table align="center">
                                            <tr>
                                                <td colspan="2">
                                                    <div class="post-thumb thumb"> <img src="images2/<?php echo $picture_of_recipe . ".jpg"; ?>" alt="" class="img-fullwidth" height=270px width=270px> </div>
                                                </td>
                                            </tr>
                                        </table>
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
                                </div>
                            </div>

                          <?php } ?>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab2">
                    <div class="row">
                      <div class="col-md-12">
                    
                          <table class="table">
                             
                              <thead>
                                  <tr>
                                      <td><a class="btn btn-colored btn-orange mt-0 p-10" data-toggle="modal" href="#modal-donate-now">Add New Cookbook</a></td>
                                  </tr>
                                  <tr>
                                    <th>#</th>
                                    <th>Cookbook Name</th>               
                                    <th>Number of Recipies</th>
                                    <th>Action</th>
                                    </tr>
                              </thead>

                              <tbody id="msg">
                                              <?php 
                                              $i=1;
                                              $user_id=$_SESSION['user_id'];
                                              $q=$d->select("cookbook_details","user_id='$user_id'","");

                                              while ($data=mysqli_fetch_array($q)) {
                                                  extract($data);
                                               ?>
                                              
                                                  <tr>
                                                      <td><?php echo $i++; ?></td>
                                                      <td><?php echo $cb_name; ?></td>
                                                      <?php
                                                            $q1=$d->count_data('recipe_id',"favourites","cb_id='$cb_id'");
                                                            $recipe_no=mysqli_fetch_array($q1);
                                                      ?>
                                                      <td><?php echo $recipe_no[1]; ?></td>
                                                      <td>
                                                          <a class="btn btn-primary" href="view_recipe_favourites.php?cb_id=<?php echo $cb_id; ?>">View Recipes</a>

                                                          <a class="btn btn-danger" href="controller.php?deletecookbook=<?php echo $cb_id; ?>">Delete Cookbook</a>
                                                      </td>

                                                  </tr>
                                                
                                              <?php } ?>
                                              </tbody>
                                             
                          </table>

                      </div>
                    </div>
                  </div>
              

                  <div class="tab-pane" id="tab3">
                    <div class="row">
                      <div class="col-md-12">

                          <?php 
                              $i=1;
                                                                                   
                              $q=$d->select("history_of_recipe INNER JOIN recipe_details ON recipe_details.recipe_id = history_of_recipe.recipe_id","history_of_recipe.user_id='$user_id'","ORDER BY history_id DESC");
                              while ($data=mysqli_fetch_array($q)) 
                              {
                                extract($data);
                          ?>
                            <div class="col-md-4">
                                <div class="masonry-item">
                                    <div class="box-hover-effect effect11">
                                        <style> 
                                          table{ 
                                            border-collapse:separate; 
                                            border-spacing: 0 2px; 
                                          } 
                                                                
                                        </style>    
                                        <table align="center">
                                            <tr>
                                                <td colspan="2">
                                                    <div class="post-thumb thumb"> <img src="images2/<?php echo $picture_of_recipe . ".jpg"; ?>" alt="" class="img-fullwidth" height=270px width=270px> </div>
                                                </td>
                                            </tr>
                                        </table>
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
                                </div>
                            </div>

                          <?php } ?>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    
  </div>
  <!-- end main-content -->

  <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-orange pl-40 pt-20 pb-20">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-white" id="myModalLabel">Add New Cookbook</h4>
      </div>
      <div class="modal-body pl-40 pr-40">
        <form id="donation-form" class="donation-form" action="controller.php" method="post">
          <div class="row">
           
            <div class="col-sm-12">
              <div class="form-group">
                <label><strong>Cookbook Name</strong></label>
                <input type="text" placeholder="Enter Name" name="cb_name" required="" class="form-control">
              </div>
            </div>
           
            
          </div>
          <div class="form-group text-center">
            <button data-loading-text="Please wait..." name="addcookbook" value="addcookbook" class="btn btn-colored btn-rounded btn-orange pl-30 pr-30" type="submit">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  
 <?php include 'common/footer.php'; ?>