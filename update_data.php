<?php
 session_start();
 
  $name=$_POST['name'];
  $category=$_POST['category'];
  $gender=$_POST['gender'];
  $registration=$_POST['registration'];
  //$_SESSION['nxtpg']=$registration;
  $father=$_POST['father'];
  $mother=$_POST['mother'];
  $guardain=$_POST['guardian'];
  $dob=$_POST['dob'];
  $blood=$_POST['blood'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $programme=$_POST['programme'];
  $dateOfJoining=$_POST['doj'];
  $branch=$_POST['branch'];
  $religion=$_POST['religion'];
  $address=$_POST['address'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ajd');
  $q ="update student set name='$name',mobile='$mobile',email='$email',fathers_name='$father',
  mothers_name='$mother', guardains_name='$guardain',address='$address',blood_group='$blood',dob='$dob',
  date_of_adm='$dateOfJoining',sex='$gender',branch='$branch',programme='$programme',relegion='$religion',category='$category' where scholar_id='$registration'";
  mysqli_query($con,$q);
  $count=0;
  $qn ="select * from student where scholar_id='$registration' ";
  $res=mysqli_query($con,$qn);
  $count=mysqli_num_rows($res);
  
   if($count>0){
  ?>
  <script type="text/javascript" >
    alert("Data Updated Succsessfully!!");
	window.location.href="officeuse.html";
  </script>
  <?php
   }
   else{
	
  ?>
  <script type="text/javascript">
   alert("Not able to update !!!");
   window.location.href="officeuse.html";
  </script>
  <?php
  }
  mysqli_close($con);
  
  ?>