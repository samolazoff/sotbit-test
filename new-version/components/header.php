<header class="app-header">
    <div class="container bg-primary text-light py-2 d-flex justify-content-between align-items-center position-relative">
        <h1 class="logo">Test</h1>
        <div class="box-btn d-flex justify-content-end w-25 gap-2 align-items-center">
            <button class="btn bg-info btn-setting">Settings</button>
            <button class="btn bg-danger btn-reset d-none ">Reset</button>
        </div>
        <?php 
            require_once 'block-settings.php';
        ?>
    </div>
</header>