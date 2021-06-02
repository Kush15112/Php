<?php

$connection= mysqli_connect ("localhost", "root", "", "db_internship"); 
if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];

$q = mysqli_query ($connection,"INSERT INTO `tbl_user`(`user_name`, `user_gender`, `user_mobile`) VALUES ('$name','$gender','$mobile')")
    or die("Error". mysqli_error ($connection));

if($q)
{
    echo "<script>alert('Record Added');</script>";
}
}
echo"<a href = '/Task 7/Table.php'>Display Records</a>";
?>
<html> 
<body>  
    <form method="post"> 
    Name :<input type="text" name="txt1"/> 
    Gender: <select name="txt2"> 
    <option>Male</option> 
    <option>Female</option> 
    </select> 
 
    Mobile No :<input type="number" name="txt3" /> 
    <input type="submit" /> 
 
</form> 
</body> 
</htm1>
