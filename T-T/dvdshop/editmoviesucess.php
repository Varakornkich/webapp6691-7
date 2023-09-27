<?php
require 'conn.php';
$sql_update="UPDATE dvd SET did='$_POST[did]',dname='$_POST[dname]',detail='$_POST[detail]' ,category='$_POST[category]' ,date='$_POST[date]' WHERE did='$_POST[did]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/dvdshop/mainmovie.php");
}
?>