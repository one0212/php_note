

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>read cookie</h2>
        <?php
        echo $_COOKIE['myc']
        ?>
        <!-- 第一次會讀取不到cookie -->

    </div>
</body>
</html>