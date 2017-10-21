<?php
  session_start();
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ajd');
  $id=$_SESSION['nxtpg'];
  $q ="select * from student where scholar_id='$id' ";
  $res=mysqli_query($con,$q);
  mysqli_close($con);
?>


<html>

<head>
	<title>Available Data </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css"> 

	<style>

	.container
	{
		padding-top: 20px;
		padding-bottom: 10px;
	}

	td
	{
		font-size: 16px;
	}

	td:first-child
	{
		font-family: bold;
		font-size: 20px;
	}

	</style>
	
</head>
<body>
   
 <div class="container">
	 
 	<center><h2>NATIONAL INSTITUTE OF TECHNOLOGY SILCHAR <br/> ASSAM, INDIA-788010 </h2></center>

 	<center><h2>Registered Student Data </h2></center>

 	<center><p style="font-size: 30px; color: red; background-color: lightblue"> OFFICE USE ONLY </p></center>


 	<table  class="table table-hover table-bordered table-condensed ">
	 	<thead >
	 			<tr class="warning">
	 				<th style="font-size: 20px"></th>
	 				<th style="font-size: 20px"></th>
	 			</tr>
	 	</thead>

	 	<tbody>
		<?php
		 //session_start();
		while($tbl=mysqli_fetch_assoc($res)){
	 	 echo "<tr>";
	 		 echo "<td><strong>Name</strong></td>";
			 $name_n=$tbl['name'];
			 $_SESSION['name']=$name_n;
	 		 echo "<td name='name'>".$name_n."</td>";
	 	 echo "</tr>";
        
	 	 echo "<tr>";
	 		echo "<td><strong>Category</strong></td>";
	 		echo "<td name='category'>".$tbl['category']."</td>";
			 $_SESSION['category']=$tbl['category'];
	 	 echo "</tr>";

	 	   echo "<tr>";
	 	   echo	"<td><strong>Sex</strong></td>";
	 	   echo "<td name='sex'>".$tbl['sex']."</td>";
		    $_SESSION['gender']=$tbl['sex'];
	 	echo "</tr>";

	 	echo "<tr>";
	 	   echo "<td><strong>Registration No.</strong></td>";
	 	   echo	"<td name='registration'>".$tbl['scholar_id']."</td>";
		    $_SESSION['registration']=$tbl['scholar_id'];
	 	echo "</tr>";

	 	echo "<tr>";
	 		echo "<td><strong>Father's Name</strong></td>";
	 		echo "<td name='father'>".$tbl['fathers_name']."</td>";
			  $_SESSION['father']=$tbl['fathers_name'];
	 	echo "</tr>";

	 	echo "<tr>";
	 		echo "<td><strong>Mother's Name</strong></td>";
	 		echo "<td name='mother'>".$tbl['mothers_name']."</td>";
			 $_SESSION['mother']=$tbl['mothers_name'];
	 	echo "</tr>";


	 	echo "<tr>";
	 		echo "<td><strong>Guardian's Name</strong></td>";
	 		echo "<td name='guardian'>".$tbl['guardains_name']."</td>";
			 $_SESSION['guardian']=$tbl['guardains_name'];
	 	echo "</tr>";

	 	echo "<tr>";
	 		echo "<td><strong>Date Of Birth</strong></td>";
	 		echo "<td name='dob'>".$tbl['dob']."</td>";
			 $_SESSION['dob']=$tbl['dob'];
	 	echo "</tr>";


	 	echo "<tr>";
	 		echo "<td><strong>Blood Group</strong></td>";
	 		echo "<td name='blood'>".$tbl['blood_group']."</td>";
			$_SESSION['blood']=$tbl['blood_group'];
	 	echo "</tr>";

	 	echo "<tr>";
	 		echo "<td><strong>Mobile No.</strong></td>";
	 		echo "<td name='mobile'>".$tbl['mobile']."</td>";
			$_SESSION['mobile']=$tbl['mobile'];
	 	echo "</tr>";

	 	echo "<tr>";
	 		echo "<td><strong>Programme </strong></td>";
	 		echo "<td name='programme'>".$tbl['programme']."</td>";
			$_SESSION['programme']=$tbl['programme'];
	 	echo "</tr>";

	 	echo "<tr>";
	 		echo "<td><strong>Date Of Joining</strong></td>";
	 		echo "<td name='doj'>".$tbl['date_of_adm']."</td>";
			$_SESSION['doj']=$tbl['date_of_adm'];
	 	echo "</tr>";

	 	echo "<tr>";
	 		echo "<td><strong>Branch</strong></td>";
	 		echo "<td name='branch'>".$tbl['branch']."</td>";
			$_SESSION['branch']=$tbl['branch'];
	 	echo "</tr>";

	 	echo "<tr>";
	 		echo "<td><strong>Religion</strong></td>";
	 		echo "<td name='religion'>".$tbl['relegion']."</td>";
			$_SESSION['religion']=$tbl['relegion'];
	 	echo "</tr>";
		
		echo "<tr>";
	 		echo "<td><strong>Email</strong></td>";
	 		echo "<td name='email'>".$tbl['email']."</td>";
			$_SESSION['email']=$tbl['email'];
	 	echo "</tr>";
		
		echo "<tr>";
	 		echo "<td><strong>Address</strong></td>";
	 		echo "<td name='address'>".$tbl['address']."</td>";
			$_SESSION['address']=$tbl['address'];
	 	echo "</tr>";
	 	}	
        ?>
	 	</tbody>


	 </table>

	 <div class="row" style="margin-top:50px;margin-bottom:50px">
			
		 <div class="col-xs-6 text-left" >
		    <button onclick="window.location.href='officeuse.html'" type="button" class="btn btn-primary "><span class="glyphicon glyphicon-chevron-left"></span>Enter new one</button>
		    </div>
		
		<div class="col-xs-6 text-right" >
		    <button onclick="window.location.href='office_update_edit.php'" type="button" class="btn btn-primary btn-right">Edit<span class="glyphicon glyphicon-chevron-right"></span></button>
		    </div>
	 </div>

 </div>

</body>
</html>