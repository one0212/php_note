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
    
        $ar = [
            'name' => 'david',
            'age' => 30,
        ];

        $br = $ar; // 先複製在進行設定值
        $cr = &$br; // 設定位置

        $br['age'] = 100; 
        $cr['age'] = 66; 

        print_r($ar); // 30
        print_r($br); // 66
        print_r($cr); // 66

        ?>
        </pre>
    </div>
</body>
</html>