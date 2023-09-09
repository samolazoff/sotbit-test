<?php
   $jsonFile = file_get_contents('../temp/var.json');
   $var = json_decode($jsonFile, true);
   $var['host']=$_POST['host']?$_POST['host']:'localhost';
   $var['user']=$_POST['user']?$_POST['user']:'root';
   $var['password']=$_POST['password']?$_POST['password']:'';
   file_put_contents('../temp/var.json', json_encode($var));
   header("Location: ../index.php");
?>