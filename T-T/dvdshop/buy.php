<!DOCTYPE html>
<html>
<head>
    <title>สั่งซื้อหนัง</title>
</head>
<body>
    <h1>สั่งซื้อหนัง</h1>
    <form action="checkoder.php" method="POST">
        <label for="name">ชื่อ:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="name">นามสกุล:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="address">ที่อยู่:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="movie">หนังที่ต้องการสั่งซื้อ:</label>
        <select id="movie" name="movie" required>
            <option value="" disabled selected>โปรดเลือกหนัง</option>
            <!-- ใส่ตัวเลือกหนังจากฐานข้อมูล -->
            <?php
                $conn = new mysqli('localhost','root','','dvdshop');
                $conn->query("SET NAMES utf8");
                if($conn->connect_error){
                    die("Connection Fail God damn it ". $conn->$conn_error);
                }
                // ดึงข้อมูลหนังจากตาราง dvd
                $result = $conn->query("SELECT * FROM dvd");

                // สร้างตัวเลือกใน dropdown menu
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['dname'] . "'>" . $row['dname'] . "</option>";
                }

                // ปิดการเชื่อมต่อฐานข้อมูล
                $conn->close();
            ?>
        </select><br><br>

        <input type="submit" value="สั่งซื้อ">
    </form>
</body>
</html>
