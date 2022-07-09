<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$firstname  =   trim($_POST['firstname']);
$lastname   =   trim($_POST['lastname']);
$email      =  trim($_POST['email']);

$adress     =  trim($_POST['adress']);
$number     =  trim($_POST['number']);
$country    =  trim($_POST['country']);
$state      =  trim($_POST['state']);
$zip        =  trim($_POST['zip']);

$error = [

'firstname' => '',
'lastname' => '',   
'username' => '',
'email' => '',   
'password' => ''

];

    
//FORM Validation    

//Firstname Validation
if(strlen($firstname) < 5 ) { $error['firstname'] = "Firstname needs to longer"; }

if($firstname == '') { $error['firstname'] = "This field cannot be empty"; }

//Lastname Validation 
if(strlen($lastname) < 5 ) { $error['lastname'] = "Lastname needs to longer"; }
    
if($lastname == '') {$error['lastname'] = "This field cannot be empty"; }

//Email Validation
if($email == '') { $error['email'] = "This field cannot be empty"; }

if($email == '') { $error['email'] = "This field cannot be empty"; }

if($adress == '') { $error['adress'] = "This field cannot be empty"; }

if($number == '') { $error['number'] = "This field cannot be empty"; }

if($country == '') { $error['country'] = "This field cannot be empty"; }
    
if($state == '') { $error['state'] = "This field cannot be empty"; }

if($zip == '') { $error['zip'] = "This field cannot be empty"; }


foreach($error as $key => $value) {
    
if(empty($value)) {
    
unset($error[$key]);
    
}   
}
   
if(empty($error)) {
    
echo "<script>window.location = 'payment.php';</script>";
    
}
    
}

?>