   
   
   
   
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">

 
<!DOCTYPE html>

<html dir="rtl" lang="ar">

<?php
 include("config.php");
 session_start();
  $mycode =$_GET['Pcode']; 
  $_SESSION['code']=$mycode;
  $username= $_SESSION['username'];
  $userid = $_SESSION['userid'];

    $sql ="Select * from project WHERE code ='$mycode'and (j1id ='$userid' or j2id ='$userid' or j3id ='$userid')";
	
    $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result) > 0) {
		
		while($row = mysqli_fetch_array($result)){



	
?>
 
	
 
	

<head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
	* {
  box-sizing: border-box;
}

	
	.column {
  float: left;
  width: 50%;
  padding: 5px;
}
	.column1 {
  float: left;
  width: 25%;
  padding: 5px;
}
/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

	.cpu_table{
		 width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
	}
	
	
	
	
	tr>th:first-child,tr>td:first-child {
  background:  #6588e0;
  text-align: center;
    font-size: 20px;
    color: #fff;
}
	
	 .t1 tr:first-child td {
     background:  #6588e0;
  text-align: center;
    font-size: 20px;
    color: #fff;
}
	table.t1 {
    margin: 1em auto;
    border-collapse: collapse;
    font-family: Arial, Helvetica, sans-serif;
  }
  .t1 th, .t1 td {
    padding: 4px 8px;
	
  }
  .t1 thead th {
    background: #4f81bd;
    text-transform: lowercase;
    text-align: left;
    font-size: 20px;
    color: #fff;
  }
  .t1 tr {
    border-right: 1px solid #95b3d7;
	border-left: 1px solid #95b3d7;


  }
  .t1 tbody tr {
    border-bottom: 1px solid  #f5f8fc;
	border-left: 1px solid #f5f8fc;
  }
  .t1 tbody tr:nth-child(odd) {
    background: #dbe5f0;
  }
  
  .t1 tbody th, .t1 tbody tr:nth-child(even) td {
    border-right: 1px solid #092342;
	border-left: 1px solid #95b3d7;
  }
  
  .t1 tbody th, .t1 tbody tr:nth-child(odd) td {
    border-right: 1px solid #092342;
	border-left: 1px solid #95b3d7;

  }
  
  .t1 tfoot th {
    background: #4f81bd;
    text-align: left;
    font-weight: normal;
    font-size: 10px;
    color: #fff;
  }
  .t1 tr *:nth-child(3), .t1 tr *:nth-child(4) {
    text-align: right;
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
      color: #6588e0;
      }
      .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
      }
      form {
      width: 100%;
      padding: 2px;
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
      color: #6588e0;
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
      background: #6588e0; 
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
	  div {
  margin-bottom: 10px;
}

input:invalid + span::after {
  content: "✖";
  padding-left: 5px;
}

input:valid + span::after {
  content: "✓";
  padding-left: 5px;
}

     
	 
	  
 
    </style>
  </head>
 







<body >


  <?php 
	
    $av=0;
  		
	if($row['j1id']==$_SESSION['userid']){
	  $_SESSION['role'] = "1";
      $av=$row['av1m'];
		
	}
	else if($row['j2id']==$_SESSION['userid']){
			  $_SESSION['role'] = "2";
              $av=$row['av2m'];
	}
	
    else if($row['j3id']==$_SESSION['userid']){
			  $_SESSION['role'] = "3";
			  $av=$row['av3m'];

		
	}     
   
  ?>
  
  
  
  <?php 
  
  if($row['eng']){ ?>
 


<div class="row">
  <div class="column1">
    <img src="logo2.png" alt="isef" style="float:left; width:150px; height:150px">
  </div>
  <div class="column" >    
  
   
	
    <div class="column" >     
       <input  style="border: 2px solid ; border-radius: 5px; padding: 20px;  width: 150px; " type="text"  id="av" name="av"    value=<?php echo $av; ?> >
       <label style=" display: inline-block; width: 150px;   text-align: center;  "><strong>العلامه الكلية </strong> </label>
    </div>
	
	
	 <div class="column" >     
	   <label style="border: 2px solid ; border-radius: 5px; padding: 20px; display: inline-block;  width: 150px;text-align: right;  "><?php echo $mycode ;?> </label>  
	   <label style=" display: inline-block; width: 150px;   text-align: center;  "><strong>رمز المشروع </strong></label>
    </div>	
	
	
  </div>
  <div class="column1">
    <img src="logo1.png" alt="moe" style=" width:150px; height:150px">
  </div>
</div>
   <div class="main-block">

    <form  method="post">
   <div >
      
     
	 <label><br>معرض فلسطين للعلوم والتكنولوجيا 2023
         <br>نموذج تحكيم المشاريع الهندسيه<label>
		          </div >

           <fieldset>

        <div  class="account-details">
		<table  class="t1" style="width:100%">
		
    <tr>
        <td>البند</td>
        <td>الجزئية</td>
        <td>فردي</td>
        <td>جماعي</td>
        <td>ملاحظات </td>
    </tr>
	
	
	
	
	
	
	
    <tr>
        <td>الاول </td>
        <td style="font-weight: bold;font-size: 120%;">الابداع:</td>
        <td style="font-weight: bold;font-size: 120%;">30</td>
        <td style="font-weight: bold;font-size: 120%;">25</td>
        <td></td>
		
    </tr>
	
	
	
	
	
	
	
	
	
    <tr>
        <td></td>
        <td><p><br>هل يظهر المشروع قدرة إبداعية واصالة في الاسئلة المطروحة؟
		       <br> نهج مبتكر لحل المشكلة، وتحليل البيانات، وتفسير البيانات؟ استخدام المعدات، بناء أو تصميم معدات جديدة؟
			   <br>هل يدعم البحث الإبداعي التحقيق ويساعد في الإجابة على السؤال بطريقة أصلية؟
			   <br>تعزز المساهمة الإبداعية طريقة فعالة وموثوقة لحل مشكلة ما،عند تقييم المشاريع من المهم التمييز بين التوجيه والإبداع.
		</td>
       
        
        <?php 
		 $jm1="j". $_SESSION['role']."m1";
		if($row['team']){ ?>
        <td> </td>
		<td style="width:100;height: 40px "> <input  type="number" style="width:100%; height:80%" id="jm1"    min="0" max="25"  name="j<?php echo $_SESSION['role'];?>m1"   value=<?php echo  $row[$jm1];  ?> > </td> 
		<span class="validity"></span>
		<?php    }
		else{
		 ?>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100% ; height:80%" id="jm1"    min="0" max="30"  name="j<?php echo $_SESSION['role'];?>m1"   value=<?php echo  $row[$jm1];  ?> >
				<span class="validity"></span>

		</td> 
		<td> </td>
		<?php }?>
        <td></td>
     </tr>
	 
	 
	 
	 
	 
	 
	 <tr >
        <td>الثاني</td>
        <td><p style="font-weight: bold;"> الفكر العلمي,الاهداف الهندسية :</p> اذا كان مشروعا هندسيا ,فأ،الاسئلة الاكثر ملاءمة هي تلك الموجودة في دليل الاهداف الهندسية .</td>
        <td style="font-weight: bold;font-size: 120%;">30</td>
        <td style="font-weight: bold;font-size: 120%;">25</td>
        <td></td>
        
    </tr>
	
	
	
	
    <tr style="background: #a6a8ad;">
        <td style="background: #a6a8ad;">الفكر العلمي</td>
        <td><p><br>1.هل المشكلة مذكورة بوضوح وبشكل لا لبس فيه؟
		    <br>2.هل مشكلة البحث محددة وواضحة؟ للسماح بالتحري عنها بمنهجية صحيحة ومعقولة؟
			<br>3. هل كانت هناك خطة إجرائية للتوصل إلى حل؟
			<br>4. هل المتغيرات معترف بها ومحددة بوضوح؟
			<br>5.إذا كانت الضوابط ضرورية، فهل أدرك الطالب حاجته وهل تم استخدامها بشكل صحيح؟
			<br>6. هل توجد بيانات كافية لدعم الاستنتاجات؟
			<br>7. هل يتعرف المتسابق أو الفريق على قيود البيانات؟
			<br>8. هل يتفهم المتسابق/ الفريق علاقة المشروع بالبحوث ذات الصلة؟
			<br>9. هل لدى المتسابق/ الفريق: فكرة عن البحث الإضافي المطلوب؟
			<br>10. هل استدل المتسابق/الفريق: بمؤلفات علمية وأوراق بحثية ، أم اكتفى بالأدب الشعبي فقط (الصحف المحلية، ويكبيديا).
			</p>
		</td>
       
        <td style="width:100 ">  </td>
		<td style="width:100 ">  </td>
        <td></td>

    </tr>
	

    
 

   
    <tr>
        <td>الاهداف الهندسية</td>
        <td><p><br>1.هل لمشروع له هدف واضح؟
            <br>2.هل الهدف وثيق الصلة باحتياجات المستخدم المحتملة؟
			<br>3.هل الحل عملي ومقبول للمستخدم المحتمل ومجدي اقتصادياً؟
			<br>4. هل يمكن استخدام الحل بنجاح في تصميم أو بناء منتج نهائي؟
			<br>5. هل يمثل الحل تحسناً ملحوظاً مقارنة لابدائل السابقة؟
			<br>6. هل تم اختيار أداء الحل في ظل ظروف الاستخدام؟</p>
		</td>
		<?php $jm2="j". $_SESSION['role']."m2";?>
		 <?php 
		
		if($row['team']){ ?>
        <td> </td>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100%; height:80% " id="jm2"    min="0" max="25"  name="j<?php echo $_SESSION['role'];?>m2"   value=<?php echo  $row[$jm2];  ?> >
				<span class="validity"></span>

		<?php    }
		else{ ?>
		<td style="width:100;height: 40px "> <input  type="number" style="width:100% ; height:80%" id="jm2"    min="0" max="30"  name="j<?php echo $_SESSION['role'];?>m2"   value=<?php echo  $row[$jm2];  ?> > </td>
				<span class="validity"></span>

		<td> </td>
		<?php }?>
		
        <td></td>
      
       
	
    </tr>
	
	
	
    <tr>
        <td>الثالث</td>
        <td style="font-weight: bold;font-size: 120%;">الدقة: </td>
        <td style="font-weight: bold;font-size: 120%;">15</td>
        <td style="font-weight: bold;font-size: 120%;">12</td>
        <td></td>
      
    </tr>
	
	
    <tr>
        <td></td>
        <td><p><br>1. هل تم تنفيذ الغرض حتى الانتهاء ضمن نطاق البحث؟
		        <br> 2.إلى أي مدى تمت تغطية المشكلة بالكامل؟
		        <br>3. هل الاستنتاجات مبنية على تجربة واحدة أو تكرار؟
				<br>4. ما مدى اكتمال وثائق المشروع؟
				<br>5. هل المتسابق/ الفريق على دراية بالمقاربات أو النظريات الأخرى؟
				<br>6. ما هو الوقت الذي أمضاه المتسابق/الفريق في المشروع؟
				<br>7. ما هو الوقت الذي أمضاه المتسابق/الفريق في المشروع؟
		        <br>8. هل المتسابق/الفريق على دراية بالدراساتالسابقة في المجال المدروس؟
	    </td>		
		
        <?php $jm3="j". $_SESSION['role']."m3";?>

         <?php 
		
     if($row['team']){ ?>
         <td> </td>
		<td style="width:100;height: 40px "> <input  type="number" style="width:100% ; height:80%" id="jm3"    min="0" max="12"  name="j<?php echo $_SESSION['role'];?>m3"   value=<?php echo  $row[$jm3];  ?> >
				<span class="validity"></span>

		<?php    }
		else{     ?>
		<td style="width:100;height: 40px "> <input style="width:100% ; height:80%" id="jm3" type="number"  min="0" max="15"  name="j<?php echo $_SESSION['role'];?>m3"   value=<?php echo  $row[$jm3];  ?> > </td>
				<span class="validity"></span>

		<td> </td>
		
		<?php }?>
        <td></td>
		
    <tr>
        <td>الرابع </td>
        <td style="font-weight: bold;font-size: 120%;">المهارة:</td>
        <td style="font-weight: bold;font-size: 120%;">15</td>
        <td style="font-weight: bold;font-size: 120%;">12</td>
        <td></td>
        
    </tr>
    <tr>
        <td></td>
        <td><p><br>1.هل يمتلك المتسابق/ الفريق المهارات المطلوبة في المختبر والحساب والمراقبة والتصميم للحصول على البيانات الداعمة؟
               <br>2.أين تم تنفيذ المشروع؟(منزل، مختبر مدرسي، مختبر جامعة) هل تلقى الطالب أو الفريق مساعدة من الوالدين أو المعلمين أو العلماء أو المهندسين؟
			   <br>3.هل اكتمل المشروع تحت إشراف شخص بالغ، أم أن الطالب / الفريق عمل بمفرده إلى حد كبير؟
			   <br>4.من أين أتت المعدات؟ هل تم بناؤه بشكل مستقل من قبل المتسابق أو الفريق؟ هل تم الحصول عليها على سبيل الإعارة؟ هل كان جزءأً من مختبر حيث عمل المتسابق أو الفريق؟
			  </p>
        </td>
        <?php $jm4="j". $_SESSION['role']."m4";?>
        <?php 
		
      if($row['team']){ ?>       <td> </td>
		<td style="width:100 ;height: 40px "> <input  type="number" style="width:100% ; height:80%" id="jm4"    min="0" max="12"  name="j<?php echo $_SESSION['role'];?>m4"   value=<?php echo  $row[$jm4];  ?> >
				<span class="validity"></span>

		<?php    }
		else{?>		<td style="width:100;height: 40px "> <input style="width:100% ; height:80%" id="jm4" type="number"  min="0" max="15" name="j<?php echo $_SESSION['role'];?>m4"   value=<?php echo  $row[$jm4];  ?> >
		<span class="validity"></span>
		</td>
		<td> </td>
		<?php }?>
        <td></td>
    </tr>
	
	
    <tr>
        <td>الخامس</td>
        <td style="font-weight: bold;font-size: 120%;" >الوضوح:</td>
        <td style="font-weight: bold;font-size: 120%;">10</td>
        <td style="font-weight: bold;font-size: 120%;">10</td>
        <td></td>
       
    </tr>
	
	
	
    <tr>
        <td></td>
        <td><p><br>1.ما مدى وضوح مناقشة المتسابق أو الفريق للمشروع وشرح الغرض والإجراء والاستنتاجات؟ احترس من الأداء المحفوظ الذي يعكس القليل من الفهم للمبادئ.
		       <br>2.هل تعكس المادة المكتوبة فهم المتسابق او الفريق للبحث؟
			   <br>3.هل المراحل الهامة من المشروع مقدمة بطريقة منظمة؟
			   <br>4.ما مدى وضوح البيانات المقدمة؟
			   <br>5.ما مدى وضوح النتائج المعروضة؟
			   <br>6.إلى اي مدى توضح لوحة العرض المشروع؟
			   <br>7.هل تم العرض بطريقة صريحة وبدون حيل أو أدوات؟
			   <br>8.هل قام المتسابق او الفريق بتنفيذ جميع أعمال المشروع، أم هل قام أحدهم بالمساعدة؟
			   
		    </p>
		
		
		
		</td>
        <?php $jm5="j". $_SESSION['role']."m5";?>
        <?php 
		
      if($row['team']){ ?>        <td> </td>
		<td style="width:100;height: 40px "> <input  type="number" style="width:100% ; height:80%" id="jm5"    min="0" max="10"  name="j<?php echo $_SESSION['role'];?>m5"   value=<?php echo  $row[$jm5];  ?> >
				<span class="validity"></span>

		<?php    }
		else{     ?>
  		<td style="width:100;height: 40px "> <input style="width:100% ; height:80%" id="jm5" type="number"  min="0" max="10" name="j<?php echo $_SESSION['role'];?>m5"   value=<?php echo  $row[$jm5];  ?> >
		<span class="validity"></span>
		</td> 
		<td> </td>
		<?php }?>
       <td></td>
    </tr>


    <tr>
          <td>السادس</td>
        <td style="font-weight: bold;font-size: 120%;">فريق العمل: خاص بالمشروع الجماعي</td>
		<?php if($row['team']){ ?>
		<td style="font-weight: bold;font-size: 120%;">0</td>
        <td style="font-weight: bold;font-size: 120%;">16</td>
		<?php }else{?>
		<td style="font-weight: bold;font-size: 120%;">0</td>
		<td></td>
		<?php }?>
        <td></td>
        
    </tr>
	
	
	
    <tr>
        <td></td>
        <td><p><br>1.هل مهام ومساهمات كل عضو في الفريق محددة بوضوح؟
		       <br>2.هل شارك كل عضو في الفريق بشكل كامل في المشروع، وهل كل عضو على دراية بجميع الجوانب؟
			   <br>3.هل يعكس العمل النهائي الجهود المنسقة لجميع أعضاء الفريق؟</p>
		</td>
		
        <?php $jm6="j". $_SESSION['role']."m6";?>
 <?php 
		
		if($row['team']){ ?>
         <td> </td>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100% ; height:80%" id="jm6"    min="0" max="16"  name="j<?php echo $_SESSION['role'];?>m6"   value=<?php echo  $row[$jm6];  ?> ></td>
				<span class="validity"></span>

		<?php    }
		else{
			
			?>

			<td><input hidden  type="number" style="width:100% ; height:80%" id="jm6"    min="0" max="16"  name="j<?php echo $_SESSION['role'];?>m6"   value=<?php echo  $row[$jm6];  ?> >

			<td> </td>
		<?php } ?>
        <td></td>
    </tr>
   
</table>
		

		<?php     

	    $jm1=(int)$row[$jm1];
	   	$jm2=(int)$row[$jm2];
	    $jm3=(int)$row[$jm3];
	    $jm4=(int)$row[$jm4];
	    $jm5=(int)$row[$jm5];
	    $jm6=(int)$row[$jm6];


		$av=(($jm1+$jm2+$jm3+$jm4+$jm5+$jm6));
		
		echo "&&&&&&&". $av;
		
		
		?>
			
		<script> 
   //var jm1 =  parseInt($('#jm1').val()); 
 $(document).ready(function(){

   $(function(){ 
   $('#jm1').keyup(function () { 
   $('#av').val('0'); 
    var  jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 
 });
 
 
}); 



     $(function(){ 
   $('#jm2').keyup(function () { 
   $('#av').val('0'); 

     var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 
	

 }); 
}); 




     $(function(){ 
   $('#jm3').keyup(function () { 
  $('#av').val('0'); 

    var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 

 }); 
}); 



     $(function(){ 
   $('#jm4').keyup(function () { 
  $('#av').val('0'); 

    var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 
 
 }); 
}); 



     $(function(){ 
   $('#jm5').keyup(function () { 
 $('#av').val('0'); 

    var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 

 }); 
}); 

     $(function(){ 
   $('#jm6').keyup(function () { 
  $('#av').val('0'); 

    var  jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 
 }); 
}); 
});

 
</script>
		
          </div>
		  
		  
			<div style="width:70%">
              <div class="range"> <label>المحكم </label><?php echo $username;?>      <label>ملاحظات</label>
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

<script>
var input = document.getElementById('jm1');
/*
input.oninvalid = function(event) {
	event.target.setCustomValidity('العلامه من 0-25');
}*/




</script>








 <?php }
 
else { 
 
    $av=0;
  		
	if($row['j1id']==$_SESSION['userid']){
	  $_SESSION['role'] = "1";
      $av=$row['av1m'];
		
	}
	else if($row['j2id']==$_SESSION['userid']){
			  $_SESSION['role'] = "2";
              $av=$row['av2m'];
	}
	
    else if($row['j3id']==$_SESSION['userid']){
			  $_SESSION['role'] = "3";
			  $av=$row['av3m'];

		
	}     
 
 
 
 
 
 
 
 
 
        
?>


  

  <div class="row">
  <div class="column1">
    <img src="logo2.png" alt="isef" style="float:left; width:150px; height:150px">
  </div>
  <div class="column" >    
  
   
	
    <div class="column" >     
       <input  style="border: 2px solid ; border-radius: 5px; padding: 20px;  width: 150px; " type="text"  id="av" name="av"    value=<?php echo $av; ?> >
       <label style=" display: inline-block; width: 150px;   text-align: center;  "><strong>العلامه الكلية </strong> </label>
    </div>
	
	
	 <div class="column" >     
	   <label style="border: 2px solid ; border-radius: 5px; padding: 20px; display: inline-block;  width: 150px;text-align: right;  "><?php echo $mycode ;?> </label>  
	   <label style=" display: inline-block; width: 150px;   text-align: center;  "><strong>رمز المشروع </strong></label>
    </div>	
	
	
  </div>
  <div class="column1">
    <img src="logo1.png" alt="moe" style=" width:150px; height:150px">
  </div>
</div>
   <div class="main-block">

    <form  method="post">
   <div >
      
     
	 <label><br>معرض فلسطين للعلوم والتكنولوجيا 2023
         <br>نموذج تحكيم المشاريع النظرية<label>
		          </div >

           <fieldset>

        <div  class="account-details">
		<table  class="t1" style="width:100%">
		
    <tr>
        <td>البند</td>
        <td>الجزئية</td>
        <td>فردي</td>
        <td>جماعي</td>
        <td>ملاحظات </td>
    </tr>
	
	
	
	
	
	
	 <tr>
        <td>الاول </td>
        <td style="font-weight: bold;font-size: 120%;">الابداع:</td>
        <td style="font-weight: bold;font-size: 120%;">30</td>
        <td style="font-weight: bold;font-size: 120%;">25</td>
        <td></td>
		
    </tr>
	
	
	
	
	
	
	
	
	
    <tr>
        <td></td>
        <td><p><br>هل يظهر المشروع قدرة إبداعية واصالة في الاسئلة المطروحة؟
		       <br> نهج مبتكر لحل المشكلة، وتحليل البيانات، وتفسير البيانات؟ استخدام المعدات، بناء أو تصميم معدات جديدة؟
			   <br>هل يدعم البحث الإبداعي التحقيق ويساعد في الإجابة على السؤال بطريقة أصلية؟
			   <br>تعزز المساهمة الإبداعية طريقة فعالة وموثوقة لحل مشكلة ما،عند تقييم المشاريع من المهم التمييز بين التوجيه والإبداع.
		</td>
       
        
        <?php 
		 $jm1="j". $_SESSION['role']."m1";
		if($row['team']){ ?>
        <td> </td>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100%;height: 80% " id="jm1"    min="0" max="25"  name="j<?php echo $_SESSION['role'];?>m1"   value=<?php echo  $row[$jm1];  ?> >
		<span class="validity"></span>
 </td> 
		<?php    }
		else{
		 ?>
	
		
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100%;height: 80% " id="jm1"    min="0" max="30"  name="j<?php echo $_SESSION['role'];?>m1"   value=<?php echo  $row[$jm1];  ?> >
				<span class="validity"></span>
</td> 
		<td> </td>
		<?php }?>
        <td></td>
     </tr>
	 
	 
	 
	 
	 
	 
	 <tr >
        <td>الثاني</td>
        <td><p style="font-weight: bold;"> الفكر العلمي,الاهداف الهندسية :</p> اذا كان مشروعا هندسيا ,فأ،الاسئلة الاكثر ملاءمة هي تلك الموجودة في دليل الاهداف الهندسية .</td>
        <td style="font-weight: bold;font-size: 120%;">30</td>
        <td style="font-weight: bold;font-size: 120%;">25</td>
        <td></td>
        
    </tr>
	
	
	
    <tr >
        <td>الفكر العلمي</td>
        <td><p><br>1.هل المشكلة مذكورة بوضوح وبشكل لا لبس فيه؟
		    <br>2.هل مشكلة البحث محددة وواضحة؟ للسماح بالتحري عنها بمنهجية صحيحة ومعقولة؟
			<br>3. هل كانت هناك خطة إجرائية للتوصل إلى حل؟
			<br>4. هل المتغيرات معترف بها ومحددة بوضوح؟
			<br>5.إذا كانت الضوابط ضرورية، فهل أدرك الطالب حاجته وهل تم استخدامها بشكل صحيح؟
			<br>6. هل توجد بيانات كافية لدعم الاستنتاجات؟
			<br>7. هل يتعرف المتسابق أو الفريق على قيود البيانات؟
			<br>8. هل يتفهم المتسابق/ الفريق علاقة المشروع بالبحوث ذات الصلة؟
			<br>9. هل لدى المتسابق/ الفريق: فكرة عن البحث الإضافي المطلوب؟
			<br>10. هل استدل المتسابق/الفريق: بمؤلفات علمية وأوراق بحثية ، أم اكتفى بالأدب الشعبي فقط (الصحف المحلية، ويكبيديا).
			</p>
		</td>
       
       <?php $jm2="j". $_SESSION['role']."m2";?>
	   <?php 
		if($row['team']){ ?>
        <td> </td>
        <td style="width:100 ;height: 40px"> <input  type="number" style="width:100% ;height: 80%" id="jm2"    min="0" max="25"  name="j<?php echo $_SESSION['role'];?>m2"   value=<?php echo  $row[$jm2];  ?> >
		<span class="validity"></span>
		</td>
		
		<?php }
		
		
		else{?>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100% ;height: 80%" id="jm2"    min="0" max="30"  name="j<?php echo $_SESSION['role'];?>m2"   value=<?php echo  $row[$jm2];  ?> >
				<span class="validity"></span>
        </td>
		<td> </td>
		
		<?php }?>
        
        <td></td>
    </tr>
	

    
 

   
    <tr style="background: #a6a8ad;">
        <td style="background: #a6a8ad;">الاهداف الهندسية</td>
        <td><p><br>1.هل لمشروع له هدف واضح؟
            <br>2.هل الهدف وثيق الصلة باحتياجات المستخدم المحتملة؟
			<br>3.هل الحل عملي ومقبول للمستخدم المحتمل ومجدي اقتصادياً؟
			<br>4. هل يمكن استخدام الحل بنجاح في تصميم أو بناء منتج نهائي؟
			<br>5. هل يمثل الحل تحسناً ملحوظاً مقارنة لابدائل السابقة؟
			<br>6. هل تم اختيار أداء الحل في ظل ظروف الاستخدام؟</p>
		</td>
        <td></td>
        <td></td>
		<td></td>
       
	
    </tr>
	
	
  <tr>
        <td>الثالث</td>
        <td style="font-weight: bold;font-size: 120%;">الدقة: </td>
        <td style="font-weight: bold;font-size: 120%;">15</td>
        <td style="font-weight: bold;font-size: 120%;">12</td>
        <td></td>
      
    </tr>
	
	
    <tr>
        <td></td>
        <td><p><br>1. هل تم تنفيذ الغرض حتى الانتهاء ضمن نطاق البحث؟
		        <br> 2.إلى أي مدى تمت تغطية المشكلة بالكامل؟
		        <br>3. هل الاستنتاجات مبنية على تجربة واحدة أو تكرار؟
				<br>4. ما مدى اكتمال وثائق المشروع؟
				<br>5. هل المتسابق/ الفريق على دراية بالمقاربات أو النظريات الأخرى؟
				<br>6. ما هو الوقت الذي أمضاه المتسابق/الفريق في المشروع؟
				<br>7. ما هو الوقت الذي أمضاه المتسابق/الفريق في المشروع؟
		        <br>8. هل المتسابق/الفريق على دراية بالدراساتالسابقة في المجال المدروس؟
	    </td>		
		
        <?php $jm3="j". $_SESSION['role']."m3";?>

         <?php 
		
		if($row['team']){ ?>
         <td> </td>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100%;height: 80% " id="jm3"    min="0" max="12"  name="j<?php echo $_SESSION['role'];?>m3"   value=<?php echo  $row[$jm3];  ?> >
				<span class="validity"></span>

		<?php    }
		else{     ?>
		<td style="width:100 ;height: 40px"> <input style="width:100%;height: 80% " id="jm3" type="number"  min="0" max="15"  name="j<?php echo $_SESSION['role'];?>m3"   value=<?php echo  $row[$jm3];  ?> >
				<span class="validity"></span>
        </td>
		<td> </td>
		
		<?php }?>
        <td></td>
		
    <tr>
        <td>الرابع </td>
        <td style="font-weight: bold;font-size: 120%;">المهارة:</td>
        <td style="font-weight: bold;font-size: 120%;">15</td>
        <td style="font-weight: bold;font-size: 120%;">12</td>
        <td></td>
        
    </tr>
    <tr>
        <td></td>
        <td><p><br>1.هل يمتلك المتسابق/ الفريق المهارات المطلوبة في المختبر والحساب والمراقبة والتصميم للحصول على البيانات الداعمة؟
               <br>2.أين تم تنفيذ المشروع؟(منزل، مختبر مدرسي، مختبر جامعة) هل تلقى الطالب أو الفريق مساعدة من الوالدين أو المعلمين أو العلماء أو المهندسين؟
			   <br>3.هل اكتمل المشروع تحت إشراف شخص بالغ، أم أن الطالب / الفريق عمل بمفرده إلى حد كبير؟
			   <br>4.من أين أتت المعدات؟ هل تم بناؤه بشكل مستقل من قبل المتسابق أو الفريق؟ هل تم الحصول عليها على سبيل الإعارة؟ هل كان جزءأً من مختبر حيث عمل المتسابق أو الفريق؟
			  </p>
        </td>
        <?php $jm4="j". $_SESSION['role']."m4";?>
        <?php 
		
		if($row['team']){ ?>
        <td> </td>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100%;height: 80% " id="jm4"    min="0" max="12"  name="j<?php echo $_SESSION['role'];?>m4"   value=<?php echo  $row[$jm4];  ?> >
				<span class="validity"></span>

		<?php    }
		else{?>		<td style="width:100;height: 40px "> <input style="width:100%;height: 80% " id="jm4" type="number"  min="0" max="15" name="j<?php echo $_SESSION['role'];?>m4"   value=<?php echo  $row[$jm4];  ?> >
		<span class="validity"></span>
		</td>
		<td> </td>
		<?php }?>
        <td></td>
    </tr>
	
	
    <tr>
        <td>الخامس</td>
        <td style="font-weight: bold;font-size: 120%;" >الوضوح:</td>
        <td style="font-weight: bold;font-size: 120%;">10</td>
        <td style="font-weight: bold;font-size: 120%;">10</td>
        <td></td>
       
    </tr>
	
	
	
    <tr>
        <td></td>
        <td><p><br>1.ما مدى وضوح مناقشة المتسابق أو الفريق للمشروع وشرح الغرض والإجراء والاستنتاجات؟ احترس من الأداء المحفوظ الذي يعكس القليل من الفهم للمبادئ.
		       <br>2.هل تعكس المادة المكتوبة فهم المتسابق او الفريق للبحث؟
			   <br>3.هل المراحل الهامة من المشروع مقدمة بطريقة منظمة؟
			   <br>4.ما مدى وضوح البيانات المقدمة؟
			   <br>5.ما مدى وضوح النتائج المعروضة؟
			   <br>6.إلى اي مدى توضح لوحة العرض المشروع؟
			   <br>7.هل تم العرض بطريقة صريحة وبدون حيل أو أدوات؟
			   <br>8.هل قام المتسابق او الفريق بتنفيذ جميع أعمال المشروع، أم هل قام أحدهم بالمساعدة؟
			   
		    </p>
		
		
		
		</td>
        <?php $jm5="j". $_SESSION['role']."m5";?>
        <?php 
		
		if($row['team']){ ?>
         <td> </td>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100%;height: 80% " id="jm5"    min="0" max="10"  name="j<?php echo $_SESSION['role'];?>m5"   value=<?php echo  $row[$jm5];  ?> >
				<span class="validity"></span>

		<?php    }
		else{     ?>
  		<td style="width:100;height: 40px "> <input style="width:100%;height: 80% " id="jm5" type="number"  min="0" max="10" name="j<?php echo $_SESSION['role'];?>m5"   value=<?php echo  $row[$jm5];  ?> >
		<span class="validity"></span>
		</td> 
		<td> </td>
		<?php }?>
       <td></td>
    </tr>


    <tr>
        <td>السادس</td>
        <td style="font-weight: bold;font-size: 120%;">فريق العمل: خاص بالمشروع الجماعي</td>
		<?php if($row['team']){ ?>
		<td style="font-weight: bold;font-size: 120%;">0</td>
        <td style="font-weight: bold;font-size: 120%;">16</td>
		<?php }else{?>
		<td style="font-weight: bold;font-size: 120%;">0</td>
		<td></td>
		<?php }?>
        <td></td>
       
      
    </tr>
	
	
	
    <tr>
        <td></td>
        <td><p><br>1.هل مهام ومساهمات كل عضو في الفريق محددة بوضوح؟
		       <br>2.هل شارك كل عضو في الفريق بشكل كامل في المشروع، وهل كل عضو على دراية بجميع الجوانب؟
			   <br>3.هل يعكس العمل النهائي الجهود المنسقة لجميع أعضاء الفريق؟</p>
		</td>
		
        
        <?php $jm6="j". $_SESSION['role']."m6";?>
 <?php 
		
		if($row['team']){ ?>
         <td> </td>
		<td style="width:100 ;height: 40px"> <input  type="number" style="width:100% ; height:80%" id="jm6"    min="0" max="16"  name="j<?php echo $_SESSION['role'];?>m6"   value=<?php echo  $row[$jm6];  ?> ></td>
				<span class="validity"></span>

		<?php    }
		else{
			
			?>

			<td><input hidden  type="number" style="width:100% ; height:80%" id="jm6"    min="0" max="16"  name="j<?php echo $_SESSION['role'];?>m6"   value=<?php echo  $row[$jm6];  ?> >

			<td> </td>
		<?php } ?>
        <td></td>
    </tr>
   
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
		<script> 
       var jm6=<?php echo $jm6; ?>
       </script>
		
	 
	
		
			
		<script> 
   //var jm1 =  parseInt($('#jm1').val()); 
 $(document).ready(function(){
   $(function(){ 
   $('#jm1').keyup(function () { 
   $('#av').val('0'); 
    var  jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 
 });
 
 
}); 



     $(function(){ 
   $('#jm2').keyup(function () { 
   $('#av').val('0'); 

     var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 
	

 }); 
}); 




     $(function(){ 
   $('#jm3').keyup(function () { 
  $('#av').val('0'); 

    var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 

 }); 
}); 



     $(function(){ 
   $('#jm4').keyup(function () { 
  $('#av').val('0'); 

    var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 
 
 }); 
}); 



     $(function(){ 
   $('#jm5').keyup(function () { 
 $('#av').val('0'); 

    var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 

 }); 
}); 

     $(function(){ 
   $('#jm6').keyup(function () { 
  $('#av').val('0'); 

     var jm1= parseInt($('#jm1').val());
    var  jm2= parseInt($('#jm2').val());    
    var  jm3= parseInt($('#jm3').val());    
    var  jm4= parseInt($('#jm4').val());    
    var  jm5= parseInt($('#jm5').val());    
    var  jm6= parseInt($('#jm6').val());    
    
   var valThis =parseInt(jm1+jm2+jm3+jm4+jm5+jm6);

    $('#av').val(valThis); 
 }); 
}); 
});

 
</script>
		
          </div>
		  
		  
			<div style="width:70%">
              <div class="range"> <label>المحكم </label><?php echo $username;?>      <label>ملاحظات</label>
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
	

	
?>



</body>
  
 
</html>