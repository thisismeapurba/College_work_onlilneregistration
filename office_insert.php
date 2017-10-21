<?php
 session_start();
 if(isset($_POST['submit1'])){
  $name=$_POST['name'];
  $category=$_POST['category'];
  $gender=$_POST['gender'];
  $registration=$_POST['registration'];
  $_SESSION['nxtpg']=$registration;
  $father=$_POST['father'];
  $mother=$_POST['mother'];
  $guardain=$_POST['guardian'];
  $dob=$_POST['dob'];
  $blood=$_POST['blood'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $programme=$_POST['programme'];
  $dateOfJoining=$_POST['registerFor'];
  $branch=$_POST['branch'];
  $religion=$_POST['religion'];
  $address=$_POST['address'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ajd');
  $q ="insert into student (name,scholar_id,mobile,email,fathers_name,mothers_name,guardains_name,address,blood_group,dob,date_of_adm,sex,branch,programme,relegion,category) 
  values('$name','$registration','$mobile','$email','$father','$mother','$guardain','$address','$blood','$dob','$dateOfJoining','$gender','$branch','$programme','$religion','$category')";
  $count=0;
  $qn ="select * from student where scholar_id='$registration' ";
  $res=mysqli_query($con,$qn);
  $count=mysqli_num_rows($res);
   if($count>0){
  ?>
  <script type="text/javascript" >
    alert("Data already exist!!");
	window.location.href="showData.php";
  </script>
  <?php
   }
   else{
	 mysqli_query($con,$q);
  ?>
  <script type="text/javascript">
   alert("Data inserted !!!");
   window.location.href="officeuse.html";
  </script>
  <?php
  }
  mysqli_close($con);
  }
  ?>