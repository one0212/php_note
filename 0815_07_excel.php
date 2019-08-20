<?php

require "vendor/autoload.php";
// require是把後面這個套件包含進來 後面為字串 "路徑"

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// php的路徑為倒斜線\ 匯入以上兩個類別

$spreadsheet = new Spreadsheet();
// Spreadsheet為一個類別 用它建立一個物件

$sheet = $spreadsheet->getActiveSheet();
// 取得active那一頁
$sheet->setCellValue('A1', 'Hello World !');
// ('座標', 值)

$writer = new Xlsx($spreadsheet);
// 存檔時要建立一個存檔的物件 把內容丟進去 Xlsx也為一個類別
$writer->save('hello2.xlsx');
// 此動作完成存檔 因為沒有設定路徑所以會在同一個資料夾中生成excel檔


