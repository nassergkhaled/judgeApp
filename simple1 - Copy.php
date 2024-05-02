<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
    $spreadsheet = $reader->load('PALSTF-JUDGEMENT-Final-2020-with-names.xlsx');
 
    $sheet = $spreadsheet->getActiveSheet();
    $last_row = (int) $sheet->getHighestRow();
    $new_row = $last_row+1;
 
    $sheet->setCellValue('C2', '86');
    $sheet->setCellValue('D2', '82');
    $sheet->setCellValue('E2', '80');

   
 
    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
    $writer->save('PALSTF-JUDGEMENT-Final-2020-with-names.xlsx');
?>