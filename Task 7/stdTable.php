
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
      <a class="navbar-brand" href="/Task 3/Registration/Registration.ph">InternTech</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          
          <li class="nav-item">
              <a class="nav-link" href="/Task 7/regForm.php">Registration</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/Task 7/stdTable.php">Display Data</a>
          </li>
          </ul>
          
      </div>
      </nav>
      </body>
</html>
<?php

$connection = mysqli_connect("localhost","root","","db_internship");

$q = mysqli_query($connection,"select * from tbl_student") or die(mysqli_error($connection));

echo"<table border='1'>";
echo "<tr>";
echo"<th>First Name</th>";
echo"<th>Last Name</th>";
echo"<th>Gender</th>";
echo"<th>Email</th>";
echo"<th>Contact</th>";
echo"<th>College</th>";
echo"<th>Degree</th>";
echo"<th>Sem</th>";
echo"<th>City</th>";
echo"<th>State</th>";
echo"<th>Zip</th>";
echo"<th>Course</th>";
echo"<th>Time</th>";
echo"<th>Resume</th>";
echo"<th>Action</th>";
echo "</tr>";
$i=0;
while($row = mysqli_fetch_array($q)) {
    $i++;
    echo"<tr>";
    echo"<td>$i</td>";
    echo"<td>{$row['std_name']}</td>";
    echo"<td>{$row['std_lname']}</td>";
    echo"<td>{$row['std_gender']}</td>";
    echo"<td>{$row['std_email']}</td>";
    echo"<td>{$row['std_mobile']}</td>";
    echo"<td>{$row['std_college']}</td>";
    echo"<td>{$row['std_degree']}</td>";
    echo"<td>{$row['std_sem']}</td>";
    echo"<td>{$row['std_city']}</td>";
    echo"<td>{$row['std_state']}</td>";
    echo"<td>{$row['std_zip']}</td>";
    echo"<td>{$row['std_course']}</td>";
    echo"<td>{$row['std_time']}</td>";
    echo"<td>{$row['std_resume']}</td>";
    echo"<td><a href = '/Task 7/stddelete.php?deleteid={$row['std_name']}'>Delete</a></td>";
    echo"</tr>";
}
echo"</table>";
echo"<a href = '/Task 7/regForm.php'>Add Records</a>";
?>