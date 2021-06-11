<?php
$connection = mysqli_connect("localhost","root","","db_internship");

if(!isset($_GET['eid']) || empty($_GET['eid'])){
    header("/Task 8/Table.php");
}
$editid=$_GET['eid'];

$editq = mysqli_query($connection,"select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($connection));
$editdata= mysqli_fetch_array($editq);
// print_r($editdata);
if($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];

    $uq = mysqli_query($connection,"UPDATE `tbl_user` SET `user_name`='{txt1}',`user_gender`='{txt2}',`user_mobile`='{txt3}' WHERE user_id='{$editid}'") or die(mysqli_error($connection));
    
    if($uq){
            echo"<script>alert('Record Updated');windows.location='/Task 8/Table.php';</script>'";
    }
}
?>
<html>
<body>
    <form mehtod="post">
    Name: <input type="text" name="txt1" value="<?php echo $editdata['user_name'] ?>" />
    </br>
    Gender : Male<input type="radio" name="txt2" <?php  if($editdata['user_gender']=="Male"){echo "checked";} ?>  value="Male" />
    Female <input type="radio" name="txt2" <?php if ($editdata['user_gender']=="Female"){echo "checked";} ?>   value="Female" />
    </br>
    Contact No. : <input type="number" name="txt3"value="<?php echo $editdata['user_mobile'] ?>" />
    </br>
    <input type="submit" value="Submit"/>
    </form>

</body>
</html>