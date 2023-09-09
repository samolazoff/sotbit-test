<!DOCTYPE html>
<html lang="en">
<?php require_once 'components/head.php'?>
<body>
<?php require_once 'components/header.php'?>
    <main class="app-main">
        <section class="app-start-page container text-center">
            <h2 class="title-block py-3">Home</h2>
            <div class="content d-flex justify-content-start ">
                <p class="app-start-page__txt d-flex flex-column align-items-start w-50">
                    <span>Hi! This project is designed for data analysis!</span> 
                    <span>To get started, we recommend making the  <button class="border border-blue bg-blue-500 px-2 py-1 rounded text-white btn-setting">Settings</button>.</span> 
                    <span>After making the settings, download the Excel file.
                    Before filling out the parsing form, the program will output 10 random rows from the database table.</span> 
                    <span>If you want to download another Excel file, click the <b>Reset</b> button and download again.</span> 
                </p>
                <?php require_once 'components/formDownloadExel.php'?>
            </div>
            
        </section>
    </main>
<?php require_once 'components/footer.php'?>
</body>
</html>