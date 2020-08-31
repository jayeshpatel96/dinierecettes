<?php 
session_start();
include_once('Admin/lib/dao.php');
include_once('Admin/lib/model.php');

$d = new dao();
$m = new model();

$date = new DateTime();

extract($_POST);

$q=$d->select("user_details","email='$email'","");

$data=mysqli_fetch_array($q);

if($data>0)
	{
		header('location:signup.php?msgError=Email already exists');
	}	
else 
	{
		$otp=mt_rand(100000,999999);
		$_SESSION['otp']= $otp;

		if(isset($email)){
    
    		$subject="Email Verification OTP";
		    $txt="Hello Your Email Verification otp is : $otp";
		    $header="From:dinierecettes@gmail.com";
		    //mail($email,$subject,$txt,$header);

		    $imagetype=$_FILES["profile_photo"]['type'];
			$imagesize=$_FILES["profile_photo"]['size'];

			$img_arr=$_FILES['profile_photo'];

			move_uploaded_file($img_arr['tmp_name'],'images/user/'.$img_arr['name']);

			$profile_photo=$img_arr['name'];

			
		 	$m->set_data('name',$name);
		 	$m->set_data('email',$email);
		 	$m->set_data('password',$password);
		 	$m->set_data('phone_number',$phone_number);
		 	$m->set_data('profile_photo',$profile_photo);
		 	
		 	
		 	$a =array(
		 		'name'=>$m->get_data('name'),
		 		'email'=>$m->get_data('email'),
		 		'password'=>$m->get_data('password'),
		 		'phone_number'=>$m->get_data('phone_number'),
		 		'profile_photo'=>$m->get_data('profile_photo'),
		 		
		 		);
		 
				$_SESSION['user_details'] = $a;
				$_SESSION['message']="Login Success";

		    header('location:otp.php');
		    
		}
		else 
		{
			header('location:signup.php?msgError=Could not send OTP');
		  
		}	
		
	}



?>