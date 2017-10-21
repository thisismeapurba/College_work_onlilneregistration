<?php
 session_start();
 $handler=fopen("visitor_counter.txt","r");
 $unique_visitor_counter=(int)fread($handler,20);
 fclose($handler);
 if(!isset($_SESSION['unique_visitor']))
 {
  $unique_visitor_counter++;
  $_SESSION['unique_visitor']=$unique_visitor_counter;
 }
 $handler=fopen("visitor_counter.txt","w");
 fwrite($handler,$unique_visitor_counter);
 fclose($handler);
 
 
 ?>
 

 
<!DOCTYPE html>
<html>
<head>
   <title>Registration Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
			   $(document).ready(function () {
			   //Disable cut copy paste
			  $('body').bind('cut copy paste', function (e) {
				e.preventDefault();
			   });
		   
			//Disable mouse right click
			  $("body").on("contextmenu",function(e){
				return false;
			  });
			  
			   
			  			  });

  </script>
   <style type="text/css">
     .shadowStyle
	 {
		  box-shadow: 10px 10px 40px 5px gray;
		  background-color:cornsilk;
		  margin-top:20px;
		  border-style:outset;
		  margin: 20px;
	 }
	 
	 .logo
	 {
	  height:100px;
	 }
	 
	 .strip
	 {	
		border-radius: 10px;
		border: 2px solid cornsilk;
		height: 30px;
		background-color: #abc123;
		margin-bottom: 5px;
		text-align: center;
		color: #fff;
		font-family: bold;
		margin-top: 10px;
		font-size: 18px;
	 }
	 
	 .boxes
	 {
		background-color: #a3f7b1;
		height: 450px;
		margin-top: 5px;
		border: 2px solid cornsilk;
		border-radius: 8px;
	}
	
	.stripEnd
	{
		background-color: #ef2174;
	}
	
	.boxesEnd
	{
		background-color: khaki;
		border: 1px solid black;
	}
	 
   </style>
</head>
<body>
   <div class="container-fluid shadowStyle">
   
		 <div class="row ">
		    
		    <div class="col-xs-4">
				<img src="nitslogo.png" class="img-circle img-center img-responsive logo" > 
				<marquee><h3> <font color="green"> online registration portal</font></h3></marquee>
		    </div>
			
		   <div class="col-xs-8">
			<h1 class="text-right text-responsive"> National Institue of Technololgy,Silchar </br>Assam,India </br> 788010</h1>
		   </div>
		   
		 </div>
	
	 
		<div class="row ">
			<div class="col-xs-4 strip stripEnd">
				Registration Part
			</div>
			  
			<div class="col-xs-4 strip stripMiddle">
				Instructions To Candidates
			</div>
		   
		   <div class="col-xs-4 strip stripEnd">
				Login Part
		   </div>	
		
		</div>
		
		
		<div class="row">
			
			<div class="col-xs-4 boxes boxesEnd">
				<h2>New! Create an Account </h2>
				
				<form name="signup_form" action="signup.php" method="post">
					<b>Scholar Id :</b> &nbsp; <input type="text" name="id_n" placeholder="Scholar id" required oninput="updateMessage(this)" ><br><br>
					<script>
		             document.signup_form.id_n.setCustomValidity("Enter your Scholar ID !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
					<b>Password :</b> &nbsp; <input type="password" name="pwd" placeholder="password" required oninput="updateMessage(this)" ><br><br>
					<script>
		             document.signup_form.pwd.setCustomValidity("Enter your Password !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
					<b>Captcha :</b> &nbsp &nbsp; <input type="text" name="cap" required placeholder="captcha" oninput="updateMessage(this)"> &nbsp <img src='captcha_signup.php'><br><br>
					<script>
		             document.signup_form.cap.setCustomValidity("Enter Captcha Code!!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
					 
						<center><input class="btn btn-primary" name="check" type="submit" value="signup"></center>
				</form>
			
			</div>
		
			<div class="col-xs-4 boxes ">
			</div>
			
			<div class="col-xs-4 boxes boxesEnd">
				<h1>Login To Your Account </h1>
					<br>
				<form name="login_form" action="login.php" method="post">
					<b>Name :</b> &emsp; &emsp; <input type="text" name="name" title="enter your name" placeholder="Name" oninput="updateMessage(this)"required pattern="^[A-Zz-a]+"><br><br>
					<script>
		             document.login_form.name.setCustomValidity("Enter your Name !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
					<b>Scholar Id :</b> &nbsp; <input type="text" name="id" placeholder="Scholar Id"required oninput="updateMessage(this)" ><br><br>
					<script>
		             document.login_form.id.setCustomValidity("Enter your Scholar ID !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
					<b>Password :</b> &nbsp; <input type="password" name="password" placeholder="Password" required oninput="updateMessage(this)"><br><br>
					<script>
		             document.login_form.password.setCustomValidity("Enter your Valid password !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
					 <b>Captcha :</b> &nbsp &nbsp; <input type="text" name="cap1" required placeholder="captcha" oninput="updateMessage(this)"> &nbsp <img src='captcha_login.php'><br><br> 
					<script>
		             document.signup_form.cap.setCustomValidity("Enter Captcha Code !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
					 
						<center><input class="btn btn-primary" name="check1" type="submit"  value="Login"></center>
				</form>
			
			</div>
			
		</div>
		
		<div class="row text-center" style="background-color:#17202A; margin-top:10px;color:#fff;height:30px;">
		 unique visitor counter: <?php echo $unique_visitor_counter; ?> 
		</div>  
	 
	</div>
	
</body>
</html>
