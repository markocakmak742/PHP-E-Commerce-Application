<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$card_name  =   trim($_POST['card_name']);

$error = [

'card_name' => ''


];
 
//FORM Validation    

//card_name
if(strlen($card_name) < 5 ) { $error['card_name'] = "Firstname needs to longer"; }

if($card_name == '') { $error['card_name'] = "This field cannot be empty"; }


foreach($error as $key => $value) {
    
if(empty($value)) {
    
unset($error[$key]);
    
}   
}
   
if(empty($error)) {
    
echo "<script>window.location = 'payment_message.php';</script>";
    
}
    
}

?>