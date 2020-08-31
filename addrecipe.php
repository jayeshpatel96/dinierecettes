<?php 
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
              <h2 class="text-orange font-36">Create Recipe</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="index.php">Home</a></li>
              
                <li class="active">Create Recipe</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>


    <!-- Divider: Contact form -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h4 class="text-uppercase mb-5">Create a New Recipe!</h4>
            <div class="line-bottom mb-20"></div>
            
            <form id="donation-main-form" class="donation-form" method="post" action="addrecipe2.php">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Recipe Name</label>
                     <input type="text" placeholder="Enter Recipe Name" name="recipe_name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="recipe_category">
                        <option>Breakfast</option>
                        <option>Lunch</option>
                        <option>Diner</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Cuisine</label>
                     <select class="form-control" name="recipe_cuisine">
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
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Cook Time</label>
                    <input type="text" placeholder="In Minutes" name="cook_time" class="form-control" required="">
                  </div>
                </div>
               
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label>Number Of Servings</label>
                    <input type="text" placeholder="In Person" name="number_of_serving" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label>Calories</label>
                    <input type="text" placeholder="Enter Calories" name="calories" class="form-control" required="">
                  </div>
                </div>

                 <div class="col-sm-12">
                  <div class="form-group mb-20">
                    <label>Recipe Image</label>
                    <input type="file" name="picture_of_recipe">
                  </div>
                </div>

               
              <div class="form-group text-center">
                <button class="btn btn-colored pull-right btn-orange pl-30 pr-30" type="submit" name="addrecipe" id="addrecipe">Next</button>
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