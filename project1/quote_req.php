<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>About</title>
<link rel="icon" type="image/png" href="images/favicon.ico" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<!--[if lt IE 9]>
<script src="scripts/ie9.js">IE7_PNG_SUFFIX=".png";</script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="stylesheets/style.css"> 
<link rel="stylesheet" href="stylesheets/responsive.css"> 
<script src="scripts/jquery.min.js"></script> 
<script src="scripts/jquery.bxSlider.min.js"></script>
<script src="scripts/jquery.blackandwhite.min.js"></script>
<script src="scripts/js_func.js"></script>
 <?php include('includes/chat_script.php'); ?>
<script>
$(function(){
	$('.features_slider').bxSlider({
		auto: false,
		displaySlideQty: 5,
		moveSlideQty: 1,
    	speed : 1000
	});
	$('.intro_slider').bxSlider({
		auto: false,
		controls : false,
		mode: 'fade',
		pager: true
	});	
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
});
</script>
</head>
<body>
<div class="wraper">
 <?php include('includes/header.php'); ?>
</div> 


<style>
tr{height:45px;}

#success{width:800px; text-align:center; color:#31809F;}
</style>

<div class="content_block">

<div class="top_title">
  <div class="wraper">
   <h2>About Us<span>We think you'll love to work with us</span></h2>
   <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
		
		<li><a href="quote_req.php">Request A Quote</a></li>
    
   </ul>
  </div>
 </div>

 <div class="wraper">
 <div class="intro_text">
 
 <?php
 include('includes/config.php');
 if(isset($_POST['submit']))
 {
	 
	 $name= $_POST['name'];
 	 $email= $_POST['email'];
 	 $phn= $_POST['phn'];
 	 $comp_name= $_POST['comp_name'];
 	 $adrs= $_POST['adrs'];
 	 $details= $_POST['details'];
 $sql="insert into quote_req (name ,email, cont_nbr, comp_name, address, details)values('$name','$email','$phn','$comp_name','$adrs','$details')";
 $result=mysql_query($sql);
 if($result){
	 echo "<h4 id=success >Your Request Has Been Sent Successfully </h4r>";
	 }else{
//		 echo mysql_error();
		  echo "<h4 id=success >Failed to Send Your Request</h4r>";
		 }
	 
	 }
 
 
 ?>
 <table>
 <form action="#" method="post">
 <tr><th align="left">Name<span>:</span></th><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="name"  required="required" style="height:20px; min-width:250px;max-width:250px;"></td></tr>
 <tr><th align="left">Email<span>:</span></th><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="email" name="email"  required="required" style="height:20px; min-width:250px;max-width:250px;"></td></tr>
 <tr><th align="left">Contact Number<span>:</span></th><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="phn"  required="required" style="height:20px; min-width:250px;max-width:250px;"></td></tr>
 <tr><th align="left">Company Name<span>:</span></th><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="comp_name"  required="required" style="height:20px; min-width:250px;max-width:250px;"></td></tr>
 <tr><th align="left">Address<span>:</span></td><th>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="adrs"  required="required" style="height:20px; min-width:250px;max-width:250px;"></td></tr>
 <tr><th align="left">About Requirment<span>:</span></th><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td> <textarea name="details" style="min-height:150px; max-height:150px; min-width:400px;max-width:400px;" ></textarea></td></tr>
	<tr><td colspan="3" align="right"><input type="reset"  value="Reset" /><input type="submit" name="submit" value="Request Quote" /></td></tr>		
 
 </form>
 </table>
 
 
 </div>

</div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html> 
