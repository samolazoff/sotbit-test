<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../components/head.php'?>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<?php require_once '../components/header.php'?>
    <main class="app-main">
        <div class="box-btn container d-flex justify-content-end gap-2 align-items-center position-relative">
            <button class="btn bg-info btn-setting my-2">Settings</button>
            <?php
                if(file_exists('../temp/db.xls')){
                    ?>
                    <form action="../scripts/resetDB.php" method="post">
                        <button class="btn bg-danger btn-reset">Reset</button>
                    </form>
                    
                    <?php
                        }
                    ?>
            <?php 
                require_once '../components/block-settings.php';
            ?>
        </div>
        <section class="app-data-base container text-center">
            <h2 class="title-block py-3">Data Bsse</h2>
            <div class="app-data-base-cont d-flex">
            <?php require_once '../components/formParser.php'?>
            <?php require_once '../components/tableBase.php'?>
            </div>
        </section>
    </main>
<?php require_once '../components/footer.php'?>
</body>
</html>