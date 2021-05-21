<!doctype html>
<html>
 
<head>

    <meta name="keywords" content="Contact | Stapo Contact" /> 
	<meta name="description" content="Tvorba dreva podľa Vašich predstáv, lacno a efektívne. Sme spoločnosť ktorá poskytuje služby v oblasti drevo dizajnu po celom svete. Naša firma na Slovensku sa momentálne nachádza v Prešove." /> 
    <meta name="author" content="Stanislav Poncak" /> 
    <meta name="robots" content="selection"> 
    <meta name="robots" content="index,follow" /> 
    <meta name="distribution" content="global"> 
    <meta name="rating" content="safe for kids">
  	<meta name="doc-type" content="public"> 
    <meta name="country" content="Slovakia"> 
    <meta name="classification" content="internet"> 
    <meta name="revisit-after" content="7 days"> 
    <meta name="abstract" content="Drevo dizajn Prešov Slovakia"> 
    <meta name="copyright" content="Stapon Drevo Dizajn"> 
    <meta name="contactName" content="Meta tags"> 
    <meta name="contactOrganization" content="Stapon"> 
    <meta name="contactStreetAddress" content="Kendice 371"> 
    <meta name="contactCity" content="Presov"> 
    <meta name="contactCountry" content="Slovakia">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="sk" />
    
    <link href="styleContactForm.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript" src="code3/js/jquery-1.2.6.min.js"></script>
    
    <script type="text/javascript">
	
	// language selection logic
	
	function checkLang(language,containsValue)
	{
		// 'yes' is for stating whether the variable language contains the value or not 
		if(containsValue == 'no')
		{
			language = getCookie('lang');
		}
		else if(containsValue == 'yes')
		{
			// do nothing
		}
		
		if(language == 'en')
		{
			loadModeEN();
		}
		else if(language == 'sk')
		{
			loadModeSK();
		}
		else
		{
			setCookie('lang','en',10);
			loadModeEN();
		}
	}
 
	function initLang(lang)
	{
		if(lang == 'sk')
		{
			setCookie('lang','sk',10);		
		}
		else if(lang == 'en')
		{
			setCookie('lang','en',10);
		}
		
		var language = getCookie('lang');
		
		checkLang(language,'yes');
	}
	
	function setCookie(cookieName,cookieValue,nDays) {
		
		var today = new Date();
		var expire = new Date();
		if (nDays==null || nDays==0) nDays=1;
		expire.setTime(today.getTime() + 3600000*24*nDays);
		document.cookie = cookieName+"="+escape(cookieValue) + ";expires="+expire.toGMTString();
	}
	
	function getCookie(c_name)
	{
		var c_value = document.cookie;
		var c_start = c_value.indexOf(" " + c_name + "=");
		if (c_start == -1)
		  {
		  c_start = c_value.indexOf(c_name + "=");
		  }
		if (c_start == -1)
		  {
		  c_value = null;
		  }
		else
		  {
		  c_start = c_value.indexOf("=", c_start) + 1;
		  var c_end = c_value.indexOf(";", c_start);
		  if (c_end == -1)
		  {
		c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
		}
		return c_value;
	}
	
	function loadModeEN()
	{
		$("#siteinfo").text('Contact number 087873955');
		$("#tr1").css('visibility', 'visible');
		$("#tr1").css('display','block');
		$("#tr2").css('visibility', 'hidden');
		$("#tr2").css('display','none');
		$("#tr3").text('Home');
		$("#tr4").text('Gallery');
		$("#tr5").text('Contact');
		
		$("#tr6").text('Your name: ');
		$("#tr7").text('Your email: ');
		$("#tr8").text('Your phone number: ');
		$("#tr9").text('Your message: ');
		$("#submit").val(' *  Send the mail !');
		
		$("#hh1").text('Follow Us !');
	}
	
	function loadModeSK()
	{
		$("#siteinfo").text('Kontaktné číslo 087873955');
		$("#tr1").css('visibility', 'hidden');
		$("#tr1").css('display','none');
		$("#tr2").css('visibility', 'visible');
		$("#tr2").css('display','block');
		$("#tr3").text('Domov');
		$("#tr4").text('Galéria');
		$("#tr5").text('Kontakt');
		
		$("#tr6").text('Vaše meno: ');
		$("#tr7").text('Váš e-mail: ');
		$("#tr8").text('Vaše telefónne číslo:');
		$("#tr9").text('Vaša správa:');
		$("#submit").val(' *  Pošli email !');
		
		$("#hh1").text('Nasleduj Nas !');
	}
	
	</script>
    
</head>

<body onLoad="checkLang('x','no');" style="background: url(images/bodyBgTop.jpg); background-position: top; background-repeat: repeat-x;">

<div id="bodywrap">
	<section id="pagetop">
		<p id="siteinfo">Contact number 087873955</p>
        <img src="images/british-flag.jpg" onClick="initLang('en');" style="width:35px; height:23px; margin-left:250px; margin-top:3px;" />
        <img src="images/flag_sk.gif" onClick="initLang('sk');" style="width:35px; height:23px; margin-left:5px;" />
        <p class="email"><a href="contact.php" title="Design by Michael Poncak">Stanislav.Poncak@hotmail.com</a></p>
	</section>

    <header id="pageheader">
        <section>
        	<img src="images/CNC-Logo.png" />
            <article id="tr1">Beauty for pleasure creates a pleasant home.</article>
            <article id="tr2">Krása pre radosť vytvára príjemný domov.</article>
        </section>
    
        <div id="search">
            <nav id="sitenav">
                <ul>
                    <li><a id="tr3" href="index.html">Home</a></li>
                    <li><a id="tr4" href="gallery.php">Gallery</a></li>
                    <li class="current"><a id="tr5" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
        
    </header>

<div id="shadow">
<div id="contents">

	<section id="mySliderBgWhite">
    	<section id="ContactContent">
                
                    <form id="contactForm" method="post" action="contact.php">
                        <label id="tr6">Your name: </label>
                        <input type="text" name="name" required>
                        <label id="tr7">Your email: </label>
                        <input name="email" type="email" required>
                        <label id="tr8">Your phone number: </label>
                        <input name="phone" type="text" size="30" maxlength="40" >
                        <label id="tr9">Your message: </label>
                        <textarea name="message" required></textarea>
                        <input id="submit" name="submit" type="submit" value=" *  Send the mail !">
                    </form>
                    
                    <?php
                       $name = $_POST['name'];
                       $email = $_POST['email'];
					   $phone = $_POST['phone'];
                       $message = $_POST['message'];
                       $from = 'From: My Contact Form';
                       $to = 'Michal.Poncak@live.com,Zkaures@live.com';
                       $subject = 'New Objective!';
                       
                       $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
                       
                       if ($_POST['submit']) {
                           if (($name == "") || ($email == "") || ($phone == "") || ($message == "")) {echo '<div id="errorMessage">Please fill in all the required fields!</div>';}
                           else
                           if (mail ($to, $subject, $body, $from)) {
                           echo '<div id="errorMessage">Message Sent Successfully!</div>';
                           } else {
                           echo '<div id="errorMessage">Ah! Try again, please?</div>';
                           }
                       }
                    ?> 
                    
    			</section>
                <section id="info">
                	<center>
                    
                        <!-- Social Media Buttons - CSS3 --> 
                        <ul class="social" id="css3"> 
                            <h2 id="hh1">Follow Us !</h2> 
                            <li class="facebook"> 
                                <a href="http://www.facebook.com/" target="_new"><strong>Facebook</strong></a> 
                            </li> 
                            <li class="flickr"> 
                                <a href="http://www.youtube.com/" target="_new"><strong>YouTube</strong></a> 
                            </li> 
                            <li class="linkedin"> 
                                <a href="http://www.linkedin.com/pub/martin-palmer/3a/a60/872" target="_new"><strong>LinkedIn</strong></a> 
                            </li>
                            <li class="rss"> 
                                <a href="http://google.com" target="_new"><strong>Google +</strong></a> 
                            </li> 
                            <li class="twitter"> 
                                <a href="http://twitter.com/" target="_new"><strong>Twitter</strong></a> 
                            </li> 
                        </ul>
                        
                    </center>
                </section>
                <section id="info2">
                
                    <table id="info2">
                    	<colgroup>
                        	<col id="abbrev" />
                        	<col id="detail" />
                    	</colgroup>
                        <tr>
                        	<td align="center" class="highlight">A</td>
                            <td>44 | Riverwalk | Collooney</td>
                        </tr>
                        <tr>
                            <td align="center" class="highlight">M</td>
                            <td>087873955</td>
                        </tr>
                        <tr>                
                            <td align="center" class="highlight">E</td>
                            <td><a href="mailto:zkaures@live.com">Stanislav.Poncak@hotmail.com</a></td>
                        </tr>
                        <tr>                
                            <td align="center" class="highlight">F</td>
                            <td><a href="http://www.facebook.com/intandem" onClick="window.open(this.href,'_blank');return false;">www.facebook.com/Stanislav</a></td>
                        </tr>
                    </table>                               
  
                </section>
	</section>

</div>

</div>

<footer id="footer">
	<center>
		<p>Copyright &copy; 2012 <a href="contact.php">Stapo-Rip-Company.com</a>
    	<span class="sep">|</span>
    	Design by <a href="http://zkaures.comeze.com/" title="Design by Zkaures">Zkaures</a>
    	</p>
    </center>
</footer>

</div>

</body>
</html>