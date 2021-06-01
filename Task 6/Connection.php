<?php 
$host= "localhost"; 
$username ="root"; 
$passwd = ""; 
$dbname = "db_internship"; 
//Connection Function 
$connection = mysqli_connect ($host, $username , $passwd, $dbname) 
$q = mysqli_query ($connection, 
"insert into tbl_student (std_id,std_name, std_gender, std_mobile) | 
        values ('1','Kush', 'Male', '0123456789') ") 
    or die("Error". mysqli_error ($connection) ) ;

if($q)
{
    echo "<script>alert('Record Added');</script>";
}