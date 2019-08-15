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
    // 索引式陣列, 也可以用[]表示
    $ar = [ 3, 2, 0, 8, 4, 'hi' ];


    // 關聯式陣列
    $br = [
        'name' => 'david',
        'age' => 30,

    ];

    // $cr = [];

    for($i=1; $i<10; $i++){
        $cr[] = $i*$i;
        // 相當於.push()
    }
    echo '<pre>';
    
    print_r($ar);
    print_r($br);
    print_r($cr);
    
    //count() 能取得陣列中元素個數
    echo count($ar). "\n";
    //  "\n"跳脫字元 在此表示換行
    echo count($br). "\n";
    echo count($cr). "\n";


    echo '</pre>';

    ?>
</body>
</html>