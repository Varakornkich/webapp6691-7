<?php
    require 'conn.php';
    $sql = "SELECT * FROM dvd";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Movie</title>
</head>

<body>
    <div class="container">
        <h1>Movie</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อหนัง</th>
                    <th scope="col-4">เรื่องย่อ</th>
                    <th scope="col-4">ประเภทหนัง</th>
                    <th scope="col-4">วันที่หนังออก</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["did"]."</td>"."<td>".$row["dname"]."</td>"."<td>".$row["detail"]."</td>"."<td>".$row["category"]."</td>"."<td>".$row["date"]."</td>"."<td>"."<a class='btn btn-warning' href='editmovie.php?did=".$row["did"]."'>Edit</a>"."</td>";
                                
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertmovie.php'>Insert Movie</a>
        <a class="btn btn-success" href='main.php'>Back</a>
    </div>
</body>

</html>