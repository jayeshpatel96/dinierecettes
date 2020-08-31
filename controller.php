<?php 
session_start();
include_once('Admin/lib/dao.php');
include_once('Admin/lib/model.php');

$d = new dao();
$m = new model();


//Register New User..
if (isset($_POST['validate_otp']))
 {
    extract($_POST);
    $botp= $_SESSION['otp'];
   
    if($botp==$otp)
    {
        	$q=$d->insert("user_details",$_SESSION['user_details']);

		 	if($q>0) 
		 	{
		 		header('location:login.php?success_message=Registration Success');
		 		session_destroy();
			}
			else 
			{
				header('location:signup.php?success_message=Registration Not Success');
				session_destroy();

			}
    }
    else
    {
        header('location:otp.php?msgError=Wrong OTP');
    }
 }


 if(isset($_POST['donationdetails'])) 
{
 	extract($_POST);
 	

 	$m->set_data('name',$name);
 	$m->set_data('email',$email);
 	$m->set_data('mobile',$mobile);
 	$m->set_data('address',$address);
 	$m->set_data('donatefor',$donatefor);
 	$m->set_data('donate_type',$donateType);
 	$m->set_data('amount',$donateAmount);
 	$m->set_data('message',$message);
 	$a =array(
 		'name'=>$m->get_data('name'),
 		'email'=>$m->get_data('email'),
 		'mobile'=>$m->get_data('mobile'),
 		'address'=>$m->get_data('address'),
 		'donatefor'=>$m->get_data('donatefor'),
 		'donate_type'=>$m->get_data('donate_type'),
 		'amount'=>$m->get_data('amount'),
 		'message'=>$m->get_data('message'),
 		);

 	$q=$d->insert("donation",$a);

 	if($q>0) 
 	{
 		header('location:donation.php?success_message="Donation Successful"');
	}
	else 
	{
		echo "Error in Donation";
	}
 }



if (isset($_POST['edituser'])) {
 	extract($_POST);
 	

 	$imagetype=$_FILES["profile"]['type'];
	$imagesize=$_FILES["profile"]['size'];

	$img_arr=$_FILES['profile'];

	move_uploaded_file($img_arr['tmp_name'],'images/'.$img_arr['name']);

	$profile=$img_arr['name'];

	
 	$m->set_data('username',$username);
 	$m->set_data('email',$email);
 	$m->set_data('profile',$profile);
 	

 	$a =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'profile'=>$m->get_data('profile'),
 		
 	) ;

 	$a1 =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		
 		
 	) ;
 
 	if($profile!="")
 	{
 	$q=$d->update("users",$a,"userId='$userId'");
 	$_SESSION['profile']= $profile;
 	}
 	else
 	{
 	$q=$d->update("users",$a1,"userId='$userId'");
 	}
 	if($q>0)
 	{
 		$_SESSION['username']= $username;
		$_SESSION['email']= $email;
		
		$_SESSION['userId']= $userId;
		header('location:index.php');
	}
	else {
		echo "Error";
	}
 }

if (isset($_POST['usercheck'])) 
{

 	extract($_POST);


	$q=$d->select("user_details","email='$email' AND password='$password'","");

 	$data=mysqli_fetch_array($q);

 	if($data>0)
 	{
		$_SESSION['user_id']= $data['user_id'];
		$_SESSION['name']= $data['name'];
		$_SESSION['email']= $data['email'];
		$_SESSION['phone_number']= $data['phone_number'];
		$_SESSION['profile_photo']= $data['profile_photo'];
		
		

		header('location:index.php');

	}	
	else 
	{
		
		header('location:login.php?msgError=Wrong Username or Email');
	}
 }



	
/*Forgot Password Code Starts..*/

if (isset($_POST['forgot_email_verification'])) {

    extract($_POST);


    $q1=$d->select("user_details","email='$email'");

    $data=mysqli_fetch_array($q1);

    if($data>0)
    {
         $otp=mt_rand(100000,999999);

         $_SESSION['botp']= $otp;
         $_SESSION['forgot_email']= $email;


         $subject="Forgot Password OTP";
         $txt="Hello Your Forgot Password otp is : $otp!";
         $header="From: dinierecettes@gmail.com";

         mail($email,$subject,$txt,$header);

        header('location:forgot_otp.php');
    }   
    else 
    {
        header('location:forgot.php?msgError=Wrong Email Address');
    }
 }


