<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #136532;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      label {
      padding: 0 5px;
      text-align: right;
      vertical-align: middle;
      }
      h1 {
      text-align:center;
      font-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: right;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:right;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
	  .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
  }
    </style>
  </head>
  <body>
	<form action="login.php" method = "post">
	 <div class="column" style="padding:50px" >
	 <img  src="JoYS Logo - Transparent.png" alt="moe" style="margin-left: 100PX;margin-right: 100PX;width: 50%;width:300px; height:100px">
     </div>
	    <h1>تسجيل الدخول</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label"><strong>اسم المستخدم</strong></label>
        <input type="text" placeholder="ادخل اسم المستخدم" name="username" required>
        <label for="psw"><strong>كلمة المرور</strong></label>
        <input type="password" placeholder="ادخل كلمة المرور" name="password" required>
      </div>
      <button type="submit" name="login" value="submit">تسجيل دخول </button>
    </form>
  </body>
</html>