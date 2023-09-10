<?php
    if(file_exists('../temp/db.xls')){
        $jsonFile = file_get_contents('../temp/var.json');
        unlink('../temp/db.xls');
        
        header("Location: ../index.php");
    }else{
        $jsonFile = file_get_contents('temp/var.json');
        unlink('temp/db.xls');
        header("Location: index.php");
    }
    $var = json_decode($jsonFile, true);
    $DB_HOST=$var['host'];
    $DB_USER=$var['user'];
    $DB_PASSWORD=$var['password'];
    $DB_NAME='Samolazoff';

    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    $del = "DELETE FROM test ";
    $query= mysqli_query($conn,  $row_front);
    
?>