<?php
   $DB_HOST=$_POST['host']?$_POST['host']:'localhost';
   $DB_USER=$_POST['user']?$_POST['user']:'root';
   $DB_PASSWORD=$_POST['password']?$_POST['password']:'';
   $DB_NAME='Samolazoff';
   header("Location: ../index.php");
?>