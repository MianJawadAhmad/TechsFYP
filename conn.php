<?php
ob_start();
define("DB_USER", 'localhost');
define("USER", 'techstit_techsti');
define("DB_PASS", 'X=f?7KYyFlLr');
define("DB_NAME", 'techstit_store');
$conn=mysqli_connect(DB_USER, USER,  DB_PASS, DB_NAME  ) or die(mysqli_error());

?> 

