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
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['mobile'];
$course = $_POST['looking_for'];
$desc = $_POST['message'];

echo"<h1>Your Info</h1>";



echo "Your Name is $name </br>";
echo "Your Email is $email </br>";
echo "Your Contact is $contact </br>";
echo "Your Course is $course </br>";
echo "Your Description is $desc </br>";

?>
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