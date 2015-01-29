<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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
        <script src="js/jqBootstrapValidation.js"></script>
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
                            <li><a href="registration.php">Registration</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
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
             <h3>Contact</h3>
             <p><b>[Contact With Us]</b></p>
         </div>
     </div>



     <br><br>
 <div class="row">
     <div class="col-md-7 col-md-offset-1">
<!--
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
          <!--               <textarea class="form-control form-inline" placeholder="Enter your message here" name="message"></textarea>
                     </div>

                     <br>
                     <div class="form-group">
                         <button type="submit" name="submit" class="btn btn-primary " required="required">Submit Message</button>
                     </div>
                 </div>
             </div>
         </form>

     </div>-->


    <!-- <div class="row" style="padding-top: 80px;">
         <div class="col-md-12">-->
             <form name="sentMessage" id="contactForm" novalidate>
                 <div class="row">
                     <div class="col-md-6">
                         <div class="input-group login-input">
                             <span class="input-group-addon"><i class=" glyphicon glyphicon-user"></i></span>
                             <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name."><br>
                             <p class="help-block text-danger"></p>
                         </div>
                         <div class="form-group">
                             <div class="input-group">
                                 <div class="input-group-addon">@</div>
                             <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                             <p class="help-block text-danger"></p>
                         </div>
                             <div class="input-group login-input">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                             <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                             <p class="help-block text-danger"></p>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="input-group login-input">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                             <textarea =class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                             <p class="help-block text-danger"></p>
                         </div>
                     </div>

                     <div class="clearfix"></div>
                     <div class="col-lg-12 text-left">
                         <div id="success"></div>
                         <br>
                         <button type="submit" class="btn btn-primary">Send Message</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>

     <div class="col-md-4 ">

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

                 </div>
         </div>
         </div>

     </div>

 </div>

<br><br><br><br>
 <div class="row">
     <div class="col-md-3 col-md-offset-1">
         <br><br>
             <h4>Contact info</h4>

             <ul>
                 <li><strong>E-mail :</strong> muktaquate@yahoo.com</li>
                 <li><strong>Phone :</strong> +8801-917960958</li>
                 <li><strong>Mobile :</strong> +8801-45565378</li>
                 <li><strong>Skype :</strong> muktabiswas90</li>
             </ul>

     </div>





     <div class="col-md-3">
         <br><br>
         <div class="footer-social text-center">
             <ul>

                 <li><a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a></li>
                 <li><a href="https://accounts.google.com/ServiceLogin"><i class="fa fa-google-plus"></i></a></li>
             </ul>
         </div>
     </div>
<br>
     <div class="col-md-2 col-md-offset-1">
         <br><br>
         <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="1140" height="300" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>

     </div>
 </div>

</div>


</div>

<br><br><br><br>

 <!-- End Feature Section -->
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
