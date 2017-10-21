<?php
  session_start();
  if(isset($_POST['check1']))
  {
	 $code=$_SESSION['cap_code1'];
	 $user=$_POST['cap1'];
	 if($code === $user)
	 {
		    
  $name=$_POST['name'];
  $id=$_POST['id'];
  $password=$_POST['password'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ajd');
  $count=0;
  $q ="select * from student where scholar_id='$id' and password='$password'";
  $res=mysqli_query($con,$q);
  $count=mysqli_num_rows($res);
   if($count>0){
  ?>
  <script type="text/javascript" >
    alert("Continue to online form!!");
	window.location.href="online_form.html";
  </script>
  <?php
   }
   else{
  ?>
  <script type="text/javascript">
   alert("Incorrect Scholar id or password!!");
   window.location.href="index.php";
  </script>
  <?php
  }
  mysqli_close($con);
  
	 }
	 else
	 {
		 ?><script>
		  alert("invalid captcha !!");
		   window.location.href="index.php";
		 </script><?php
	 }
   }	 



  
?>