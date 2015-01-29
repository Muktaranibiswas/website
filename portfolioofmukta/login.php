<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<header class="container">
    <br />
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
            <img src="images/GREEN-IT-3.gif" width="140" hight="60">
        </div>
        <br /><br>
        <div class="col-md-8">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="home.html"><h4>Home</h4></a></li>
                <li role="presentation"><a href="about.php"><h4>About me</h4></a></li>
                <li role="presentation"><a href="portfolio.html"><h4>Portfolio</h4></a></li>
                <li role="presentation"><a href="gallery.html"><h4>photo gallery</h4></a></li>
                <li role="presentation"><a href="registration.php"><h4>Registration</h4></a></li>
                <li role="presentation"><a href="login.php"><h4>Login</h4></a></li>
                <li role="presentation"><a href="contact.php"><h4>Contact</h4></a></li>
            </ul>
        </div>
    </div>
    <br />
    <div class="col-md-12">
        <div class="item active">
            <img src="images/222.jpeg" class="img-responsive" width="1100" alt="">
        </div>
    </div>
</header>

<div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
        <div class="lr">
            <div class="rl">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>Login</h3>
                <p>[Access of Members]</p>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <?php session_start() ?>

                            <section class="container">
                                <section class="row">
                                    <section class="col-md-8">

                                        <br><br><br><br><br><br>
                                        <form class="form-horizontal" action="checkuser.php" method="post">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Sign in</button>
                                                </div>
                                            </div>
                                        </form>

                                        <?php if(isset($_SESSION['msgemail'])) echo $_SESSION['msgemail']; ?><br>
                                        <?php if(isset($_SESSION['msgpass'])) echo $_SESSION['msgpass']; ?>
                                        <?php session_unset() ?>
                                        <?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; ?><br>

                                    </section>
                                    <div class="col-sm-offset-2 col-sm-4">

                                        <div class="list-group">  <a href="registration.php" class="list-group-item active">New User ? Sign Up Here </a>
                                        </div></div></div></div></div></div></div></div></div>

<?php
include_once("footer.php");
?>


</body>
</html>
