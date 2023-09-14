<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <?php
    function test($str)
    {
        $s = substr($str, strlen($str)- 1);
        return $s.$str.$s;
    }
        
    echo ("Red")."\n";
    echo ("Green")."\n";
    echo ("1")."\n";

    ?>    
</body>
</html>