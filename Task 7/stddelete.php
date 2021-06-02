<?php
$connection = mysqli_connect("localhost","root","","db_internship");

$id = $_GET['deleteid'];

$q = mysqli_query($connection,"delete from tbl_student where std_name = '$id'") or die(mysqli_error($connection));

if($q)
{
    echo"<script>alert('Record Deleted');window.location='/Task 7/stdTable.php';</script>";
}