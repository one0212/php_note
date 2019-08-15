<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array</title>
</head>
<body>
    <?php
    // 索引式陣列
    $ar = array(3, 2, 0, 8, 4, 'hi');


    // 關聯式陣列
    $br = array(
        'name' => 'david',
        'age' => 30,

    );

    echo '<pre>';
    
    print_r($ar);
    print_r($br);

    // 訊息較多, 會給類型及length
    var_dump($ar);
    var_dump($br);


    echo '</pre>';

    ?>
</body>
</html>