if (isset($_POST['forgot_otp_validate']))
 {
    extract($_POST);
    $botp= $_SESSION['botp'];
   
    if($botp==$otp)
    {
         header('location:set_password.php');
    }
    else
    {
        header('location:forgot_otp.php?msgError=Wrong OTP');
    }
 }

if (isset($_POST['set_password']))
{
    extract($_POST);
    $m->set_data('password',$password);

    $a =array(
        'password'=>$m->get_data('password'),
        );

    $q=$d->update("user_details",$a,"email='$email'");

    if($q>0)
    {
        header('location:login.php?msgSuccess=Password Change Successfully');
    }
    
    else
    {
        echo "Error in changing Password";
    }
}

/*Forgot Password Code Ends..*/


if (isset($_POST['subbtn'])) {
 	extract($_POST);

	
	
	$m->set_data('email',$email);
	$m->set_data('status','0');
	$m->set_data('flag','0');
 	$m->set_data('created_date',date("d-m-Y"));
 	// 
 	$a =array(
 		'email'=>$m->get_data('email'),
 		'status'=>$m->get_data('status'),
 		'flag'=>$m->get_data('flag'),
 		'created_date'=>$m->get_data('created_date'),
 		
 	) ;

 	$q=$d->insert("subscribers",$a);
 	if($q>0) {
 		header('location:index.php');
	}
	else {
		echo "Error";
	}
 }


 if(isset($_POST['addcookbook'])) 
{
 	extract($_POST);
 	

 	$m->set_data('cb_name',$cb_name);
 	$m->set_data('user_id',$_SESSION['user_id']);
 	
 	$a =array(
 		'cb_name'=>$m->get_data('cb_name'),
 		'user_id'=>$m->get_data('user_id'),
 		
 		);

 	$q=$d->insert("cookbook_details",$a);

 	if($q>0) 
 	{
 		 header("Location:user_profile.php?user_id=".$_SESSION['user_id']);
	}
	else 
	{
		echo "Error in Cookbook Add";
	}
 }


  if(isset($_GET['deletecookbook'])) {
 	extract($_GET);
 	
 	$q=$d->delete("cookbook_details","cb_id='$deletecookbook'");

 	if($q>0)
 	{
		 header("Location:user_profile.php?user_id=".$_SESSION['user_id']);
	}
	else
	{
		echo "Error";
	}
 }




if (isset($_POST['query'])) 
{

 	extract($_POST);
 	$output='';
	$q=$d->select("ingredients_details","ingredient_name LIKE '%".$query."%'","");
	$output='<ul class="list-unstyled" id="ingredient_ul">';
	$data=mysqli_fetch_array($q);
	if($data>0)
	{
 		while ($data=mysqli_fetch_array($q)) 
 		{
      		extract($data);
      		$output .='<li class="ingredient_li">'.$ingredient_name.'</li>';
      	
    	}
	}
	else
	{
		$output .='<li class="ingredient_li">Ingredients not found.</li>';
	}
	$output .='</ul>';
	echo $output;
}

if (isset($_POST['recipe_query'])) 
{

 	extract($_POST);
 	$output='';
	$q=$d->select("recipe_details","recipe_name LIKE '%".$recipe_query."%'","");
	$output='<ul class="list-unstyled" id="recipe_ul">';
	$data=mysqli_fetch_array($q);
	if($data>0)
	{
 		while ($data=mysqli_fetch_array($q)) 
 		{
      		extract($data);
      		$output .='<li class="recipe_li">'.$recipe_name.'</li>';
      	
    	}
	}
	else
	{
		$output .='<li class="recipe_li">Ingredients not found.</li>';
	}
	$output .='</ul>';
	echo $output;
 }


if(isset($_GET['unset_ingredient'])) {
 	extract($_GET);
 	echo $unset_ingredient;
 	$arr=$_SESSION['response'];

	unset($arr[$unset_ingredient]); 
	$_SESSION['response']=$arr;

	header('location:addrecipe2.php');
	
}

