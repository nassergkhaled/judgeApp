<?php
   include("config.php");
   session_start();
   $av=0;


	if($_SERVER["REQUEST_METHOD"] == "POST") {

    $jp1m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p1m1']));
    $jp1m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p1m2']));
    $jp1m3 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p1m3']));
    $jp1m4 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p1m4']));

	$jp2m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p2m1']));
    $jp2m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p2m2']));
    $jp2m3 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p2m3']));


    $jp3m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p3m1']));
    $jp3m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p3m2']));
    $jp3m3 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p3m3']));
    $jp3m4 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p3m4']));

	$jp4m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p4m1']));
    $jp4m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p4m2']));




	$jp5m1 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m1']));
    $jp5m2 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m2']));
    $jp5m3 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m3']));
    $jp5m4 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m4']));
    $jp5m5 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m3']));
    $jp5m6 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m4']));
	$jp5m7 = (int)(mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'p5m1']));


    $av=(( $jp1m1+$jp1m2+$jp1m3+$jp1m4+$jp2m1+$jp2m2+$jp2m3+$jp3m1
    +$jp3m2+$jp3m3+$jp3m4+$jp4m1+$jp4m2+$jp5m1+$jp5m2+$jp5m3
    +$jp5m4+$jp5m5+$jp5m6+$jp5m7));

    $id=$_SESSION['id'] ;
	$code=$_SESSION['code'] ;
    //$username=$_SESSION['username'];
	$userid= $_SESSION['userid'];
  /*  $sql ="Select * from project WHERE code ='$code'and (j1id ='$userid' or j2id ='$userid' or j3id ='$userid')";
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result) > 0) {
		while($row2= mysqli_fetch_array($result)){
*/
  if( $_SESSION['role'] ==1){

        $sql="UPDATE `project` SET `j1p1m1`='$jp1m1',`j1p1m2`='$jp1m2',`j1p1m3`='$jp1m3',`j1p1m4`='$jp1m4',`av1m`='$av',`j1p2m1`='$jp2m1',
             `j1p2m2`='$jp2m2',`j1p2m3`='$jp2m3',`j1p3m1`='$jp3m1',`j1p3m2`='$jp3m2',`j1p3m3`='$jp3m3',`j1p3m4`='$jp3m4',`j1p4m1`='$jp4m1',`j1p4m2`='$jp4m2',
             `j1p5m1`='$jp5m1',`j1p5m2`='$jp5m2',`j1p5m3`='$jp5m3',`j1p5m4`='$jp5m4',`j1p5m5`='$jp5m5',`j1p5m6`='$jp5m6',`j1p5m7`='$jp5m7'WHERE code='$code'";
	}
	else if($_SESSION['role'] == 2){

			  $sql="UPDATE `project` SET `j2p1m1`='$jp1m1',`j2p1m2`='$jp1m2',`j2p1m3`='$jp1m3',`j2p1m4`='$jp1m4',`av2m`='$av',`j2p2m1`='$jp2m1',
                    `j2p2m2`='$jp2m2',`j2p2m3`='$jp2m3',`j2p3m1`='$jp3m1',`j2p3m2`='$jp3m2',`j2p3m3`='$jp3m3',`j2p3m4`='$jp3m4',`j2p4m1`='$jp4m1',`j2p4m2`='$jp4m2',
                   `j2p5m1`='$jp5m1',`j2p5m2`='$jp5m2',`j2p5m3`='$jp5m3',`j2p5m4`='$jp5m4',`j2p5m5`='$jp5m5',`j2p5m6`='$jp5m6',`j2p5m7`='$jp5m7'WHERE code='$code'";
	}

    else if($_SESSION['role'] == 3){

			  $sql="UPDATE `project` SET `j3p1m1`='$jp1m1',`j3p1m2`='$jp1m2',`j3p1m3`='$jp1m3',`j3p1m4`='$jp1m4',`av3m`='$av',`j3p2m1`='$jp2m1',
             `j3p2m2`='$jp2m2',`j3p2m3`='$jp2m3',`j3p3m1`='$jp3m1',`j3p3m2`='$jp3m2',`j3p3m3`='$jp3m3',`j3p3m4`='$jp3m4',`j3p4m1`='$jp4m1',`j3p4m2`='$jp4m2',
             `j3p5m1`='$jp5m1',`j3p5m2`='$jp5m2',`j3p5m3`='$jp5m3',`j3p5m4`='$jp5m4',`j3p5m5`='$jp5m5',`j3p5m6`='$jp5m6',`j3p5m7`='$jp5m7'WHERE code='$code'";
	}
 	   $result =mysqli_query($db,$sql)or die(mysqli_error($db));

       // Construct file path
    $file = "./history/{$_SESSION['username']}_$code.txt";

    // Open or create the file
    $handle = fopen($file, 'w');



                // Content to write
        $content = "Judge Name: $_SESSION[username]
        Project Code: $code
        Research Question (20 Points)
            Clear, focused goal (1-5) -> $jp1m1
            Originality of the idea (1-5) -> $jp1m2
            Testable using scientiﬁc methods (1-5) -> $jp1m3
            Sustainability of the project (1-5) -> $jp1m4
        Methodology (15 points)
            Eﬀective motivation. Accuracy and clarity of science. Level of knowledge and understanding of concepts (1-5) -> $jp2m1
            Data collection methods are speciﬁc and appropriate (1-5) -> $jp2m2
            Variables and controls (1-5) -> $jp2m3
        Implementation (20 points)
            Systematic data analysis (1-5) -> $jp3m1
            The consistency of the results (1-5) -> $jp3m2
            Appropriate mathematical and statistical methods application (1-5) -> $jp3m3
            Scope and clarity of introduction, background and literature cited (1-5) -> $jp3m4
        Report & Poster Standards (10 points)
            Commitment to Report Writing Standards -> $jp4m1
            Commitment to Poster Writing Standards  -> $jp4m2
        The Presentation (35 points)
            1 - The student(s) demonstrates no evidence of mastery of the underlying science -> $jp5m1
            Conciseness, accuracy, and eﬀective communication of the project details -> $jp5m2
            Understand the interpretation and determinants of the results and conclusions -> $jp5m3
            Independence level during project implementation -> $jp5m4
            Presentation of the workﬂow plan within the time allocated -> $jp5m5
            Recognition of creativity and potential impact in science, society and/or economics -> $jp5m6
            Suﬃcient understanding of the research's risk and errors sources -> $jp5m7
        ";

        if (fwrite($handle, $content) === false) {
            die('Could not write to file.');
        }
        fclose($handle);
    
        header("Location: dataPage.php");

		}
?>