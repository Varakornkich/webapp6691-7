<?php
   echo <<<HTML
   <!DOCTYPE html>
   <html>
   <head>
       <title>ค้นหานักแสดง</title>
       <style>
    /* CSS เพื่อกำหนดความกว้างของ input */
    #actor_name_input {
            width: 165px; /* ปรับขนาดตามที่คุณต้องการ */
            padding: 1px;
            margin-left : 37px;
        }
    </style>
       
   </head>
   <body>
       <h1>ค้นหานักแสดง</h1>
       <form action="search.php" method="GET">
           ชื่อนักแสดง: <input a type="text" name="actor_name" id="actor_name_input">
           <br>
           นามสกุลนักแสดง: <input type="text" name="actor_surname">
           <br>
           <input type="submit" value="ค้นหา">
       </form>
   </body>
   </html>
   HTML;
?>