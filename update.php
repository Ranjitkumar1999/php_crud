<?php

$con=mysqli_connect("localhost","root","","test_php");

if(isset($_POST['save'])){
    $n=$_POST['name'];
    $g=$_POST['gender'];
    $s=$_POST['stream'];
    $id=$_POST['id'];

    if(isset($_POST['sub'])){
    $sb=implode(",",$_POST['sub']);
    }else{
        $sb="";
    }

    if(isset($_FILES['simg']['name']) && $_FILES['simg']['name']!=""){ 

    $buf=$_FILES['simg']['tmp_name'];
    $fn=time().$_FILES['simg']['name'];
    move_uploaded_file($buf,"student_img/".$fn);


    $upd="UPDATE  student SET name='$n',gender='$g',stream='$s',subject='$sb',simg='$fn' WHERE sid='$id'";
    }else{
        $upd="UPDATE  student SET name='$n',gender='$g',stream='$s',subject='$sb' WHERE sid='$id'";  
    }
    if($con->query($upd)){
        header("location:sel.php");
    }

    }else{
        echo "403 forebidden";
}
?>