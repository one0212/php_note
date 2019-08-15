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
    <?php
  
    $br = [
        'name' => 'david',
        'age' => 30,
        'hello'

    ];


    // foreach(陣列變數 as key變數 => 值變數)
    foreach($br as $key => $value){
        echo "$key =&gt; $value <br>";
    }

    ?>
    </div>
</body>
</html>