<!doctype html>
      <html lang="en">
      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

          <title>InternTech</title>
      </head>
      <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/Task 3/Registration/Registration.php">InternTech</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          
          <li class="nav-item">
              <a class="nav-link" href="/Task 3/Registration/Registration.php">Registration</a>
          </li>
          </ul>
          
      </div>
      </nav>
<?php
          {   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> Your Registration has been submitted successfully!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
          </div>';
          // Submit these to a database
          }

?>
        </body>
    </html>
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$college = $_POST['college'];
$degree = $_POST['degree'];
$sem = $_POST['sem'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$course = $_POST['course'];
$time = $_POST['time'];
$resume = $_POST['resume'];


echo"Your First Name is $fname";
echo"</br>Your Last Name is $lname";
echo"</br>Your Gender is $gender";
echo"</br>Your Email is $email";
echo"</br>Your Contact is $contact";
echo"</br>Your Institute Name is $college";
echo"</br>Your Degree is $degree";
echo"</br>Your Semester is $sem";
echo"</br>Your City is $city";
echo"</br>Your State is $state";
echo"</br>Your Zip is $zip";
echo"</br>Your Course is $course";
echo"</br>Your InternshipTime is $time";
echo"</br>Your Resume is $resume";

?>
