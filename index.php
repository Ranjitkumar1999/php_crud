<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ins.php" method="post" enctype="multipart/form-data" >

    <p>name</p>
    <p><input type="text" name="name"></p>
    
    <p>gender</p>
    <p><label><input type="radio" name="gender" value="male"/>male</label></p>
    <p><label><input type="radio" name="gender" value="female"/>female</label></p>

    <p>stream</p>
    <p>
        <select name="stream">
            <option value="">select</option>
            <option value="bca">bca</option>
            <option value="mca">mca</option>
            <option value="bba">bba</option>
            <option value="mba">mba</option>
        </select>
    </p>

    <p>subject</p>
    <p><label><input type="checkbox" name="sub[]" value="c">c</label></p>
    <p><label><input type="checkbox" name="sub[]" value="c++">c++</label></p>
    <p><label><input type="checkbox" name="sub[]" value="javascript">javascript</label></p>
    <p><label><input type="checkbox" name="sub[]" value="python">python</label></p>

    <p>image</p>
    <p><input type="file" name="simg" /></p>

    <p><input type="submit" name="save" value="save" /></p>
    </form>
</body>
</html>