<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php for ($i=1;$i<10;$i++) { ?>
        <tr>
        <?php for ($j=1;$j<10;$j++) { ?>
        <td> 
            <?php echo $i*$j ?>
        </td>
       <?php } ?>
        </tr>
    <?php } ?> 
    </table>
    
</body>
</html>