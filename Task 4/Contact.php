<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>InternTech</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
<link href="style1.css" rel="stylesheet" type="text/css" media="screen" />

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
		<div><img src="images/contact.jpg" width="920" height="490"  alt="" /></div>
		<h1><center>Contact Us</center></h1>
		<div id="content">
			<form action="/Task 4/User_Info.php" method="post">
			
				<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" onblur="first_name()" required>
				
				<input type="email" placeholder="Your Email" id="email" class="form-control" name="email" onblur="email_valid()" required>
				
				<input type="text" class="form-control" id="mobile" name="mobile" onblur="mobile_valid()" placeholder="Your Mobile" required>

				<select id="looking_for" class="form-control" name="looking_for" required="" data-error="This field is required." required>
                      	<option value="0">What are you looking for?</option>
                      	<option value="Web Developement">Web Development</option>
                      	<option value="Web Design">Web Design</option>
                      	<option value="E-Commerce">E-Commerce</option>
                      	<option value="Software Development">Software Development</option>
                      	<option value="Mobile App Development">Mobile App Development</option>
                      	<option value="Hosting">Hosting</option>
                      </select>

				<textarea class="form-control" placeholder="Describe your requirement Briefly" name="message" rows="11" onblur="message_valid()" required></textarea>
				<input type="submit" class="btn btn-common" name="submit" value="Submit">
			</form>
		</div>
		<!-- end #content -->
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
