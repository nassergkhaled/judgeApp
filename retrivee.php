   
   
   
   
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">

 
<!DOCTYPE html>

<html dir="rtl" lang="ar">

<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
 include("config.php");
 session_start();
    $mycode =$_GET['code']; 
	
	$username=$_GET['username'];
	
	
	
	
	
	
	
	
    $sql3 ="SELECT `username` FROM `users` WHERE `userid`='$username' ";
    $result3 = mysqli_query($db,$sql3);
    if (mysqli_num_rows($result3) > 0) {
		
		while($row3 = mysqli_fetch_array($result3)){
             $username2=$row3['username'];

	}}
	
	
	
	
	
	
	
	
    $sql ="Select * from project WHERE code ='$mycode'and (j1id='$username'or j2id='$username' or j3id='$username')";
	
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result) > 0) {
		
		while($row = mysqli_fetch_array($result)){



	
?>
 
	

<head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
	.cpu_table{
		 width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
	}
	table, th, td {
  border:1px solid black;
   }
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 19px;
      color: #666;
      }
      h1 {
      margin: 0;
	  font-size: 19px;
	        padding: 0;


      }
      h3 {
      margin: 12px 0;
      color:  #6588e0;
      }
      .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
      }
      form {
      width: 100%;
      padding: 10px;
      }
      fieldset {
      border: none;
      }
      .account-details, .tec-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .account-details >div, .tec-details >div >div {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      }
      .account-details >div, .tec-details >div, input, label,textarea {
      width: 100%;
      }
      label {
      padding: 0 5px;
      text-align: right;
      vertical-align: middle;
      }
      
	 
      .checkbox {
      margin-bottom: 10px;
      }
      select, .range, .gender, .bdate-block {
      width: calc(100% + 20px);
      padding: 7px 0;
      }
      select {
      background: transparent;
      }
      .gender input {
      width: auto;
      } 
      .gender label {
      padding: 0 5px 0 0;
      } 
      .bdate-block {
      display: flex;
      justify-content: space-between;
      }
      .birthdate select.day {
      width: 35px;
      }
      .birthdate select.city {
      width: calc(100% - 230px);
      }
      .birthdate input {
      width: 38px;
      vertical-align: unset;
      }
      .checkbox input, .range input {
      width: auto;
      margin: -2px 10px 0 0;
      }
      .checkbox a {
      color:  #6588e0;
      }
      .checkbox a:hover {
      color: #82b534;
      }
      button {
      width: 10%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background:  #6588e0; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #82b534;
      }
	  
      @media (min-width: 568px) {
	 .account-details >div {
      width: 50%;
      }
      label {
      width: 20%;
      }
      input {
      width: 40%;
      }
      select, .range, .gender, .bdate-block {
      width: calc(50% + 10px);
      }
	  }
	  
	    @media (min-width: 568px) {
	  .tec-details >div {
      width: 50%;
      }
      label {
      width: 20%;
      }
     
	   textarea{
		  align-content:center;
		
	  }
      select, .range, .gender, .bdate-block {
      width: calc(70% + 16px);
      }
	  }
     
	 
	  
 
    </style>
  </head>
 





