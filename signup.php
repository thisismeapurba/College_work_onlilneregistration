<?php
  session_start();
  if(isset($_POST['check']))
  {
	 $code=$_SESSION['cap_code'];
	 $user=$_POST['cap'];
	 if($code === $user)
	 {
  $id=$_POST['id_n'];
  $password=$_POST['pwd'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ajd');
  $q ="UPDATE student SET password='$password' WHERE scholar_id='$id'";
  $q1="select * from student where scholar_id='$id'";
  $res=mysqli_query($con,$q1);
  $count=mysqli_num_rows($res);
  //echo "$count";
  mysqli_query($con,$q);
  if($count>0){
  ?>
  <script type="text/javascript" >
    alert("Account Created Successfully!");
    alert("Now Login For Registration");
	window.location.href="index.php";
  </script>
  <?php
   }
   else{
  ?>
  <script type="text/javascript">
   alert("User  id doesn't exist !!! ");
   alert("CONTACT DEAN S/W OFFICE !!! NIT SILCHAR ,ASSAM ,INDIA-788010  ");
   window.location.href="index.php";
  </script>
  <?php
  }
  mysqli_close($con);
  
	 }
	 else
	 {?>
		 <script>
		  alert("invalid captcha !!");
		  window.location.href="index.php";
		 </script>
	 <?php
	 }
  }	 
  
?>