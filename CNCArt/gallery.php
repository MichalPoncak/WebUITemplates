<!doctype html>
<html>
 
<head>

    <meta name="keywords" content="Gallery | Stapo Gallery" /> 
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
    
    <link href="style.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript" src="code3/js/jquery-1.2.6.min.js"></script>

	<script type="text/javascript">
		function show1() {
				if (document.getElementById('t1').style.display = 'none') {
					hide();
					document.getElementById('t1').style.display = 'inline';
				}
			}
		function show2() {
				if (document.getElementById('t2').style.display = 'none') {
					hide();
					document.getElementById('t2').style.display = 'inline';
				}
			}
		function show3() {
				if (document.getElementById('t3').style.display = 'none') {
					hide();
					document.getElementById('t3').style.display = 'inline';
				}
			}
		function show4() {
				if (document.getElementById('t4').style.display = 'none') {
					hide();
					document.getElementById('t4').style.display = 'inline';
				}
			}
		function hide() {
					document.getElementById('t1').style.display = 'none';
					document.getElementById('t2').style.display = 'none';
					document.getElementById('t3').style.display = 'none';
					document.getElementById('t4').style.display = 'none';
			}
			
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
			
			$("#tr6").text('Images');
			$("#tr7").text('Frames');
			$("#tr8").text('Ornaments');
			$("#tr9").text('Different');
			
			$("#tr20").text('Images');
			$("#tr21").text('Frames');
			$("#tr22").text('Ornaments');
			$("#tr23").text('Different');
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
			
			$("#tr6").text('Obrazy');
			$("#tr7").text('Rámiky');
			$("#tr8").text('Ornamenty');
			$("#tr9").text('Rôzne');
			
			$("#tr20").text('Obrazy');
			$("#tr21").text('Rámiky');
			$("#tr22").text('Ornamenty');
			$("#tr23").text('Rôzne');
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
                    <li class="current"><a id="tr4" href="styles.html">Gallery</a></li>
                    <li><a id="tr5" href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

<div id="shadow">
<div id="contents">

<section id="mySliderBgWhite">
    <nav id="Gallery">
        <ul>
        <!--php
		//path to directory to scan
		$directory = "images/Generated/";
		 
		//get all files in specified directory
		$files = glob($directory . "*");
		 
		//print each file name
		foreach($files as $file)
		{
		 //check to see if the file is a folder/directory
		 if(is_dir($file))
		 {
			$folder_name = basename($file);
			echo '<a id="a"';$folder_name;
		 }
		}
		-->
            <a id="a1" href="#" onClick="show1()"><li><div><img alt="clocks" src="inviting-home/pic/obrazy-icon.jpg" /><br /><label id="tr6">Images</label></div></li></a>
            <a id="a2" href="#" onClick="show2()"><li><div><img alt="decorative boxes" src="inviting-home/pic/ramiky-icon.jpg" /><br /><label id="tr7">Frames</label></div></li></a>
            <a id="a3" href="#" onClick="show3()"><li><div><img alt="home lighting" src="inviting-home/pic/ornamenty-icon.jpg" /><br /><label id="tr8">Ornaments</label></div></li></a>
            <a id="a4" href="#" onClick="show4()"><li><div><img alt="home furnishing" src="inviting-home/pic/newels.jpg" /><br /><label id="tr9">Different</label></div></li></a>
        </ul>
    </nav>
</section>

<section id="t1" class="lay">

	<?php
    /* function:  generates thumbnail */
    function make_thumb($src,$dest,$desired_width) {
        /* read the source image */
        $source_image = imagecreatefromjpeg($src);
        $width = imagesx($source_image);
        $height = imagesy($source_image);
        /* find the "desired height" of this thumbnail, relative to the desired width  */
        $desired_height = floor($height*($desired_width/$width));
        /* create a new, "virtual" image */
        $virtual_image = imagecreatetruecolor($desired_width,$desired_height);
        /* copy source image at a resized size */
        imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
        /* create the physical thumbnail image to its destination */
        imagejpeg($virtual_image,$dest);
    }
    
    /* function:  returns files from dir */
    function get_files($images_dir,$exts = array('jpg')) {
        $files = array();
        if($handle = opendir($images_dir)) {
            while(false !== ($file = readdir($handle))) {
                $extension = strtolower(get_file_extension($file));
                if($extension && in_array($extension,$exts)) {
                    $files[] = $file;
                }
            }
            closedir($handle);
        }
        return $files;
    }
    
    /* function:  returns a file's extension */
    function get_file_extension($file_name) {
        return substr(strrchr($file_name,'.'),1);
    }
    ?>

	<div id="gallery">
    	<article id="tr20">Images</article>
        
        <div id="scrollBox">
        
        	<?php

            /** settings **/
            $images_dir = 'images/cnc/Obrazy/';
            $thumbs_dir = 'images/cnc/Obrazy/';
            $thumbs_width = 200;
            $images_per_row = 3;
            
            /** generate photo gallery **/
            $image_files = get_files($images_dir);
            if(count($image_files)) {
                $index = 0;
                foreach($image_files as $index=>$file) {
                    $index++;
                    $thumbnail_image = $thumbs_dir.$file;
					$file_name = basename($thumbnail_image, ".jpg");
                    if(!file_exists($thumbnail_image)) {
                        $extension = get_file_extension($thumbnail_image);
                        if($extension) {
                            make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
                        }
                    }
                    echo '<a href="',$images_dir.$file,'" class="thumb" rel="gallery"><img src="',$thumbnail_image,'" class="thumbStyle" /><span><img src="',$thumbnail_image,'" width="600px" height="600px" /><br />',$file_name,'</span></a>';
                    if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
                }
                echo '<div class="clear"></div>';
            }
            else {
                echo '<p>V tejto galérii nie sú žiadne fotografie.</p>';
            }
            
            ?>
             
        </div>
        
	</div><!-- GALLERY CLOSED -->

