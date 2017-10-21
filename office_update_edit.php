<?php
  session_start();
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ajd');
  $id=$_SESSION['nxtpg'];
  $q ="select * from student where scholar_id='$id' ";
  $res=mysqli_query($con,$q);
  $name=$_SESSION['name'];
  $registration=$_SESSION['registration'];
  $father=$_SESSION['father'];
  $mother=$_SESSION['mother'];
  $guardian=$_SESSION['guardian'];
  $blood=$_SESSION['blood'];
  $mobile=$_SESSION['mobile'];
  $email=$_SESSION['email'];
  $programme=$_SESSION['programme'];
  $branch=$_SESSION['branch'];
  $religion=$_SESSION['religion'];
  $address=$_SESSION['address'];
  $category=$_SESSION['category'];
  $doj=$_SESSION['doj'];
  $dob=$_SESSION['dob'];
  $gender=$_SESSION['gender'];
  
  mysqli_close($con);
?>


<html>
<head>
	<title>Official data Update</title>
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
			height: 100px;
		}
		
		#add
		{
			border: 1px solid black;
		}
		
		#stud
		{
			border-right: 1px solid black;
		}
		
		
	
	</style>
	
	 <script>
		
		function fillMtd()
 		{

    		var alu = document.InputForm.name;
    		var registration = document.InputForm.registration;
			var father = document.InputForm.father;
			var mother = document.InputForm.mother;
			var guardian= document.InputForm.guardian;
    		var blood = document.InputForm.blood;
    		var mobile= document.InputForm.mobile;
    		var email= document.InputForm.email;
    		var programme= document.InputForm.programme;
			var doj = document.InputForm.doj;
			var dob = document.InputForm.dob;
			var branch = document.InputForm.branch;
			var religion = document.InputForm.religion;
			var address = document.InputForm.address;
			var category = document.InputForm.category;
			var gender = document.InputForm.gender;

			
			
    	
    		alu.value="<?php echo"$name"; ?>";
    		registration.value="<?php echo"$registration"; ?>";
    		father.value="<?php echo" $father"; ?>";
    		mother.value="<?php echo" $mother"; ?>";
    		guardian.value="<?php echo"$guardian"; ?>";
    		blood.value="<?php echo"$blood"; ?>";
    		mobile.value="<?php echo"$mobile"; ?>";
    		email.value="<?php echo"$email"; ?>";
    		programme.value="<?php echo"$programme"; ?>";
    		branch.value="<?php echo"$branch"; ?>";
    		religion.value="<?php echo"$religion"; ?>";
    		address.value="<?php echo"$address"; ?>";
			category.value="<?php echo"$category"; ?>";
			doj.value="<?php echo"$doj"; ?>";
			dob.value="<?php echo"$dob"; ?>";
			gender.value="<?php echo"$gender"; ?>";
    	
			
		}
		

    </script>
	

	
	
</head>
<body onload="fillMtd()">
  
	<center><h2>ONLY FOR OFFICE USE </h2></center>
	<center><h3>STUDENT  REGISTRATION FORM</h3></center>
	<center><h3>NATIONAL INSTITUTE OF TECHNOLOG :: SILCHAR </h3></center>
  <marquee> <h4 style="margin-bottom:0px;margin-top:0px;"><font color="green" > officials data Update</font></h4></marquee>
	<hr>
	
	<div class="container">
	
	
		
		
		
		<form name="InputForm" action="update_data.php" method="post">

			1)<b>Name</b> : <input type="text" name="name" class="myClass"><br><br>
			2)<b>Category</b> : 
					<input type="radio" name="category" value="OP">OP
					<input type="radio" name="category" value="SC">SC
					<input type="radio" name="category" value="ST">ST
					<input type="radio" name="category" value="OBC">OBC
					<input type="radio" name="category" value="Gen">Gen
					<input type="radio" name="category" value="PwD">PwD
					<br><br>
			
			3)<b>Sex</b> : 
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other
				
				<br><br>
				
		4)<b>Registration No.</b> :<input type="text" name="registration" readonly><span style="color:red">*ReadOnly</span>
				
				<br><br>
			
		5)<b>Father's Name</b> :<input type="text" name="father" >
				
				<br><br>
		
		6)<b>Mother's Name</b> :<input type="text" name="mother" >
				
				<br><br>
			
		7)<b>Guardian's Name</b> :<input type="text" name="guardian" >
				
				<br><br>
			
		8)<b>Date Of Birth</b> :<input type="date" name="dob" >
				
				<br><br>

		9)<b>Blood Group</b> :<input type="text" name="blood" >
				
				<br><br>	
				
		10)<b>Mobile No.</b> :<input type="text" name="mobile" >
		          <br><br>
				 
		
		11)<b>E-mail</b> :<input type="text" name="email" >
				
				<br><br>
				
			
		12)<b>Programme</b> :
					<input type="text" name="programme" >
					
					<br><br>
					
		
		13)<b>Date Of Joining</b> : 
					<input type="date" name="doj" placeholder="dateOfJoining"> 
		
				<br><br>
				
		14)<b>Branch</b> : <input type="text" name="branch" >
				
				<br><br>
				
		15)<b>Religion</b> : <input type="text" name="religion" >
		       <br><br>
			   
			  
		16)<b>Address</b> : <input type="text" name="address" >
		
				<br><br>
			
		
		<center><input class="btn btn-primary" type="submit" name="" value="Update data"  ></center>	

         </form>
		

		
		</div>
	
	</div>
	
</body>
</html>
