<?php

$con=mysqli_connect("localhost","root","","test_php");

if(isset($_POST['save'])){
    $n=$_POST['name'];
    $g=$_POST['gender'];
    $s=$_POST['stream'];

    if(isset($_POST['sub'])){
    $sb=implode(",",$_POST['sub']);
    }else{
        $sb="";
    }

    $buf=$_FILES['simg']['tmp_name'];
    $fn=time().$_FILES['simg']['name'];
    move_uploaded_file($buf,"student_img/".$fn);


    $ins="INSERT INTO  student SET name='$n',gender='$g',stream='$s',subject='$sb',simg='$fn'";
    if($con->query($ins)){
        header("location:sel.php");
    }

    }else{
        echo "403 forebidden";
}
?>