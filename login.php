<?php
include_once 'inc/db_connect.php';
include_once 'inc/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<?php
    if (isset($_GET['error'])) {
    echo '<p class="error">Error Logging In!</p>';
    }
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend>Sign in</legend>
            <form action="inc/process_login.php" method="post" name="login_form">
                <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" />
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" />
                <button type="submit" class="btn btn-lg btn-primary btn-block signup-btn" value="Login"
                        onclick="formhash(this.form, this.form.password);">Sign in
                </button>
                <p>If you don't have a login, please <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>
</div>

 