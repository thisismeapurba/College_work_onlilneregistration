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
	    <title>Online Registration Form</title>
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
		  #bgcolor
		  {
		   background-color:cornsilk;
		  } 
		  img
		  {
			width: 180px;
		  }
		  
		  .card
		  {
			border-radius: 10%;
		  }
		  
	</style>		
		
   </head>
   <body  >
	    <div class="container" id="bgcolor"  >
	    <div class="jumbotron" id="bgcolor"  >
		<div class="row">
            <div class="col-xs-4" style="background : khaki" id="img_id" >
			<img src="nitslogo.png" class="img-circle img-left img-responsive" > 
			</div>
		    <div class="col-xs-8" style="background : khaki" >  
			<h2 class="text-info text-right text-responsive text-condensed">National Institute of Technology, Silchar </h2>
			<h2 class="text-info text-right text-responsive text-condensed">Cachar,Assam</h2>
			<h2 class="text-info text-right text-responsive text-condensed">India,788010</h2>
			</div>
        </div>
       
        <div >
		    <div class="text-warning text-center text-xl">
			   <h2> Online Registration Portal </h2>
			   <h2 class="text-primary">Register for</h2>
			</div>
		</div>
		</div>
		
			<div class="row">
		
			<div class="col-xs-4 card" style="background-color:#85C1E9;height:200px">
			</div>
			
			<div class="col-xs-4 card" style="background-color:#F1948A  ;height:200px">
			</div>
			
			<div class="col-xs-4 card" style="background-color:#82E0AA;height:200px">
			</div>
		
		   </div>
		   <div class="row" style="margin-top:50px;margin-bottom:50px">
		    <div class="col-xs-6 text-left" >
		    <button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-chevron-left"></span>Back</button>
		    </div>
		    <div class="col-xs-6 text-right" >
		    <button type="button" class="btn btn-primary btn-right">Proceed<span class="glyphicon glyphicon-chevron-right"></span></button>
		    </div>
		   </div>
		  <div class="text-center" style="background-color:#17202A; margin-bottom:10px;">
		   <button class="btn btn-success"style="text-color:red;">visitor counter: <?php echo $unique_visitor_counter; ?> </button>
		  </div>  
		   
		</div>
   </body> 
 </html>