if(isset($_POST['delete_ingredient'])) {
 	extract($_POST);
 	echo $unset_ingredient;
 	$arr=$_SESSION['response'];

	unset($arr[$unset_ingredient]); 
	$_SESSION['response']=$arr;
	header('location:search.php');

	
	
}

if(isset($_GET['unset_instruction'])) {
 	extract($_GET);
 	echo $unset_instruction;
 	$arr=$_SESSION['instruction'];

	unset($arr[$unset_instruction]); 
	$_SESSION['instruction']=$arr;

	header('location:addrecipe3.php');
	
}


 if(isset($_POST['instruction_details'])) 
{
 	
 	$m->set_data('recipe_name',$_SESSION['recipe_details']['recipe_name']);
 	$m->set_data('cook_time',$_SESSION['recipe_details']['cook_time']);
 	$m->set_data('number_of_serving',$_SESSION['recipe_details']['number_of_serving']);
 	$m->set_data('recipe_cuisine',$_SESSION['recipe_details']['recipe_cuisine']);
 	$m->set_data('recipe_category',$_SESSION['recipe_details']['recipe_category']);
 	$m->set_data('rating_number','0');
 	$m->set_data('rating','5');
 	$m->set_data('picture_of_recipe',$_SESSION['recipe_details']['picture_of_recipe']);
 	$m->set_data('video_link',"vgg");
 	$m->set_data('calories',$_SESSION['recipe_details']['calories']);
 	$m->set_data('user_id',$_SESSION['user_id']);

 	$a =array(
 		'recipe_name'=>$m->get_data('recipe_name'),
 		'cook_time'=>$m->get_data('cook_time'),
 		'number_of_serving'=>$m->get_data('number_of_serving'),
 		'recipe_cuisine'=>$m->get_data('recipe_cuisine'),
 		'recipe_category'=>$m->get_data('recipe_category'),
 		'rating_number'=>$m->get_data('rating_number'),
 		'rating'=>$m->get_data('rating'),
 		'picture_of_recipe'=>$m->get_data('picture_of_recipe'),
 		'video_link'=>$m->get_data('video_link'),
 		'calories'=>$m->get_data('calories'),
 		'user_id'=>$m->get_data('user_id'),
 	);   

 	$q=$d->insert("recipe_details",$a);

 	if($q>0) 
 	{
 		$recipe_id=$d->recent_instertion();;
 		
 		foreach ($_SESSION['ingredient_details'] as $key => $value) 
 		{
  				
			$m->set_data('recipe_id',$recipe_id);
			$m->set_data('ingredient_id',$key);
 			$m->set_data('ingredient_amount',$value);
			$a =array(
				'recipe_id'=>$m->get_data('recipe_id'),
 				'ingredient_id'=>$m->get_data('ingredient_id'),
 				'ingredient_amount'=>$m->get_data('ingredient_amount'),
 			) ; 

			$q=$d->insert("recipe_ingredients_details",$a);
			
        }
        
      
		for($count=0; $count<count($_POST['instruction_step']); $count++)
		{
			$m->set_data('recipe_id',$recipe_id);
			$m->set_data('instruction_step',$_POST['instruction_step'][$count]);
 		
			$a =array(
				'recipe_id'=>$m->get_data('recipe_id'),
 				'instruction_step'=>$m->get_data('instruction_step'),
 				
 			) ; 

			$q=$d->insert("instruction_details",$a);
			
		}
	}
	else
	{
		echo "error1";
	}	
	
	unset($_SESSION["recipe_details"]);
	unset($_SESSION["ingredient_details"]);
	unset($_SESSION["instruction"]);
	unset($_SESSION["response"]);
	

 	header('location:index.php');

 
 }


  if(isset($_GET['deletecookbook'])) {
 	extract($_GET);
 	
 	$q=$d->delete("cookbook_details","cb_id='$deletecookbook'");

 	if($q>0)
 	{
		header('location:index.php');
	}
	else
	{
		echo "Error";
	}
 }





?>