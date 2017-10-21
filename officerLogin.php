<html>
<head>
	<title>Official data insert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  
	<style>
		.myClass
		{
			width: 500px;
		}
		
		.parentName
		{
			width: 300px;
		}
		
		textarea
		{
			width: 300px;
			height: 70px;
		}
		
		#add
		{
			border: 1px solid black;
		}
		
		#stud
		{
			border-right: 1px solid black;
		}
		
	
	 
	 .boxes
	 {
		background-color: #a3f7b1;
		height: 600px;
		margin-top: 5px;
		border: 2px solid cornsilk;
	}
	.boxes1
	 {
		background-color: #87DA8C;
		height: 600px;
		margin-top: 5px;
		border: 2px solid cornsilk;
	}

	.boxesEnd
	{
		background-color: khaki;
		border: 1px solid black;
	}
	
	
	.round
	{
		border-radius : 20px;
	}
	.round1
	{
		border-radius : 20px;
	}
	
	</style>
	
	

	
	
</head>
<body style="background-color:#f2f2f2" >
  
	<center><h2>ONLY FOR OFFICE USE </h2></center>
	<center><h3>OFFICER  REGISTRATION FORM</h3></center>
	<center><h3>NATIONAL INSTITUTE OF TECHNOLOG :: SILCHAR </h3></center>
  <marquee> <h4 style="margin-bottom:0px;margin-top:0px;"><font color="green" > officials data insertion</font></h4></marquee>
	<hr>
	
	<div class="container">
	
	<div class="row">
	 <div class="col-md-6 boxes round" style="padding-left:40px;border-right:8px solid white"  >
	 
		<center><h3><b>Sign Up</b> </h3></center><br>
		<form action="officer's_details.php" name="officers" method="post">
		
	<b>	1)Name :</b> &emsp;&emsp;&emsp;<input type="text" name="name" class="myClass" placeholder="Name" required oninput="updateMessage(this)"><br><br>
		             <script>
		             document.officers.name.setCustomValidity("Please Enter your name  !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
		
	<b>	2)Sex : </b>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other
				
				<br><br>
				
		
	<b>	3)Date Of Birth :</b><input type="date" name="dob" required  placeholder="Date of birth" oninput="updateMessage(this)">
				
				<br><br>
				<script>
		             document.officers.dob.setCustomValidity("Please Enter your Date of birth !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
				
			
	<b>	4)Blood Group :</b> <input type="text" name="blood" required placeholder="Blood group" oninput="updateMessage(this)">
				
				<br><br>
				<script>
		             document.officers.blood.setCustomValidity("Please Mention your blood group !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
	<b>	4)Designation :</b> <input type="text" name="desig" required placeholder="Designation" oninput="updateMessage(this)">
				
				<br><br>
				<script>
		             document.officers.desig.setCustomValidity("Please Mention your Designation !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>	
	<b>	5)Mobile No.</b> : &nbsp;<input type="text" name="mobile" required placeholder="mobile no" oninput="updateMessage(this)" >
		          <br><br>
				  <script>
		             document.officers.mobile.setCustomValidity("Please Mention your  contact number .!!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
	<b>	6)E-mail.</b>:&emsp;&emsp;<input type="email" name="email" placeholder="E-mail" oninput="updateMessage(this)">
				
				<br><br>
				<script>
		             document.officers.email.setCustomValidity("Kindly Mention your E-mail ID !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
		
 	<b>	7)Address :</b> <br> &emsp;&emsp;&emsp;&emsp;&emsp;<textarea rows="10" placeholder="Your Current Postal address" name="address" oninput="updateMessage(this)" ></textarea>
		
				<br><br>
				<script>
		             document.officers.address.setCustomValidity("Please provide your Postal address!!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
		<b>Captcha :</b> &nbsp &nbsp; <input type="text" name="cap" required placeholder="enter captcha" oninput="updateMessage(this)"> &nbsp <img src='captcha_signup.php'><br><br>
					<script>
		             document.officers.cap.setCustomValidity("Enter Captcha Code!!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
	
	
			<center><input class="btn btn-primary" type="submit" name="signup" value="SignUp"></center>	
			
		</form>
	 </div>
	 
	
	 <div class="cols-md-6 boxes1 round1 " style="text-align:center;padding-top:40px">
		
		<h3><b>LogIn</b> </h3><br>
		
		<form method="post" name="officers_signup" action=";;;;;;;;;;">
			
			<b>1)Name </b>: &emsp;&emsp;<input type="text" name="name" class="myClass" required placeholder="Name"  oninput="updateMessage(this)"><br><br>
		
		              <script>
		              document.officers_signup.name.setCustomValidity("Please Enter your name !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
			<b>2)Date Of Birth </b> :&nbsp;&nbsp;<input type="date" name="dob" required placeholder="Date of birth" oninput="updateMessage(this)">
					
					<br><br>
					<script>
		             document.officers_signup.dob.setCustomValidity("Please Enter yuor Date of birth !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
			
		 <b>3)Mobile No.</b> :&emsp;<input type="text" name="mobile" placeholder="mobile no " required  oninput="updateMessage(this)">
					  <br><br>
					  <script>
		             document.officers_signup.mobile.setCustomValidity("Please Enter your contact no. !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
					  
		<b>	4)Password </b>:&emsp;<input type="password" name="password" placeholder="password" required oninput="updateMessage(this)">
				  <br><br>
				  <script>
		             document.officers_signup.password.setCustomValidity("Please Enter your password  !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
		   <b>Captcha :</b> &nbsp &nbsp; <input type="text" name="cap1" required placeholder=" enter captcha" oninput="updateMessage(this)"> &nbsp <img src='captcha_login.php'><br><br> 
					<script>
		             document.officers_signup.cap.setCustomValidity("Enter Captcha Code !!! ")
			          function updateMessage(input){
				      if (input.value == "") {}
				      input.setCustomValidity('');
		           	 }
		             </script>
				  
				  
		
		<center><input class="btn btn-primary" type="submit" name="login" value="login"></center>
		
		
		</form>
	
	 </div>

	</div>	
		
	
	</div>
	
</body>
</html>
