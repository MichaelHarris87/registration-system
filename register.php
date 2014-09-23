<?php
include_once 'inc/register.inc.php';
include_once 'inc/functions.php';
include('header.php');
?>

<!-- Registration form to be output if the POST variables are not
set or if the registration script caused an error. -->

<?php
if (!empty($error_msg)) {
    echo $error_msg;
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            <legend>Sign Up</legend>
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" class="form" name="registration_form">

                     <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" />
                     <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Your Email" />
                     <input type="password" name="password" id="password" class="form-control input-lg" placeholder="New Password" />
                     <input type="password" name="confirmpwd" id="confirmpwd" class="form-control input-lg" placeholder="Confirm Password" />
                     <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                     <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" value="Register"
                            onclick="return regformhash(this.form,
                                               this.form.username,
                                               this.form.email,
                                               this.form.password,
                                               this.form.confirmpwd);">Sign up
                     </button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
 