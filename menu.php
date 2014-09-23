<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">PHP System</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav choose_page">
                <li><a href="members.php"><span class="glyphicon glyphicon-briefcase"></span> Members</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php">Sign Up</a></li>
                <li class="dropdown">
                    <a href="login.php" class="dropdown-toggle" data-toggle="dropdown">Sign In <b class="caret"></b></a>
                    <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="inc/process_login.php" method="post" name="login_form" role="form">
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-success btn-block login" value="Login"
                                                    onclick="formhash(this.form, this.form.password);">Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="inc/logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

 