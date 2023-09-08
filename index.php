<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Test</title>
</head>
<body>
    <div class="conatiner app">
        <header class="app-header text-right mx-auto xl:w-3/4 bg-blue-500 px-5 text-white text-3xl mb-10">
            <h1 class="logo py-2">Test</h1>
        </header>
        <main class="app-main flex mx-auto xl:w-3/4">
            <section class="app-filters xl:w-1/4">
                <h2 class="title_section text-3xl text-center">Filters</h2>
                <form method="post" class="form-filter">
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="fullArticle" class="mb-2">Arcticle</label>
                        <input type="text" name="fullArticle" id="fullArticle" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="firstArcticle" class="mb-2">The first simbols of article</label>
                        <input type="text" name="firstArcticle" id="firstArcticle" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="lastArcticle" class="mb-2">The last simbols of article</label>
                        <input type="text" name="lastArcticle" id="lastArcticle" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="nameProduct" class="mb-2">Name Product</label>
                        <input type="text" name="nameProduct" id="nameProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="minPriceProduct" class="mb-2">Min Price</label>
                        <input type="number" name="minPriceeProduct" id="minPriceProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="maxPriceProduct" class="mb-2">Max Price</label>
                        <input type="number" name="maxPriceeProduct" id="maxPriceProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="minBalanceProduct" class="mb-2">Min Balance</label>
                        <input type="number" name="minBalanceProduct" id="minBalanceProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="maxBalanceProduct" class="mb-2">Max Balance</label>
                        <input type="number" name="maxBalanceProduct" id="maxBalanceProduct" class="border w-3/4">
                    </div>
                    <button type="submit" class="border border-blue bg-blue-500 px-2 py-1 rounded text-white">Parsing</button>
                </form>
            </section>
            <section class="app-visible-db xl:w-3/4 ">
                <h2 class="title_section text-3xl text-center">Data Base</h2>
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
                        }
                    };

                ?>
                <form enctype="multipart/form-data" method="post" class="form-loading">
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="exelFile" class="mb-2">Loading</label>
                        <input type="file" name="exelFile" id="exelFile" class="border w-1/4">
                    </div>
                    <button type="submit" class="border border-blue bg-blue-500 px-2 py-1 rounded text-white">Submit</button>
                </form>
                <?php
                    $filename= 'static/db.xls';
                    if(!file_exists($filename)){?>
                        <h3> File doesn't load..</h3>
                        <?php }
                         else {?>
                            <table class="w-full mt-5">
                                <thead>
                                    <tr>
                                        <th class="border bg-blue-200">Article</th>
                                        <th class="border bg-blue-200">Name</th>
                                        <th class="border bg-blue-200">Price</th>
                                        <th class="border bg-blue-200">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
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
                                                        <td class="border text-center"><?php echo $arr['article']; ?></td>
                                                        <td class="border text-center"><?php echo $arr['product']; ?></td>
                                                        <td class="border text-center"><?php echo $arr['price']; ?></td>
                                                        <td class="border text-center"><?php echo $arr['total']; ?></td>
                                                    </tr>
                                                <?php }
                                            }
                                        }else{
                                            $fullArticle = $_POST['fullArticle']?$_POST['fullArticle']:'article';
                                            $firstArcticle = $_POST['firstArcticle']?$_POST['firstArcticle']:'firstArcticle';
                                            $lastArcticle = $_POST['lastArcticle']?$_POST['lastArcticle']:'lastArcticle';
                                            $nameProduct = $_POST['nameProduct']?$_POST['nameProduct']:'nameProduct';
                                            $minPriceeProduct = $_POST['minPriceeProduct']? $_POST['minPriceeProduct']:0;
                                            $maxPriceeProduct = $_POST['maxPriceeProduct']?$_POST['maxPriceeProduct']:1000000;
                                            $minBalanceProduct = $_POST['minBalanceProduct']?$_POST['minBalanceProduct']:0;
                                            $maxBalanceProduct = $_POST['maxBalanceProduct']?$_POST['maxBalanceProduct']:100000;
                                            print_r($_POST);
                                            
                                            $row_front = "SELECT * FROM test WHERE 
                                                        article != NULL AND 
                                                        article = $fullArticle AND 
                                                        price >= $minPriceeProduct AND 
                                                        price <= $maxPriceeProduct AND
                                                        total  >=  $minBalanceProduct AND
                                                        total  <=  $maxBalanceProduct AND
                                                        product = product";
                                            $query= mysqli_query($conn,  $row_front);
                                            $products = mysqli_fetch_all($query, MYSQLI_ASSOC);
;
                                            foreach($products as $arr){ ?>
                                                <tr>
                                                    <td class="border text-center"><?php echo $arr['article']; ?></td>
                                                    <td class="border text-center"><?php echo $arr['product']; ?></td>
                                                    <td class="border text-center"><?php echo $arr['price']; ?></td>
                                                    <td class="border text-center"><?php echo $arr['total']; ?></td>
                                                </tr>
                                            <?php }
                                        };
                                    ?>
                                   





                        <?php }?>
                                </tbody>
                            </table>
            </section>
        </main>
        <footer class="app-footer text-center mx-auto xl:w-3/4 bg-blue-500 text-white my-10 h-10">
            <a href="https://github.com/samolazoff" class="py-2">@Samolazoff</a>
        </footer>
    </div>
</body>
</html>