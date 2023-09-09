<?php
    $filename= '../temp/db.xls';
    if(!file_exists($filename)){?>
        <h3> File doesn't load..</h3>
    <?php }else {?>
        <table  class="table table-bordered">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">Article</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $jsonFile = file_get_contents('../temp/var.json');
                    $var = json_decode($jsonFile, true);
                
                    $DB_HOST=$var['host'];
                    $DB_USER=$var['user'];
                    $DB_PASSWORD=$var['password'];
                    $DB_NAME='Samolazoff';

                    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
                    if(count($_POST)<1){
                        $min_id = rand(1, 100);
                        $max_id = $min_id +10;
                        for($i = $min_id; $i < $max_id; $i++){
                            $row_front = "SELECT * FROM test WHERE id=$i";
                            $query= mysqli_query($conn,  $row_front);
                            $products = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            foreach($products as $arr){ ?>
                                <tr>
                                    <td scope="row"><?php echo $arr['article']; ?></td>
                                    <td ><?php echo $arr['product']; ?></td>
                                    <td > <?php echo $arr['price']; ?></td>
                                    <td ><?php echo $arr['total']; ?></td>
                                </tr>
                            <?php }
                        }
                    }else{
                        $fullArticle = $_POST['fullArticle']?$_POST['fullArticle']:'article';
                        $firstArcticle = $_POST['firstArcticle']?($_POST['firstArcticle'].'%'):'%';
                        $lastArcticle = $_POST['lastArcticle']?('%'.$_POST['lastArcticle']):'%';
                        $nameProduct = $_POST['nameProduct']?$_POST['nameProduct']:'nameProduct';
                        $minPriceeProduct = $_POST['minPriceeProduct']? $_POST['minPriceeProduct']:0;
                        $maxPriceeProduct = $_POST['maxPriceeProduct']?$_POST['maxPriceeProduct']:1000000;
                        $minBalanceProduct = $_POST['minBalanceProduct']?$_POST['minBalanceProduct']:0;
                        $maxBalanceProduct = $_POST['maxBalanceProduct']?$_POST['maxBalanceProduct']:100000;
                        print_r($firstArcticle);
                        print_r($lastArcticle);
                        
                        $row_front = "SELECT * FROM test WHERE 
                                    article = $fullArticle AND 
                                    article LIKE '$firstArcticle' AND
                                    article LIKE '$lastArcticle' AND
                                    price >= $minPriceeProduct AND 
                                    price <= $maxPriceeProduct AND
                                    total  >=  $minBalanceProduct AND
                                    total  <=  $maxBalanceProduct AND
                                    product = product AND
                                    article IS NOT NULL
                                    ";
                        $query= mysqli_query($conn,  $row_front);
                        $products = mysqli_fetch_all($query, MYSQLI_ASSOC);
                        foreach($products as $arr){ ?>
                            <tr>
                                <td scope="row"><?php echo $arr['article']; ?></td>
                                <td ><?php echo $arr['product']; ?></td>
                                <td ><?php echo $arr['price']; ?></td>
                                <td ><?php echo $arr['total']; ?></td>
                            </tr>
                        <?php }
                    };
                ?>
            <?php }?>
        </tbody>
    </table>