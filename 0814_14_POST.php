<?php
$a = isset($_POST['a']) ? intval($_POST['a']) : 0;
$b = isset($_POST['b']) ? (int)$_POST['b'] : 0;
// intval(123) =(int)123
echo $a + $b;