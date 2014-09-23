<?php
include_once 'inc/db_connect.php';
include_once 'inc/functions.php';

sec_session_start();
include('header.php');
?>

<?php if (login_check($mysqli) == true) : ?>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                <div class="profile">
                    <div class="col-sm-12">
                        <div class="col-xs-12 col-sm-8">
                            <h2>Michael Harris</h2>
                            <p><strong>About: </strong> Web Developer. </p>
                            <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                            <p><strong>Skills: </strong>
                                <span class="tags">html5</span>
                                <span class="tags">css3</span>
                                <span class="tags">jquery</span>
                                <span class="tags">bootstrap3</span>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-4 text-center">
                            <figure>
                                <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                                <figcaption class="ratings">
                                    <p>Ratings
                                        <a href="#">
                                            <span class="fa fa-star"></span>
                                        </a>
                                        <a href="#">
                                            <span class="fa fa-star"></span>
                                        </a>
                                        <a href="#">
                                            <span class="fa fa-star"></span>
                                        </a>
                                        <a href="#">
                                            <span class="fa fa-star"></span>
                                        </a>
                                        <a href="#">
                                            <span class="fa fa-star-o"></span>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-12 divider text-center">
                        <div class="col-xs-12 col-sm-4 emphasis">
                            <h2><strong> 20,7K </strong></h2>
                            <p><small>Followers</small></p>
                            <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                        </div>
                        <div class="col-xs-12 col-sm-4 emphasis">
                            <h2><strong>245</strong></h2>
                            <p><small>Following</small></p>
                            <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                        </div>
                        <div class="col-xs-12 col-sm-4 emphasis">
                            <h2><strong>43</strong></h2>
                            <p><small>Snippets</small></p>
                            <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Options </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
        <?php endif; ?>

<?php include('footer.php'); ?>