<body >
  <?php 
	

  if($row['j1id']==$username){
	  $_SESSION['role'] = "1";

		
	}
	else if($row['j2id']==$username){
	 $_SESSION['role'] = "2";

	}
	
    else if($row['j3id']==$username){
		$_SESSION['role'] = "3";

		
	}
  
  
  
  
  
  
  
  if($row['eng']){ ?>
   	<img src="logo.png" alt="" >

<div class="main-block">

    <form  method="post">
   <div >
       <label><strong>رقم المشروع: </strong><?php echo $mycode ;?> </label>
     
	 <label><br>معرض فلسطين للعلوم والتكنولوجيا 2022
         <br>نموذج تحكيم المشاريع الهندسيه<label>
		          </div >

           <fieldset>

        <div  class="account-details">
		<table style="width:100%">
  <tr>
    <th>المعيار</th>
    <th>ضعيف</th>
    <th>متوسط</th>
	<th>جيد</th>
	<th>ممتاز</th>
	<th>الدرجة</th>
	
  </tr>
  
  <tr>
   <td> <p><h1>سؤال البحث (المشكله)10</h1>
  -غرض واضح ومركز ودقسق
   <br>-يوضح امكانية مساهمة في مجال الدراسة 
  <br> -قابل للاختبار باستخدام الاساليب العلمية <p></td>
    <td> 3-0</td>
    <td> 6-4</td>
    <td> 8-7</td>
    <td> 10-9</td>
	<?php $jm1="j". $_SESSION['role']."m1";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m1"   value=<?php echo  $row[$jm1];  ?>  min="0" max="10"> </td>
  </tr>

 <tr>
    <td><p><h1>التصميم والمنهجية 15</h1>
- استكشاف بدائل لحل الصعوبات التي واجهت الباحث
<br>- تحديد الحل بشكل متكامل وواضح
<br>- تطوير نموذج أولي <p></td>
    <td>4-0 </td>
    <td>9-5</td>
    <td>13-10</td>
    <td>15-14</td>
  <?php $jm2="j". $_SESSION['role']."m2";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m2"   value=<?php echo  $row[$jm2];  ?> > </td>
  </tr>
  
   <tr>
 <td><p><h1>التنفيذ / البناء واالختبار 20</h1>
- النموذج األولي يتسق مع التصميم المستهدف
<br>- تم اختبار النموذج األولي في ظروف مختلفة عدة مرات
<br>- يظهر النموذج األولى مهارة هندسية واكتمال العمل <p></td>
    <td> 6-0</td>
    <td>12-7</td>
    <td>16-13</td>
	<td>20-17</td>
   <?php $jm3="j". $_SESSION['role']."m3";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m3"   value=<?php echo  $row[$jm3];  ?> > </td>
  </tr>
  
   <tr>
  <td><p><h1> الابداع</h1>
ً - يوضح المشروع إبداعا متميزا في واحد أو أكثر 
المعايير المذكورة أعاله<p></td></td>
    <td>6-0</td>
    <td>12-7</td>
    <td>16-13</td>
    <td>20-17</td>
<?php $jm4="j". $_SESSION['role']."m4";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m4"   value=<?php echo  $row[$jm4];  ?> > </td>  </tr>
  
   <tr>
     <td><p><h1> لوحة العرض 10</h1>
- ترتيب منطقي ومتسلسل للمادة العلمية
<br>- وضوح الرسومات واألشكال البيانية
<br>- عرض الوثائق الداعمة للبحث ”المراجع“ <p></td>
    <td>3-0</td>
    <td>6-4</td>
    <td>8-7</td>
    <td>10-9</td>
<?php $jm5="j". $_SESSION['role']."m5";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m5"   value=<?php echo  $row[$jm5];  ?> > </td>  </tr>


 <tr>
    <td><p><h1>المقابلة 25</h1>
- ردود واضحة ومدروسة على األسئلة
<br>- فهم العلوم األساسية ذات الصلة بالمشروع
<br>- فهم النتائج جيدا وما تم استخالصه منها
<br>- درجة االستقاللية في تنفيذ المشروع
<br>- تقدير األثر العلمي واالجتماعي واالقتصادي المحتمل
<br>- جودة األفكار المقترحة لالستمرار في البحث مستقبال
<br>- لمشاريع الفريق : المساهمات وتفهم المشروع من
قبل جميع أعضاء الفريق <p></td>
    <td>7-0</td>
    <td>15-8</td>
    <td>20-16</td>
    <td>25-21</td>
<?php $jm6="j". $_SESSION['role']."m6";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m6"   value=<?php echo  $row[$jm6];  ?> > </td>  </tr>
  

       

  


 
</table>

	
		<?php     

	    $jm1=(int)$row[$jm1];
	   	$jm2=(int)$row[$jm2];
	    $jm3=(int)$row[$jm3];
	    $jm4=(int)$row[$jm4];
	    $jm5=(int)$row[$jm5];
	    $jm6=(int)$row[$jm6];



		$av=(($jm1+$jm2+$jm3+$jm4+$jm5+$jm6));
		
		
		
		
		?>
		<input type="text" name="av"   class="cpu_table" value=<?php echo $av; ?> >
		
		
		
          </div>
		  
		  
			<div style="width:70%">
              <div class="range"> <label>المحكم </label><?php echo $username2;?>      <label>ملاحظات</label>
		.............................................</div>
          

			  <div class="range"> <label>التوقيع</label>.............................................</div>

			  <div class="range"> <label>التاريخ</label>.............................................</div>


			 
           <?php
    $myid = $_SESSION['id'];
     if($myid!=0){

		 ?>
 
		      		 <button type="submit" formaction="export.php">ترحيل</button>

	<?php
               }

else{
	?>
	             <button type="submit" formaction="insert.php">حفظ</button>


<?php
}
	
	
?>
			 
            </div>
		  
		        <fieldset>
				
				
				
    </form>
</div



 <?php }
