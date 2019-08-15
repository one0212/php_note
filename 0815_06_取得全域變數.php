<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="lib/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <pre>
        <?php
            $g1 = 1000;
            $g2 = 2000;

            function fun() {
                global $g2;
                echo ">{$g1}< >{$g2}<";
            };
            fun()
            // g1為undefined  
            // 函式內要抓取全域變數要添加 global
        ?>
        
        </pre>
    </div>
</body>
</html>