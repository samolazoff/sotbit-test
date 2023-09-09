<form action="scripts/settings.php" method="post" class="form-setting position-absolute top-0 end-0 bg-primary d-flex flex-column justify-content-start align-items-center gap-3 d-none">
    <img src="static/img/x-circle.svg" alt="x-circle.svg" class="img__exit align-self-end">
    <div class="input-wrap d-flex flex-column justify-content-center">
        <label for="host" class="mb-2">Host</label>
        <input type="text" name="host" id="host">
    </div>
    <div class="input-wrap d-flex flex-column justify-content-center">
        <label for="user" class="mb-2">User</label>
        <input type="text" name="user" id="user" >
    </div>
    <div class="input-wrap d-flex flex-column justify-content-centermb-2">
        <label for="password" class="mb-2">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-info btn-submit">Submit</button>
</form>