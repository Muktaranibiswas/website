<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>::Welcome::</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>


<body>

 <section id="menu-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                      <ul class="nav nav-pills">
  							<li><a href="index.php">Home</a></li>
  							<li><a href="profile.php">Profile</a></li>
  							<li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="about.php">About Me</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li class="active"><a href="registration.php">Registration</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="contact.php">Contact</a></li>
						</ul>
                        
                        
                    </div>
                    
                    
                    <div class="col-md-4">
                        <form class="navbar-form navbar-left" role="search">
  						<div class="form-group">
    					<input type="text" class="form-control" placeholder="Search">
  						</div>
                        <button type="button" class="btn btn-default btn-md">
  						<span class="glyphicon glyphicon-search"></span>
						</button>
  						
						</form>
                        
                    
                        
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Section -->
   
        <!-- Start Contact Section -->
       <!-- <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true"> -->
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
            <div class="section-title text-center">
                <br><br>
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
                        <button type="submit" class="btn btn-warning">Sign in</button>
                    </div>
                </div>
            </form>

            <?php if(isset($_SESSION['msgemail'])) echo $_SESSION['msgemail']; ?><br>
            <?php if(isset($_SESSION['msgpass'])) echo $_SESSION['msgpass']; ?>
            <?php session_unset() ?>
            <?php if(isset($_SESSION['msg'])) echo $_SESSION['msg']; ?><br>

        </section>
   <div class="col-sm-offset-2 col-sm-4">
       <div class="section-title text-center">
    <div class="list-group text-center">  <a href="registration.php" class="list-group-item active">New User ? Sign Up Here </a>
            </div></div></div></div></div></div></div></div></div>


                <!-- End Feature Section -->

                <div class="copyright text-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <div>Design & Developed by <a href="https://www.linkedin.com/pub/abu-kowsar/17/a84/a26?trk=shareFB" target="_blank">Mukta Rani Biswas</a></div>
                            </div>
                            <div class="text-right">
                                <div class="col-md-5 col-md-offset-1">
                                    <nav>
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li><a href="index.php">1</a></li>
                                            <li><a href="profile.php">2</a></li>
                                            <li><a href="portfolio.php">3</a></li>
                                            <li><a href="about.php">4</a></li>
                                            <li><a href="gallery.php">5</a></li>
                                            <li><a href="team.php">6</a></li>
                                            <li><a href="registration.php">7</a></li>
                                            <li><a href="login.php">8</a></li>
                                            <li><a href="contact.php.php">9</a></li>

                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

    </body>
</html>
