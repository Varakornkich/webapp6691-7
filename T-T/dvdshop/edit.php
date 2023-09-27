<?php
if(!isset($_GET['mid'])){
    header("refresh: 0; url=http://localhost/dvdshop/main.php");
}
require 'conn.php';
$sql = "SELECT * FROM member WHERE mid='$_GET[mid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsucess.php">
        
        <P>
            <label for="mid">ID</label>
            <?php
                echo $_GET["mid"];
            ?>

        </p>

        <p>

            <label for="sname">ชื่อ</label>
            <input type="text" name="mid" id="mid" value="<?=$row['mid'];?>" hidden>
            <input type="text" name="mname" id="mname" value="<?=$row['mname'];?>" />

        </p>

        <p>

            <label for="mlastname">นามสกุล</label>

            <input type="text" name="mlastname" id="mlastname" value="<?=$row['mlastname'];?>" />

        </p>

        <p>

            <label for="address">ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label for="mtelephone">เบอร์โทร</label>

            <input type="text" name="mtelephone" id="mtelephone" value="<?=$row['mtelephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='main.php'>Home</a>
    </form>
</body>

</html>