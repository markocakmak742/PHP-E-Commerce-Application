<?php ob_start(); ?>

<?php require_once("includes/header.php"); ?>
<?php require_once("1)Database_and_Classes/init.php"); ?>

<?php

$session->logout();
header( "Location: {$_SESSION['last_url']}" );



?>