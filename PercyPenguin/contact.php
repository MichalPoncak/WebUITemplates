<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <meta charset="utf-8" />

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Legendary Percy</title>
    
    <meta name="description" content="" />
    
     <!-- Mobile viewport optimized: j.mp/bplateviewport -->
 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="css/styleContactForm.css" rel="stylesheet" />
    
    <!-- All JavaScript at the bottom, except for Modernizr and Respond.
    Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries -->
    <script src="js/modernizr-1.7.min.js"></script>
    <script src="js/respond.min.js"></script>

</head>

<body>

<div id="wrapper">

	<header id="header" role="banner">
    	<figure>
        	<a href="index.html"><img class="headerimg" src="css/images/logo-bg.png"></img></a>
            <a href="#"><img class="contactMePenguin" src="css/images/contactMeEmpty.png"></img></a>
        </figure>
    </header>

<div id="main" class="clearfix">
                
	<div id="contentMain" role="main">
    
    <div id="content">
       <h1> Contact me </h1>
        
	<?php
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
       $from = 'From: My Contact Form';
       $to = 'michael.poncak@hotmail.com';
       $subject = 'New objective!';
	   
       $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	   
	   if ($_POST['submit']) {
		   if (($name == "") || ($email == "") || ($message == "")) {echo 'Please fill in all the required fields!!';}
		   else
           if (mail ($to, $subject, $body, $from)) {
           echo 'Message Sent Successfully!';
           } else {
           echo 'Ah! Try again, please?';
           }
       }
    ?>    
    
        <form method="post" action="contact.php">
       <label class="iconic user">Your Name:</label>
       <input type="text" name="name" required="required">
       <label class="iconic mail-alt">Your Email:</label>
       <input name="email" type="email" required="required">
       <label class="iconic comment">Your Message:</label>
       <textarea name="message" required="required"></textarea>
       <input id="submit" name="submit" type="submit" value=" ★  Send the mail !">
		</form>	
    </div>     
    
    </div>

</div>

<footer id="footer">
	<center>
		<p>
    		Design by <a href="contact.html" title="Design by Michal Poncak">Michal Poncak</a>
    	</p>
    </center>
</footer>

</div>

</body>
</html>