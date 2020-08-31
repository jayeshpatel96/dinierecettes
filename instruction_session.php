<?php 
session_start();


if (isset($_GET['step'])) 

{
	extract($_GET);

	
	$step+=1;
    $b[$step]="";
    array_push($_SESSION['instruction'],$b);

    header('location:addrecipe3.php');
	

}	


?>