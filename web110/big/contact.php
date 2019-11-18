<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ivan Dusseau: Web Developer Example and Resources</title>
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" href="css/big.css" />
        <link rel="stylesheet" href="css/nav.css" />
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="js/script.js"></script>
    </head>
<body>
    <header>
        <h1><a href="index.html">Ivan Dusseau's Web Developer Examples and Resources</a></h1>
            <nav id="cssmenu">
                  <ul>
                     <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
                     <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
                     <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                     <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
                     <li><a href="forms.html"><i class="fa fa-fw fa-icon-plus"></i> Forms</a></li>
                     <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Light Box II</a></li>
                     <li><a href="#"><i class="fa fa-fw fa-bars"></i> Google Tools</a>
                        <ul>
                           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Me</a></li>
                </ul>
            </nav>
    </header>
     
   <main class="contac">
       <h2 class="subheader">Contact Ivan</h2>
       
       	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ivan.dusseau@gmail.com";  //place your/your client's email address here
        $toName = "Ivan Dusseau"; //place your client's name here
        $website = "WEB 110";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements
	?>

     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Contact Ivan</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>

 </body>
</html>