<?php


 $admin_email = "requery.empire@gmail.com";
 
 
$email = $_POST["email"];
 

$subject = $_POST["name"]; 


$comment = $_POST["message"];

$phone = $_POST["phone"];


   

mail($admin_email, "$subject", $phone, $comment, "From:" . $email);

echo "Message sent... Thanks for contact! ";


		

 header("Location: index.html");




?>