</section>

<section id="t2" class="lay">

		<div id="gallery">
    	<article id="tr21">Frames</article>
        
        <div id="scrollBox">
        
        	<?php

            /** settings **/
            $images_dir = 'images/cnc/Ramiky/';
            $thumbs_dir = 'images/cnc/Ramiky/';
            $thumbs_width = 200;
            $images_per_row = 3;
            
            /** generate photo gallery **/
            $image_files = get_files($images_dir);
            if(count($image_files)) {
                $index = 0;
                foreach($image_files as $index=>$file) {
                    $index++;
                    $thumbnail_image = $thumbs_dir.$file;
					$file_name = basename($thumbnail_image, ".jpg");
                    if(!file_exists($thumbnail_image)) {
                        $extension = get_file_extension($thumbnail_image);
                        if($extension) {
                            make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
                        }
                    }
                    echo '<a href="',$images_dir.$file,'" class="thumb" rel="gallery"><img src="',$thumbnail_image,'" class="thumbStyle" /><span><img src="',$thumbnail_image,'" width="600px" height="600px" /><br />',$file_name,'</span></a>';
                    if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
                }
                echo '<div class="clear"></div>';
            }
            else {
                echo '<p>There are no images in this gallery.</p>';
            }
            
            ?>
            
        </div>
        
	</div><!-- GALLERY CLOSED -->
    
</section>

<section id="t3" class="lay">

		<div id="gallery">
    	<article id="tr22">Ornaments</article>
        
        <div id="scrollBox">
            
            <?php

            /** settings **/
            $images_dir = 'images/cnc/Ornamenty/';
            $thumbs_dir = 'images/cnc/Ornamenty/';
            $thumbs_width = 200;
            $images_per_row = 3;
            
            /** generate photo gallery **/
            $image_files = get_files($images_dir);
            if(count($image_files)) {
                $index = 0;
                foreach($image_files as $index=>$file) {
                    $index++;
                    $thumbnail_image = $thumbs_dir.$file;
					$file_name = basename($thumbnail_image, ".jpg");
                    if(!file_exists($thumbnail_image)) {
                        $extension = get_file_extension($thumbnail_image);
                        if($extension) {
                            make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
                        }
                    }
                    echo '<a href="',$images_dir.$file,'" class="thumb" rel="gallery"><img src="',$thumbnail_image,'" class="thumbStyle" /><span><img src="',$thumbnail_image,'" width="600px" height="600px" /><br />',$file_name,'</span></a>';
                    if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
                }
                echo '<div class="clear"></div>';
            }
            else {
                echo '<p>There are no images in this gallery.</p>';
            }
            
            ?>
            
        </div>
        
	</div><!-- GALLERY CLOSED -->
    
</section>

<section id="t4" class="lay">

		<div id="gallery">
    	<article id="tr23">Different</article>
        
        <div id="scrollBox">
            
            <?php

            /** settings **/
            $images_dir = 'images/cnc/Rozne/';
            $thumbs_dir = 'images/cnc/Rozne/';
            $thumbs_width = 200;
            $images_per_row = 3;
            
            /** generate photo gallery **/
            $image_files = get_files($images_dir);
            if(count($image_files)) {
                $index = 0;
                foreach($image_files as $index=>$file) {
                    $index++;
                    $thumbnail_image = $thumbs_dir.$file;
					$file_name = basename($thumbnail_image, ".jpg");
                    if(!file_exists($thumbnail_image)) {
                        $extension = get_file_extension($thumbnail_image);
                        if($extension) {
                            make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
                        }
                    }
                    echo '<a href="',$images_dir.$file,'" class="thumb" rel="gallery"><img src="',$thumbnail_image,'" class="thumbStyle" /><span><img src="',$thumbnail_image,'" width="600px" height="600px" /><br />',$file_name,'</span></a>';
                    if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
                }
                echo '<div class="clear"></div>';
            }
            else {
                echo '<p>There are no images in this gallery.</p>';
            }
            
            ?>
            
        </div>
        
	</div><!-- GALLERY CLOSED -->

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