<?php


require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

include("config.php");
   session_start();
   $av=0;
   
   
		 if($_SERVER["REQUEST_METHOD"] == "POST") {


    $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
    $spreadsheet = $reader->load('PALSTF JUDGEMENT Final 2024.xlsx');
 
    $sheet = $spreadsheet->getActiveSheet();
    $last_row = (int) $sheet->getHighestRow();
    $new_row = $last_row+1;
   // $av = mysqli_real_escape_string($db,$_POST['av']);
	//$mycode = mysqli_real_escape_string($db,$_POST['code']);

    $sql ="Select * from project";
	$cell="";
	$line="";
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)){
       
	   $line=$row['project_line'];
		
          
	//}}			
    // if($_SESSION['role']==1){
		 $cell="C".$line;
		 $av=$row['av1m'];

     $sheet->setCellValue($cell, $av);

	// }
	// else if($_SESSION['role']==2){
		 		 $cell="D".$line;
				  $av=$row['av2m'];

    $sheet->setCellValue($cell, $av);

//	 }
	 
	// else if($_SESSION['role']==3){
		 		  $cell="E".$line;
				  $av=$row['av3m'];

    $sheet->setCellValue($cell, $av);

	// }
	
 
 
 
   // $sheet->setCellValue($cell, $av);
   

		 }}
 
    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
    $writer->save('PALSTF JUDGEMENT Final 2024.xlsx');

       header("Location: admin.php");

		 }
?>