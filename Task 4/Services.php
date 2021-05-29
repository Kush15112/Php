<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Services</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<link href="style1.css" rel="stylesheet" type="text/css" media="screen" />
<script src="https://kit.fontawesome.com/949d21b1b4.js" crossorigin="anonymous"></script>

</head>
<body>
<?php

include './Parts/Navbar.php';
include './Parts/Logo.php';

?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/ser.png" width="930" height="490"  alt="" /></div>
		<div id="content">
			<div class="post">
                <h2 class="title"><a href="Services.php">Our Services</a></h2>
                <div class="web_dev">
                    <h3><img alt="hi" src="images/wd4.png" height="58px" width="58px" alt="Web Development"> Web Development <i class="fas fa-laptop-code">  :</i> </h3>
                    <p> Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network).</p>
                </div>
                <div class="web_des">
                    <h3><img alt="hi" src="images/wd1.png" height="58px" width="58px" alt="Web Design">Web Design   <i class="fas fa-fill-drip"> :</i></h3>
                    <p>Maxgen Technologies Pvt. Ltd. as Best Web design and Development Company understands the website requirements from clients and aims to provide peace in customers.  </p>
                </div>
                <div class="e_com">
                    <h3><img alt="hi" src="images/ec1.jpg" height="58px" width="58px" alt="E-Commerce">E-commerce <i class="fas fa-shopping-cart"> :</i></h3>
                    <p>Electronic commerce (ecommerce) is a type of business model, or segment of a larger business model, that enables a firm or individual to conduct business over an electronic network, typically the internet. </p>
                </div>
                <div class="soft_dev">
                    <h3><img alt="hi" src="images/sd.png" height="58px" width="58px" alt="Soft Devveloper">Software Development  <i class="fas fa-code"> :</i></h3>
                    <p>Software development is the process of computer programming, documenting, testing, and bug fixing involved in creating and maintaining applications and frameworks resulting in a software product. </p>
                </div>
                <div class="mobile_app">
                    <h3><img alt="hi" src="images/ma.png" height="58px" width="58px" alt="Mobile Application"> Mobile Application   <i class="fab fa-android"> :</i></h3>
                    <p>A mobile app is a computer program designed to run on a mobile device such as a phone/tablet or watch. Mobile applications often stand in contrast to desktop</p>
                </div>
                <div class="hosting">
                    <h3><img alt="hi" src="images/host.png" height="58px" width="58px" alt="Hosting">    Hosting  <i class="fas fa-network-wired"> :</i></h3>
                    <p>A web hosting service is a type of Internet hosting service that allows individuals and organizations to make their website accessible via the World Wide</p>
                </div>
            </div>
		</div>
		<!-- end #content -->
        
        <?php include 'Parts/Portfolio.php'; ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
		<?php
		include './Parts/footer.php';
		?>
<!-- end #footer -->
</body>
</html>
