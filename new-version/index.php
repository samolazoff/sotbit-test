<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'components/head.php'?>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php require_once 'components/header.php'?>
    <main class="app-main">
        <section class="app-start-page container text-center">
            <h2 class="title-block py-3">Home</h2>
            <div class="content d-flex justify-content-center ">
                <p class="app-start-page__txt d-flex flex-column align-items-start">
                    <span class="text-start">Hi! This project is designed for data analysis!</span> 
                    <span class="text-start">To get started, we recommend making the
                          <button class="btn bg-info btn-setting">Settings</button>.</span> 
                    <span class="text-start">After making the settings, download the Excel file.
                    Before filling out the parsing form, the program will output 10 random rows from the database table.</span> 
                    <span class="text-start">If you want to download another Excel file, click the <button class="btn bg-danger btn-reset ">Reset</button> button and download again.</span> 
                </p>
                <?php require_once 'components/formDownloadExel.php'?>
            </div>
            
        </section>
    </main>
<?php require_once 'components/footer.php'?>
</body>
</html>