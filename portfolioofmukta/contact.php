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

                    <div class="item">
                        <img src="images/111.jpeg" class="img-responsive" width="1100" alt="">
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

<br><br>
<div class="row">
    <div class="col-md-4 col-md-offset-2">

        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">

                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group login-input">
                        <span class="input-group-addon"><i class=" glyphicon glyphicon-user"></i></span>
                        <input class="form-control form-inline" placeholder="Name" type="text" name="name">
                    </div>
                    <br>

                    <label>Email </label>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">@</div>

                            <input class="form-control" type="email" placeholder="Enter email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <div class="input-group login-input">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <!--<input class="form-control form-inline" placeholder="Email" type="textarea" name="email">-->
                            <textarea class="form-control form-inline" placeholder="Enter your message here" name="message"></textarea>
                        </div>

                        <br>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                         </div>
                    </div>
                </div>
        </form>

</div>
    <div class="col-md-3 col-md-offset-1">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Address1
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Address2
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit,Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Address3
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Anim pariatur cliche t squid single-origin coffee nulla assumenda shoreditch etuntAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                    </div>
                </div>
            </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Address4
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche t squid single-origin coffee nulla assumenda shoreditch etuntAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Address5
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche t squid single-origin coffee nulla assumenda shoreditch etuntAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                        </div>
                    </div>
                </div>

        </div>


 </div>

</div>

</div>
</div>
<?php
include_once("footer.php");
?>
</body>
</html>