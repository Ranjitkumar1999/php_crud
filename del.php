<?php
$con=mysqli_connect("localhost","root","","test_php");

$id=$_GET['did'];

$sel="SELECT * FROM student WHERE sid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

unlink("student_img/".$row['simg']);

$d="DELETE FROM student WHERE sid='".$id."'";
if($con->query($d)){
    header("location:sel.php");
}


?>