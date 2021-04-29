<?php 
session_start();
include_once('Admin/lib/dao.php');
include_once('Admin/lib/model.php');
include_once('Admin/lib/dbconnect.php');

$d = new dao();
$m = new model();
$currentpage='index';

$q=$d->select("company_info","","");

    $data=mysqli_fetch_array($q);
    extract($data);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from kodesolution.com/demo/nonprofit/charityfund-html/index-sp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jan 2016 17:25:46 GMT -->
<head>

            <style type="text/css">
                  
                          #dp
                          {
                            background-repeat:no-repeat;
                            text-align: center;
                            margin-left:500px;
                            margin-top: 15px;
                            position:absolute;
                          }

                </style>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title></title>

<!-- Favicon and Touch Icons -->
<link href="images/logo.png" rel="shortcut icon" type="image/png">
<link href="css/select2.min.css" rel="stylesheet" type="text/css" />
<script src="https://kit.fontawesome.com/99feff0207.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu -->
<link href="css/menuzord-skins/menuzord-border-top.css" rel="stylesheet"/>

<!-- Revolution Slider -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Main style file -->
<link href="css/main-style.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper"> 
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="cssload-container">
        <ul class="cssload-flex-container">
          <li>
            <span class="cssload-loading cssload-one"></span>
            <span class="cssload-loading cssload-two"></span>
            <span class="cssload-loading-center"></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header class="header">
    <div class="header-top bg-orange sm-text-center">
      <div class="container">
        <div class="row">
        
          <div class="col-md-2">
              <ul class="social-icons small flat m-0 mt-sm-15 sm-text-center text-right">

              <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
          </div>
          <div class="col-md-7">
            <div class="search-form">
                      <style>

                        #recipe_ul{
                          background-color:#eee;
                          cursor:pointer;
                        }
                        .recipe_li{
                          padding: 12px;
                        }

                      
                      </style>
                      
                        <div class="input-group col-sm-12 col-md-12">
                          <form action="search.php" method="post" >

                            <input type="text" class="form-control" name="recipe" id="recipe" placeholder="Search Recipe" autocomplete='off' data-height="43px" style="width: 440px"> 

                            <button class="btn btn-lg m-0" style=" width: 50px; border-radius: 0px" type="submit" name="search_val" id="search_val" ><i class="fa fa-search" ></i>
                            </button>

                          </form>
                          <span class="input-group-btn">
                            <a href="search.php"><button class="btn btn-lg" style="border-radius: 2px">Advance Search</button><a>
                          </span>
                        
                        </div>

                        <div id="recipe_List" style="position: absolute; display: block; z-index: 10; width: 490px;">
                          
                        </div>
                      


                    
              </div>

          </div>
          <div class="col-md-3">


            <ul class="social-icons small flat m-0 mt-sm-15 sm-text-center text-right">


              <li>
                  <?php
                  if(isset($_SESSION['name']))
                  { ?>
                      <a href="logout.php" class="font-20 text-black text-uppercase mb-5 font-weight-600"><i class="fa fa-sign-out text-white"></i><font color="white" size="3px">  Sign out</font></a>
                  <?php 
                  }
                  else
                  {
                  ?>
                      <a href="login.php" class="font-20 text-black text-uppercase mb-5 font-weight-600"><i class="fa fa-sign-in text-white"></i><font color="white" size="3px">  Log in</font></a>
              </li>
              <li>
                      <a href="signup.php" class="font-20 text-black text-uppercase mb-5 font-weight-600"><i class="fa fa-user-plus text-white"></i> <font color="white" size="3px">  Sign Up</font></a>
                 <?php }?>

              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <div class="header-middle sm-text-center">
      <div class="container pt-15 pb-15">
        <div class="row">
          <div class="col-md-3 font-24 text-uppercase">
            <a class="header-logo" href="index.php"><img width="80px" height="80px" alt="" src="images/logo.png">Dinie<span class="text-orange">Recettes</span></a>
          </div>
          <div class="col-md-3">
            <div class="mt-15 mt-sm-30 text-right sm-text-center">
              <div class="font-20 text-black text-uppercase mb-5 font-weight-600"><i class="fa fa-phone-square text-orange font-24"></i> <?php echo $contact_no; ?></div>
              <a class="font-12 text-gray" href="#">Call us for more details!</a>
            </div>
          </div>
          <div class="col-md-3">
             <div class="mt-15 mt-sm-30 text-right sm-text-center">
              <div class="font-20 text-black text-uppercase mb-5 font-weight-600"><i class="fa fa-envelope text-orange font-24"></i> Mail us today</div>
              <a class="font-15 text-gray" href="#"><?php echo $email; ?></a>
            </div>
          </div>
          <div class="col-md-3">

                  <div class="mt-20 mt-sm-30 text-right sm-text-center">
                    <div class="font-20 text-black text-uppercase mb-5 font-weight-600">
                     <?php
                        if(isset($_SESSION['email']))
                          { ?>

                          <div class="font-20 text-black pull-right text-uppercase mb-5 font-weight-600">
                          <a href="user_profile.php?user_id=<?php echo $_SESSION['user_id']; ?>">
                            <img src="images/user/<?php echo $_SESSION['profile_photo']; ?>" alt="..." class="profile_img" width="25%">
                          <span>&nbsp<?php echo $_SESSION['name']; ?></span></a>
                         
                          </div>



                      <?php }?>
                    </div>
                  </div>
           
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed" data-bg-color="#f5f5f5">
        <div class="container">
          <nav id="menuzord" class="menuzord orange" data-bg-color="#f5f5f5">
            <ul class="menuzord-menu">
              <li class="<?php if($currentpage=='index'){echo 'active';}?>"><a href="index.php">Home</a></li>

                <li><a href="javascript:void(0)">Menu Items</a>
                <div class="megamenu">
                  <div class="megamenu-row">

                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><h5 class="pl-10"><strong>Food Type:</strong></h5></li>
                        <li><a href="view_recipe_menu.php?recipe_category=Breakfast">Breakfast</a></li>
                        <li><a href="view_recipe_menu.php?recipe_category=Lunch">Lunch</a></li>
                        <li><a href="view_recipe_menu.php?recipe_category=Dinner">Dinner</a></li>
                      </ul>
                    </div>

                

                     <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><h5 class="pl-10"><strong>Food Cuisine:</strong></h5></li>
                        <li><a href="view_recipe_menu.php?recipe_cuisine=Indian">Indian</a></li>
                        <li><a href="view_recipe_menu.php?recipe_cuisine=American">American</a></li>
                        <li><a href="view_recipe_menu.php?recipe_cuisine=French">French</a></li>
                        <li><a href="view_recipe_menu.php?recipe_cuisine=Italian">Italian</a></li>
                        <li><a href="view_recipe_menu.php?recipe_cuisine=Chinese">Chinese</a></li>
                        <li><a href="view_recipe_menu.php?recipe_cuisine=Thai">Thai</a></li>
                        <li><a href="view_recipe_menu.php?recipe_cuisine=African">African</a></li>
                      </ul>
                    </div>

                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><h5 class="pl-10"><strong>Other:</strong></h5></li>
                        <li><a href="view_recipe_menu.php?recipe_category=Diet">Diet</a></li>
                        <li><a href="view_recipe_menu.php?recipe_category=Drinks">Drinks</a></li>
                        <li><a href="view_recipe_menu.php?recipe_category=Desserts">Desserts</a></li>
                        <li><a href="view_recipe_menu.php?recipe_category=Gluten Free">Gluten Free</a></li>
                      </ul>
                    </div>

                    <div class="col3">
                      <ul class="list-unstyled" >
                        <li align=right><a class="btn btn-colored btn-orange btn-sm pull-left mt-0" href="view_recipe.php">View All Recipes</a></li>
                      
                      </ul>
                    </div>

                  
                   
                  </div>
                </div>
              </li>
              <li class="<?php if($currentpage=='event'){echo 'active';}?>"><a href="view_recipe.php" class="active">Recipes</a></li>
              <!--<li class="<?php if($currentpage=='gallery'){echo 'active';}?>"><a href="gallery.php">Gallery</a></li>-->
              <li class="<?php if($currentpage=='volunteer'){echo 'active';}?>"><a href="chef_details.php">Our Chefs</a></li>
              <li class="<?php if($currentpage=='about'){echo 'active';}?>"><a href="about.php">About Us</a></li>
              <li class="<?php if($currentpage=='contact'){echo 'active';}?>"><a href="contact.php">Contact</a></li>

            </ul>

             <div id="dp">
            
                



              </div> 

             <ul class="pull-right hidden-sm hidden-xs menuzord-menu">
              
              <?php
                  if(isset($_SESSION['name']))
              { ?>
              <li><a class="btn btn-colored btn-orange mt-0 p-25"  href="addrecipe.php">Add New Recipe</a></li>
            <?php } ?>
              
            </ul>
            
         
            
           

          </nav>
        </div>
      </div>
    </div>
  </header>

  <script>
                    $(document).ready(function()
                    {
                    
                      $('#recipe').keyup(function()
                      {
                        var recipe_query = $(this).val();
                      
                        
                        if(recipe_query!='')
                        {
                            $.ajax({
                                  url:"controller.php",
                                  method:"POST",
                                  data:{recipe_query:recipe_query},
                                  success:function(data)
                                  {
                                    $('#recipe_List').fadeIn();
                                    $('#recipe_List').html(data);
                                  }
                            });
                        }
                        else
                        {
                          $('#recipe_List').fadeOut();
                          $('#recipe_List').html("");
                        }
                      });
                      $(document).on('click','.recipe_li',function(){
                          $("#recipe").val($(this).text());

                         
                          
                          $('#recipe_List').fadeOut();

                        });

                     
                    });
</script>
  