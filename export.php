<?php


require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include("config.php");
   session_start();
   $av=0;


	if($_SERVER["REQUEST_METHOD"] == "POST") {
    $reader = IOFactory::createReader("Xlsx");
    $spreadsheet = $reader->load('./PALSTF JUDGEMENT Final 2024.xlsx');

    $sheet = $spreadsheet->getActiveSheet();
    $last_row = (int) $sheet->getHighestRow();
    $new_row = $last_row+1;

    //$av = mysqli_real_escape_string($db,$_POST['av']);
	//$mycode = mysqli_real_escape_string($db,$_POST['code']);

    $sql ="Select * from project";
	$cell="";
	$line="";
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)){
        $line=$row['project_line'];

		$cell="C".$line;
		$av=$row['av1m'];
        $sheet->setCellValue($cell, $av);

		$cell="D".$line;
		$av=$row['av2m'];
        $sheet->setCellValue($cell, $av);

        $cell="E".$line;
        $av=$row['av3m'];
        $sheet->setCellValue($cell, $av);
	    }
    }
    // Save the updated file with retry logic
    $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
    $filePath = './PALSTF JUDGEMENT Final 2024.xlsx';
    $maxRetries = 5;
    $retryDelay = 1; // in seconds
    for ($i = 0; $i < $maxRetries; $i++) {
        try {
            $writer->save($filePath);
            header("Location: serve_file.php?file=".urlencode($filePath));
            exit();
        } catch (\PhpOffice\PhpSpreadsheet\Writer\Exception $e) {
            echo 'Error: ' . $e->getMessage();
            if ($i == $maxRetries - 1) {
                echo 'Error: ' . $e->getMessage();
                exit();
            }
            sleep($retryDelay); // Wait before retrying
        }
    }

    // header("Location: admin.php");
}
