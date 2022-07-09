<?php

$message = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$firstname =   trim($_POST['firstname']);
$lastname  =   trim($_POST['lastname']);
$username   =  trim($_POST['username']);
$email      =  trim($_POST['email']);
$password   =  trim($_POST['password']);
$password   = md5($password);

$user_exist  = User::username_exist($username);
$email_exist = User::email_exist($email);


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

//Username Validation
if(strlen($username) < 5 ) { $error['username'] = "Username needs to longer"; }

if($username == '') {$error['username'] = "This field cannot be empty"; }

if($user_exist > 0) { $error['username'] = "Username already exist,take another one"; }

//Email Validation
if($email == '') { $error['email'] = "This field cannot be empty"; }
    
if($email_exist > 0) { $error['email'] = "Email already exist,take another one"; }

//Password Validation
if($password == '') { $error['password'] = "This field cannot be empty"; }    



foreach($error as $key => $value) {
    
if(empty($value)) {
    
unset($error[$key]);
    
}   
}
   
if(empty($error)) {

$user = new User();

$user->first_name = $firstname;
$user->last_name  = $lastname;
$user->username   = $username;
$user->email      = $email;
$user->password   = $password;

$user->save();

$message = "You have successfully registered!";    
    
header( "refresh:2;url=login.php" );
    
}
    
}

?>