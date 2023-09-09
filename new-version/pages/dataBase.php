<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once '../components/head.php'?>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<?php require_once '../components/header.php'?>
    <main class="app-main">
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