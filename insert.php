<?php
   include("config.php");
   session_start();
   $av=0;
   
   
		 if($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $jm1 = mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'m1']);
	$jm1=(int)$jm1;
    $jm2 = mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'m2']);
	$jm2=(int)$jm2;
    $jm3 = mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'m3']);
	$jm3=(int)$jm3;
    $jm4 = mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'m4']);
	$jm4=(int)$jm4;
    $jm5 = mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'m5']);
	$jm5=(int)$jm5;
    $jm6 = mysqli_real_escape_string($db,$_POST['j'.$_SESSION['role'].'m6']);
    $jm6=(int)$jm6;
    $av=(($jm1+$jm2+$jm3+$jm4+$jm5+$jm6));





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

        $sql="UPDATE `project` SET
                `j1m1`='$jm1',`j1m2`='$jm2',`j1m3`='$jm3',`j1m4`='$jm4',`j1m5`='$jm5',`j1m6`='$jm6',`av1m`='$av' WHERE code='$code'";

	}
	else if($_SESSION['role'] == 2){

			  $sql="UPDATE `project` SET 
                `j2m1`='$jm1',`j2m2`='$jm2',`j2m3`='$jm3',`j2m4`='$jm4',`j2m5`='$jm5',`j2m6`='$jm6',`av2m`='$av' WHERE code='$code'";

	}
	
    else if($_SESSION['role'] == 3){

			  $sql="UPDATE `project` SET 
                `j3m1`='$jm1',`j3m2`='$jm2',`j3m3`='$jm3',`j3m4`='$jm4',`j3m5`='$jm5',`j3m6`='$jm6',`av3m`='$av' WHERE code='$code'";

		
	}



/*	}
	
	
	}*/
   
   
   
 	   $result =mysqli_query($db,$sql)or die(mysqli_error($db));
	 


	  // $result =mysqli_query($db,$sql)or die(mysqli_error($db));
          header("Location: dataPage.php");
	   
	   
	   
		 }
?>