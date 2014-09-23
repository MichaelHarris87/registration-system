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
include_once('header.php');
?>

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign in</h3>
                </div>
                <div class="panel-body">
                    <form action="inc/process_login.php" method="post" name="login_form" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block login" value="Login"
                                    onclick="formhash(this.form, this.form.password);">Login
                            </button>
                        </fieldset>
                        <p>No account? please <a href="register.php">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once('footer.php'); ?>

 