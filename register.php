<?php
include_once 'inc/register.inc.php';
include_once 'inc/functions.php';
?>

<!-- Registration form to be output if the POST variables are not
set or if the registration script caused an error. -->

<?php
if (!empty($error_msg)) {
    echo $error_msg;
}
include('header.php');
?>

<div class="container">

        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please sign up</h3>
                </div>
                <div class="panel-body">
                    <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" class="form" name="registration_form">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="New Password" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirmpwd" id="confirmpwd" class="form-control input-lg" placeholder="Confirm Password" />
                            </div>
                            <button class="btn btn-lg btn-success btn-block signup-btn" type="submit" value="Register"
                                    onclick="return regformhash(this.form,
                                                       this.form.username,
                                                       this.form.email,
                                                       this.form.password,
                                                       this.form.confirmpwd);">Sign up
                             </button>
                        </fieldset>
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>

</div>

<?php include('footer.php'); ?>
