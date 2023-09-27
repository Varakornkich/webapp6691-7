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
    <form id="form1" name="form1" method="post" action="insertmoviesucess.php">
        <P>
            <label for="did">ID</label>
            <input type="text" name="did" id="did"/>
            

        </p>

        <p>

            <label for="dname">ชื่อหนัง</label>
            <input type="text" name="dname" id="dname">

        </p>

        <p>

            <label for="detail">เรื่องย่อ</label>

            <input type="text" name="detail" id="detail">

        </p>

        <p>

            <label for="category">ประเภทหนัง</label>

            <input type="text" name="category" id="category">

        </p>

        <p>

            <label for="date">วันที่หนังออก</label>

            <input type="date" name="date" id="date">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmovie.php'>Home</a>
    </form>
</body>

</html> 