else {        

      
	    
	
	
	?>


  

  
    	<img src="logo.png" alt="" >

<div class="main-block">

    <form  method="post">
   <div >
       <label><strong>رقم المشروع: </strong><?php echo $mycode ;?> </label>
     
	 <label><br>معرض فلسطين للعلوم والتكنولوجيا 2022
         <br>نموذج تحكيم المشاريع العلمية <label>
		          </div >

           <fieldset>

        <div  class="account-details">  
		<table style="width:100%">
  <tr>
    <th>المعيار</th>
    <th>ضعيف</th>
    <th>متوسط</th>
	<th>جيد</th>
	<th>ممتاز</th>
	<th>الدرجة</th>
	
  </tr>
  
  <tr>
   <td> <p><h1>سؤال البحث (المشكله)10</h1>
  -غرض واضح ومركز ودقسق
   <br>-يوضح امكانية مساهمة في مجال الدراسة 
  <br> -قابل للاختبار باستخدام الاساليب العلمية <p></td>
    <td>3-0</td>
    <td>6-4</td>
    <td>8-7</td>
    <td>10-9</td>
<?php $jm1="j". $_SESSION['role']."m1";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m1"   value=<?php echo  $row[$jm1];  ?> > </td>  </tr>

 <tr>
    <td><p><h1>التصميم والمنهجية 15</h1>
-تصميم جيد للخطة وطرق جمع البيانات 
<br>- المتغيرات والضوابط محددة ومناسبة وكامله <p></td>
    <td>4-0</td>
    <td>9-5</td>
    <td>13-10</td>
    <td>15-14</td>
<?php $jm2="j". $_SESSION['role']."m2";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m2"   value=<?php echo  $row[$jm2];  ?> > </td>  </tr>
  
   <tr>
 <td><p><h1>التنفيذ/ جمع البيانات وتحليلها وتفسيرها 20</h1>
-جمع وتحليل البيانات بصورة منهجية علمية
<br>- النتائج قابلة لتكرار قياسها للتاكد منها
<br>- استخدام جيد للطرق الاحصائية والرياضة 
<br>- تجميع كمية من البيانات تكفي لتحليلها وبالتالي الحصول على استنتاجات <p></td>

    <td>6-0</td>
    <td>12-7</td>
    <td>16-13</td>
	<td>20-17</td>
<?php $jm3="j". $_SESSION['role']."m3";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m3"   value=<?php echo  $row[$jm3];  ?> > </td>  </tr>
  
   <tr>
  <td><p><h1> الابداع</h1>
ً - يوضح المشروع إبداعا متميزا في واحد أو أكثر 
المعايير المذكورة أعاله<p></td></td>
    <td>6-0</td>
    <td>12-7</td>
    <td>16-13</td>
    <td>20-17</td>
<?php $jm4="j". $_SESSION['role']."m4";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m4"   value=<?php echo  $row[$jm4];  ?> > </td>  </tr>
  
   <tr>
     <td><p><h1> لوحة العرض 10</h1>
- ترتيب منطقي ومتسلسل للمادة العلمية
<br>- وضوح الرسومات واألشكال البيانية
<br>- عرض الوثائق الداعمة للبحث ”المراجع“ <p></td>
    <td>3-0</td>
    <td>6-4</td>
    <td>8-7</td>
    <td>10-9</td>
<?php $jm5="j". $_SESSION['role']."m5";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m5"   value=<?php echo  $row[$jm5];  ?> > </td>  </tr>


 <tr>
    <td><p><h1>المقابلة 25</h1>
- ردود واضحة ومدروسة على األسئلة
<br>- فهم العلوم األساسية ذات الصلة بالمشروع
<br>- فهم النتائج جيدا وما تم استخالصه منها
<br>- درجة االستقاللية في تنفيذ المشروع
<br>- تقدير األثر العلمي واالجتماعي واالقتصادي المحتمل
<br>- جودة األفكار المقترحة لالستمرار في البحث مستقبال
<br>- لمشاريع الفريق : المساهمات وتفهم المشروع من
قبل جميع أعضاء الفريق <p></td>
    <td>7-0</td>
    <td>15-8</td>
    <td>20-16</td>
    <td>25-21</td>
<?php $jm6="j". $_SESSION['role']."m6";?>
   <td style="width:100 "> <input style="width:100% " type="text" name="j<?php echo $_SESSION['role'];?>m6"   value=<?php echo  $row[$jm6];  ?> > </td>  </tr>
  

       

  


 
</table>
		
		<?php     

	    $jm1=(int)$row[$jm1];
	   	$jm2=(int)$row[$jm2];
	    $jm3=(int)$row[$jm3];
	    $jm4=(int)$row[$jm4];
	    $jm5=(int)$row[$jm5];
	    $jm6=(int)$row[$jm6];



		$av=(($jm1+$jm2+$jm3+$jm4+$jm5+$jm6));
		
		
		
		
		?>
		
		
		
		
		
		
		
		<input type="text" name="av"   class="cpu_table" value=<?php echo $av; ?> >
		
          </div>
		  
		  
			<div style="width:70%">
              <div class="range"> <label>المحكم </label><?php echo  $username2;?>      <label>ملاحظات</label>
		.............................................</div>
          

			  <div class="range"> <label>التوقيع</label>.............................................</div>

			  <div class="range"> <label>التاريخ</label>.............................................</div>
         
<?php
    $myid = $_SESSION['id'];
  
  
     if($myid!=0){

		 ?>
     		 <button type="submit" formaction="export.php">ترحيل</button>
 
		 
	<?php
}

else{
	?>
	             <button type="submit" formaction="insert.php">حفظ</button>


<?php
}
	
	
?>
			 
            </div>
		  
		  
		        <fieldset>
				
				
				
				
    </form>
</div>



<?php }

	}}
	else{
		echo "<script>
alert('لايوجد رقم مماثل');
window.location.href='dataPage.php';
</script>";
		
	}

	
?>



</body>
  
 
</html>