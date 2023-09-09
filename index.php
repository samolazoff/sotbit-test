<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Test</title>
</head>
<body>
    <div class="conatiner app">
        <header class="app-header text-right mx-auto xl:w-3/4 bg-blue-500 px-5 text-white text-3xl mb-10">
            <h1 class="logo py-2">Test</h1>
        </header>
        <main class="app-main flex mx-auto xl:w-3/4">
            <div class="block-setting bg-blue-200 ">
                <h3>Setting-server</h3>
                <form class="form-setting xl:w-1/4" method="post">
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="host" class="mb-2">Host</label>
                        <input type="text" name="host" id="host" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="user" class="mb-2">User</label>
                        <input type="text" name="user" id="user" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="password" class="mb-2">Host</label>
                        <input type="password" name="password" id="password" class="border w-3/4">
                    </div>
                    <button type="submit" class="border border-blue bg-blue-500 px-2 py-1 rounded text-white">Submit</button>
                </form>
            </div>
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
                <div class="block-btn flex justify-start gap-3 my-7">
                    <button class="border border-blue bg-blue-500 px-2 py-1 rounded text-white btn-setting">Settings</button>
                    <button class="border border-blue bg-red-500 px-2 py-1 rounded text-white btn-reset">Reset</button>
                </div>
                <?php 
                    require_once 'util/createDb.php';
                ?>
                <p class="pr-5 my-5 flex flex-col justify-start items-start text-xl txt-start">
                    <span>Hi! This project is designed for data analysis!</span> 
                    <span>To get started, we recommend making the  <button class="border border-blue bg-blue-500 px-2 py-1 rounded text-white btn-setting">Settings</button>.</span> 
                    <span>After making the settings, download the Excel file.
                    Before filling out the parsing form, the program will output 10 random rows from the database table.</span> 
                    <span>If you want to download another Excel file, click the <b>Reset</b> button and download again.</span> 
                </p>
                <form enctype="multipart/form-data" method="post" class="mt-10">
                    
                    <div class="input-wrap flex flex-col mb-2 mt-10">
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
                                                        -- article != NULL AND 
                                                        article = $fullArticle AND 
                                                        price >= $minPriceeProduct AND 
                                                        price <= $maxPriceeProduct AND
                                                        total  >=  $minBalanceProduct AND
                                                        total  <=  $maxBalanceProduct AND
                                                        product = product";
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