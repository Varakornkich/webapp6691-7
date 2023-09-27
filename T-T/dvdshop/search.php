<?php
    $actor_name = $_GET['actor_name'];
    $actor_surname = $_GET['actor_surname'];
    // สร้างการเชื่อมต่อกับฐานข้อมูล
    $conn = new mysqli('localhost','root','','dvdshop');
    $conn->query("SET NAMES utf8");
    // ตรวจสอบการเชื่อมต่อ
    if($conn->connect_error){
        die("Connection Fail God damn it ". $conn->$conn_error);
    }

    $sql = "SELECT actor.aname, actor.alastname, dvd.dname
    FROM actor
    INNER JOIN dvd 
    ON actor.aid = dvd.did
    WHERE actor.aname = '$actor_name' AND
        actor.alastname = '$actor_surname'";
    

    
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // แสดงข้อมูล
        while ($row = $result->fetch_assoc()) {
            echo "นักแสดง: " . $row["aname"] . " ".$row["alastname"].", หนังที่แสดง : " . $row["dname"] . "<br>";
            
        }
} else {
    echo "ไม่พบข้อมูล"; echo $actor_name;
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();

?>