<?php
require 'conn.php';
$sql_update="INSERT INTO dvd(did,dname,detail,category,date) VALUES ('$_POST[did]','$_POST[dname]','$_POST[detail]' ,'$_POST[category]' ,'$_POST[date]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/mainmovie.php");
}

?>