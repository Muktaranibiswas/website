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
            <img src="images/123.jpeg" class="img-responsive" width="1100" height="150" alt="">
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
                        <h3>Registration</h3>
                        <p>[Registration with us]</p>
                    </div>
                </div>
                <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row" style="padding-top: 80px;">
                                <div class="col-md-12">


<?php

/*
 NEW.PHP
 Allows user to create a new entry in the database
*/

// creates the new record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
function renderForm($firstName, $lastName, $email, $password, $date, $gender, $hobby, $favFood, $comment, $created, $error)

//function renderForm($Email, $mobile, $error)
{
    ?>
                                    <!DOCdate HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
                                    <html>
                                    <head>
                                        <title>New Record</title>
                                    </head>
                                    <body>
                                    <?php
    // if there are any errors, display them
    if ($error != '')
    {
        echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
                                }
                                ?>

                                <table class="table">

                                    <form action="" method="post">

                                        <div>
                                            <tr>
                                                <td width="39%" align='left'><strong>First Name: *</strong></td>
                                                <td width="61%"><input type="text" name="firstName" value="<?php echo $firstName; ?>" /><br/></td></tr>

                                            <tr>  <td align='left'><strong>Last Name: *</strong> </td>
                                                <td><input type="text" name="lastName" value="<?php echo $lastName; ?>" /><br/></td></tr>
                                            <tr>  <td align='left'><strong>Your Email: *</strong> </td>
                                                <td><input type="email" name="email" value="<?php echo $email; ?>" /><br/></td></tr>


                                            <tr> <td align='left'><strong>New password: *</strong></td>
                                                <td><input type="password" name="password" value="<?php echo $password; ?>" /><br/></td></tr>




                                            <tr> <td align='left'><strong>
                                                <label>Birthday:</label>*</strong> </td><td>

                                                <?php
				$y=date("y");
				$m=date("m");
				$d=date("i");
			?>



                                                <select name="year">
                                                    <option value="2000"<?php if($y==2000) echo "Selected='selected'"; ?>>2000</option>
                                                    <option value="2001"<?php if($y==2001) echo "Selected='selected'"; ?>>2001</option>
                                                    <option value="2002"<?php if($y==2002) echo "Selected='selected'"; ?>>2002</option>
                                                    <option value="2003"<?php if($y==2003) echo "Selected='selected'"; ?>>2003</option>
                                                    <option value="2004"<?php if($y==2004) echo "Selected='selected'"; ?>>2004</option>
                                                    <option value="2005"<?php if($y==2005) echo "Selected='selected'"; ?>>2005</option>

                                                </select>

                                                <select name="month">
                                                    <option value="01"<?php if($m==01) echo "Selected='selected'"; ?>>Jan</option>
                                                    <option value="02"<?php if($m==02) echo "Selected='selected'"; ?>>Feb</option>
                                                    <option value="03"<?php if($m==03) echo "Selected='selected'"; ?>>Mar</option>
                                                    <option value="04"<?php if($m==04) echo "Selected='selected'"; ?>>Apr</option>
                                                    <option value="05"<?php if($m==05) echo "Selected='selected'"; ?>>May</option>
                                                    <option value="06"<?php if($m==06) echo "Selected='selected'"; ?>>Jun</option>
                                                    <option value="07"<?php if($m==07) echo "Selected='selected'"; ?>>Jul</option>
                                                    <option value="08"<?php if($m==08) echo "Selected='selected'"; ?>>Aug</option>
                                                    <option value="09"<?php if($m==09) echo "Selected='selected'"; ?>>Sep</option>
                                                    <option value="10"<?php if($m==10) echo "Selected='selected'"; ?>>Oct</option>
                                                    <option value="11"<?php if($m==11) echo "Selected='selected'"; ?>>Nov</option>
                                                    <option value="12"<?php if($m==12) echo "Selected='selected'"; ?>>Dec</option>
                                                </select>

                                                <select name="day">
                                                    <?php
    for ($i = 1; $i <=31; $i++) {
        echo "<option value=\"$i\">$i</option>";
                                                    }
                                                    ?>
                                                </select>


                                                </p></td></tr>
                                            <tr>

                                                <td align='left'><strong>I am: *</strong></td>
                                                <td colspan="2">
                                                    <input type="radio" name="gender" value="Male" id="male" />Male
                                                    <input type="radio" name="gender" value="Female" id="Female" />Female


                                                </td>  </tr>


                                            <tr>
                                                <td align='left'><strong>Hobby: *</strong> </td><td>


                                                <input type="checkbox" name="hobby[]" value="Playing"><label>Playing</label><br/>
                                                <input type="checkbox" name="hobby[]" value="Coding"><label>Coding.</label><br/>
                                                <input type="checkbox" name="hobby[]" value="Reading"><label>Reading</label><br/>
                                                <input type="checkbox" name="hobby[]" value="Hacking"><label>Hacking</label><br/>
                                                <input type="checkbox" name="hobby[]" value="Sleeping"><label>Sleeping</label><br/><br/></td></tr>

                                            <tr><td align='left'><strong>Favourite City: *</strong> </td><td>
                                                <select multiple="multiple" name="favFood[]">
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Comilla">Comilla</option>
                                                    <option value="Pabna">Pabna</option>
                                                    <option value="Nator">Nator</option>
                                                    <option value="Rajshahi">Rajshahi</option>
                                                    <option value="Barishal">Barishal</option>



                                                </select>


                                            </td></tr>
                                            <tr> <td align='left'><strong>Additional comment: *</strong> </td><td> <textarea name="comment" value="<?php echo $comment; ?>"></textarea> <br/></td></tr>


                                            <input type="hidden" name="created" value="<?php echo date("Y-m-d H:i:s"); ?>" />


                                            <tr> <td height="68" colspan="2" align="center">
                                                <p>* required Fields</p>
                                                <input type="submit" name="submit" value="Submit">
                                        </div>

                                    </form>

                                    </tr>
                                </table>

<?php
}




// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit']))
{
    // get form data, making sure it is valid
    $firstName = (htmlspecialchars($_POST['firstName']));
    $lastName = (htmlspecialchars($_POST['lastName']));
	  $email = (htmlspecialchars($_POST['email']));
    $password = (htmlspecialchars($_POST['password']));
	  $date = (htmlspecialchars($_POST['year'].":".$_POST['month'].":".$_POST['day']));
    $gender = (htmlspecialchars($_POST['gender']));


	if(isset($_POST['hobby'])){
		$hobby=join(",",$_POST['hobby']);
		//echo $hobby;
	}



	if(isset($_POST['favFood'])){
		$favFood=join(",",$_POST['favFood']);
		//echo $hobby;
	}

    $comment = (htmlspecialchars($_POST['comment']));
	$created = (htmlspecialchars($_POST['created']));




    // check to make sure both fields are entered
    if ($firstName == '' || $lastName == '' || $email == '' || $password == '' || $date == '' || $gender == '' || $hobby == '' || $favFood == ''|| $comment == '' || $created == '')
    {
        // generate error message
        $error = 'ERROR: Please fill in all required fields!';

        // if either field is blank, display the form again
        renderForm($firstName, $lastName, $email, $password, $date, $gender, $hobby, $favFood, $comment, $created, $error);
    }
    else
    {
        // save the data to the database
        mysql_query("INSERT facebook SET firstName='$firstName', lastName='$lastName', email='$email', password='$password', date='$date', gender='$gender', hobby='$hobby', favFood='$favFood', comment='$comment', created='$created'")
        or die(mysql_error());

        // once saved, redirect back to the view page
        header("Location: view.php");
    }
}
else
    // if the form hasn't been submitted, display the form
{
    renderForm('','','','','','','','','','','');
}
?>
<hr>
<div class="btn-group btn-group-lg" class="caret"><a href="login.php">Have an Account? </a></div>
</div></div></div></div></div></div></div>

<footer>
    <div class="well well-lg">
        <div class="row">

            <div class="col-md-3 col-md-offset-2">
<br><br><br>
                <b>  copyright@ mukta rani biswas</b>
            </div>
            <div class="col-md-4">
                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="home.html">1</a></li>
                        <li><a href="about.php">2</a></li>
                        <li><a href="portfolio.html">3</a></li>
                        <li><a href="gallery.html">4</a></li>
                        <li><a href="registration.php">5</a></li>
                        <li><a href="login.php">4</a></li>
                        <li><a href="contact.php">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3">
                <img a href="https://login.yahoo.com" src="images/6.png"></a>
                <img src="images/7.jpeg">
                <img src="images/8.png">
                <img src="images/9.png">
                <img src="images/99.png">
                <img src="images/999.png">
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</footer>
</body>
</html>