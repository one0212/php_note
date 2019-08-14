<?php
$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? (int)$_GET['b'] : 0;
// intval(123) =(int)123
echo $a + $b;