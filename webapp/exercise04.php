<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <?php
    function test($s)
    {
         $ctr_aa = 0;
         $i = 0;
         while ($i < (strlen($s)-1)){
            if (substr($s, $i,2)=="aa"){
                $ctr_aa++;
                $i++;
            }else{
                $i++;
            }
        }
        return $ctr_aa;
    }
    
    echo test("bbaaccaag")."\n";
    echo test("jjkiaaasew")."\n";
    echo test("JSaaakoiaa")."\n";

    ?>    
</body>
</html>