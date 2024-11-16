<?php
$con=mysqli_connect("localhost","root","","test_php");

$id=$_GET['eid'];

$sel="SELECT * FROM student WHERE sid='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
</head>
<body>
    <form action="update.php" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?php echo $row['sid']; ?>">

    <p>name</p>
    <p><input type="text" name="name" value="<?php echo $row['name']; ?>"></p>
    
    <p>gender</p>
    <p><label><input <?php if($row['gender']=="male"){ echo "checked"; } ?> type="radio" name="gender" value="male"/>male</label></p>
    <p><label><input <?php if($row['gender']=="female"){ echo "checked"; } ?> type="radio" name="gender" value="female"/>female</label></p>

    <p>stream</p>
    <p>
        <select name="stream">
            <option value="">select</option>
            <option <?php if($row['stream']=="bca"){ echo "selected"; } ?> value="bca">bca</option>
            <option <?php if($row['stream']=="mca"){ echo "selected"; } ?> value="mca">mca</option>
            <option <?php if($row['stream']=="bba"){ echo "selected"; } ?> value="bba">bba</option>
            <option <?php if($row['stream']=="mba"){ echo "selected"; } ?> value="mba">mba</option>
        </select>
    </p>

    <?php
    
    $sub=explode(",",$row['subject']);
    
    ?>

    <p>subject</p>
    <p><label><input <?php if(in_array("c",$sub)){ echo "checked"; } ?> type="checkbox" name="sub[]" value="c">c</label></p>
    <p><label><input <?php if(in_array("c++",$sub)){ echo "checked"; } ?> type="checkbox" name="sub[]" value="c++">c++</label></p>
    <p><label><input <?php if(in_array("javascript",$sub)){ echo "checked"; } ?> type="checkbox" name="sub[]" value="javascript">javascript</label></p>
    <p><label><input <?php if(in_array("python",$sub)){ echo "checked"; } ?> type="checkbox" name="sub[]" value="python">python</label></p>

    <p>image</p>
    <p><input type="file" name="simg" /></p>
    <p><img class="myimg" src="student_img/<?php echo $row['simg']; ?>"</p>

    <p><input type="submit" name="save" value="edit" /></p>
    </form>
</body>
</html>