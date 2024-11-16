
<?php
$con=mysqli_connect("localhost","root","","test_php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
  <h2> student details </h2>

  <p><a href="index.php" class="btn btn-success">add new</a></p>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>gender</th>
        <th>stream</th>
        <th>subject</th>
        <th>image</th> 
        <th>delete</th>
        <th>edit</th>
      </tr>
    </thead>
    <tbody>
      
        <?php
        $sel="SELECT * FROM student";
        $rs=$con->query($sel);

        while($row=$rs->fetch_assoc()){

        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['stream']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            
            <td><img class="myimg" src="student_img/<?php echo $row['simg']; ?>"</td>

            <td><a onclick="return confirm('are you sure?');" href="del.php?did=<?php echo $row['sid']?>" class="btn btn-danger">delete</a></td>
            <td><a onclick="return confirm('do you want to uddate?');" href="edit.php?eid=<?php echo $row['sid']?>" class="btn btn-primary">edit</a></td>
        </tr>

        <?php } ?>


    </tbody>
  </table>
</div>

</body>
</html>
