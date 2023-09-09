<?php
    require_once "SimpleXLS.php";
    use Shuchkin\SimpleXLS;
    
    $DB_HOST='localhost';
    $DB_USER='root';
    $DB_PASSWORD='';
    $DB_NAME='Samolazoff';

    if(!empty($_FILES)){
        move_uploaded_file($_FILES['exelFile']['tmp_name'], 'static/db.xls');

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

        $xls = SimpleXLS::parse('static/db.xls');
        
        $arr_db = $xls->rows();
        unset($arr_db[0]);
        foreach ($arr_db as $arr) {
            $row = "INSERT INTO test (article, product, price, total) VALUES ('$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]')";
            mysqli_query($conn, $row);
        };
    };
?>