<?php
session_start();
include("http.php");
$us=0;
$to = "david.fang@InnoverGroup.com";

  $subject = $_REQUEST['Subject'];
  $customerRequirement = $_REQUEST['Customer_Requirment'];
  $S_organization = $_REQUEST['S_organization'];
  $name = $_REQUEST['Name'];
  $from = $_REQUEST['Email'];
  $S_streetaddress = $_REQUEST['S_streetaddress'];
  $S_city = $_REQUEST['S_city'];
  $S_pin = $_REQUEST['S_pin'];

  
  
  //$message = $_REQUEST['messege']."\n Contact No. - ".$phone;
 $message=" Subject = $subject \n Customer Requirement = $customerRequirement \n Organisation = $S_organization \n Name = $name \n E-mail = $from \n Address= $S_streetaddress\n City = $S_city \n Zip code = $S_pin";
   
 $_SESSION['myname']=$name;
 $headers = "From: david.fang@InnoverGroup.com";

if(isset($_REQUEST['Email']))
{    
    $us = 1;
    mail($to, $subject, $message, $headers);
	
	redirect("thanks.html");
	
}
else
{
	
	redirect("contactus.html?us=$us");
}
?>
