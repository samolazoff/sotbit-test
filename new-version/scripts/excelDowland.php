<?php
    require_once "../components/SimpleXLS.php";
    use Shuchkin\SimpleXLS;
    $jsonFile = file_get_contents('../temp/var.json');
    $var = json_decode($jsonFile, true);
    var_dump($var);

    $DB_HOST=$var['host'];
    $DB_USER=$var['user'];
    $DB_PASSWORD=$var['password'];
    $DB_NAME='Samolazoff';
    var_dump($_FILES);

    if(!empty($_FILES)){
        move_uploaded_file($_FILES['exelFile']['tmp_name'], '../temp/db.xls');

        $sql = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD);
        $db = 'CREATE DATABASE ' . $DB_NAME;
        mysqli_query($sql, $db);

        $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

        $test = "CREATE TABLE test (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            article VARCHAR(30) NOT NULL,
            product VARCHAR(100) NOT NULL,
            price INT(6) NOT NULL,
            total INT(6) NOT NULL
            )";
        mysqli_query($conn, $test);

        $xls = SimpleXLS::parse('../temp/db.xls');
        
        $arr_db = $xls->rows();
        unset($arr_db[0]);
        foreach ($arr_db as $arr) {
            if($arr[0]!=''){
                $row = "INSERT INTO test (article, product, price, total) VALUES ('$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]')";
                mysqli_query($conn, $row);
            }
        };
    };
    header("Location: ../pages/dataBase.php");
?>