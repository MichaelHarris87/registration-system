<?php
include_once 'inc/db_connect.php';
include_once 'inc/functions.php';

sec_session_start();
include('header.php');
?>

<?php if (login_check($mysqli) == true) : ?>

    <div class="container">
        <div class="span3 well">
            <center>
                <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://avatars1.githubusercontent.com/u/5090818?v=2&s=460" name="aboutme" width="140" height="140" class="img-circle"></a>
                <h3>Mike Harris</h3>
                <em>click my face for more</em>
            </center>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" id="myModalLabel">More About Mike</h4>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img src="https://avatars1.githubusercontent.com/u/5090818?v=2&s=460" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                            <h3 class="media-heading">Mike Harris <small>USA</small></h3>
                            <span><strong>Skills: </strong></span>
                            <span class="label label-warning">HTML5/CSS</span>
                            <span class="label label-info">JavaScript</span>
                            <span class="label label-danger">PHP/MySQL</span>
                            <span class="label label-success">Windows, Mac OSX, Linux</span>
                        </center>
                        <hr>
                        <center>
                            <p class="text-left"><strong>Bio: </strong><br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                            <br>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Mike</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>

<?php include('footer.php'); ?>