<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Contact Us</title>
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
<link rel="shortcut icon" type="images/x-icon" href="images/favicon.ico"/>
<script src="scripts/jquery.min.js"></script> 
<script src="scripts/jquery.bxSlider.min.js"></script>
<script src="scripts/jquery.blackandwhite.min.js"></script>
<script src="scripts/js_func.js"></script>
 <?php include('includes/chat_script.php'); ?>
<script>
$(function(){
	$('.clients_slider').bxSlider({
		auto: false,
		controls : false,
		mode: 'fade',
		pager: true
	});	
	$('.recent_slider').bxSlider({
		auto: false,
		displaySlideQty: 1,
		moveSlideQty: 1,
    	speed : 1000
	});
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true,
        webworkerPath : false,
        responsive:true,
        invertHoverEffect:false
    });
})
</script>

<script type="text/javascript" src="scripts/jquery.cycle.all.latest.js"></script>

<script type="text/javascript">

$(document).ready(function() {

    $('#testimonials')

	.before('<div id="nav">')

	.cycle({

        fx: 'scrollUp', // choose your transition type, ex: fade, scrollUp, scrollRight, shuffle

		pager:  '#nav'

     });

});

</script>

<style>
.contact_us{ 
padding: 10px 20px 0 0;
width: 630px;
font-size:16px;
}
.sidebar{width: 300px;}
.contact_us ul li{width:500px;float:none;
  padding: 8px 0;
	 width: 600px;
}

.contact_us ul li span{}

.contact_us ul li:nth-child(2) {
    width: 600px;
		float:none;
}
.contact_us ul li:nth-child(3) {
 float:none;
    width: 600px;
}

#testi_box{font-size:18px; margin-top:20px;}
#nav{display:none;}
.our_clients {
    border: thin solid #CCCCCC;
    box-shadow: 0 0 4px #AAAAAA;
    padding: 10px;
}

.our_clients h4{
  border-bottom: 1px solid #CCCCCC;
    color: #434242;
    font-size: 17px;
    padding: 10px 10px;
    text-align: center;

	}
	
#testimonials span{ color:#666; padding-left:5px;}	

#facebk_cont{border:none;}
</style>


</head>
<body>
<div class="wraper">
 <?php include('includes/header.php'); ?>
</div> 



<div class="content_block">
 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
   <h2>Get In Touch<span>We're just an email or phone call away.  Fill out the form below and we’ll be right with you!</span></h2>
   <ul>
    <li><a href="index">Home</a></li>
    <li><a href="contactus.php">Contact Us</a></li>

   </ul>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <!-- contact_us -->
  <div class="contact_us">
   <h4>Where We Are On Google</h4>
<!--   <div class="bwWrapper"><img src="images/contact_us/contact_us.png" width="640" height="265" alt="" /></div>-->
   <div class="map_wrap"><iframe width="625" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212051736810746342359.0004d1bf948a87d9324a3&amp;ie=UTF8&amp;t=m&amp;ll=12.986713,77.540925&amp;spn=0.003659,0.006706&amp;z=17&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212051736810746342359.0004d1bf948a87d9324a3&amp;ie=UTF8&amp;t=m&amp;ll=12.986713,77.540925&amp;spn=0.003659,0.006706&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left">AALPINE GLOBAL TECHNOLOGIES</a> in a larger map</small></div>

<ul style="margin-top: 20px; text-align: center; border: 1px solid rgb(204, 204, 204); box-shadow: 0px 0px 5px rgb(170, 170, 170); border-radius: 10px 10px 10px 10px; background-color: rgb(246, 243, 243);">
   
		

 <li><span><strong>Off Address :</strong></span> Aalpine Global Technologies. <br>#69/E, 2nd Main, 2nd Cross, 3rd Stage, 3rd Block,<br> 
Basaveshwaranagar, Bangalore-560079.</li>
<li><span><strong>Contact Us @ :</strong></span> info@theaalpine.com,&nbsp;Mob&nbsp;-&nbsp;+91&nbsp;-&nbsp;8884000043</li>

   
    <!--<li>Aalpine is located in JP Nagar near Sarakki Road. Come on down and have a visit!  Or feel free to fill out the form below to get in touch with us. We'd love to hear from you, and will be in touch with you right away.  Thanks, we look forward to hearing from you!</li>-->
   </ul>
	 
	 <?php
if(isset($_POST['submit'])){
	
	$to = "sheethal@theaalpine.com";

	$name = $_REQUEST['name'];

	$phone = $_REQUEST['phone'];

	$email = $_REQUEST['email'];
	
	$comments = $_REQUEST['comments'];
	
	$sub = "Website Enquiry";

//	$contents = "From: ".$email."\r\n"."Subject: ".$sub."\n";

	$contents = "From: ".$email."\n";

	$headers = "Name: ".$name."\r\n"." Phone No. : ".$phone."\r\n"." Email : ".$email."\r\n"." Comments: ".$comments."\r\n";

	$sent = mail($to, $sub, $headers, $contents);

	if($sent)

 {  
 	echo "<h3 id=success align=center>&nbsp;&nbsp;&nbsp;Your Query has been Sent Successfully</h3>"; 	
 	//header('Location:sent.html');
  }

 else

 {
	 	echo "<h3 id=success align=center>&nbsp;&nbsp;&nbsp; Failed to Send Your Query, Please Contact Us </h3>";  
//	header('Location:notsent.html');	 
 }
}
?>
	 
	 
   <h4 style="margin:40px 0 0 0;">Drop Us A Quick Line!</h4>
   <form action="#" method="post">
    <p><label for="namet">Name</label>(required)<br /><input id="namet" type="text"  required /></p>
    <p><label for="mailt">E-mail</label>(required)<br /><input id="mailt" type="text" required /></p>
    <p><label for="website">Website</label><br /><input id="website" type="text"   required  /></p>
    <p><label for="message">Message</label>(required)<br /><textarea id="message"   required ></textarea></p>
    <p><input class="btn_m" type="submit" value="Submit Form" name="submit" /></p>
   </form>
  </div>
  <!-- /contact_us -->
  <!-- sidebar -->
  <div class="sidebar">
   <!-- most popular -->
   <div class="most_popular">
    
   <div class="most_popular">
    <h4 style="margin-bottom:20px;">Few Things You May Like</h4>
    
		<iframe id="facebk_cont" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2Faalpine%2F153370578092157&amp;width=300&amp;height=457&amp;colorscheme=light&amp;show_faces=false&amp;header=true&amp;stream=true&amp;show_border=true" scrolling="no" frameborder="0" style="overflow: hidden; width: 298px; height: 427px; box-shadow: 0px 0px 4px rgb(170, 170, 170); border: 1px solid rgb(204, 204, 204);" allowTransparency="true"></iframe> 

   </div>
   
	 <!--<div class="our_clients">
    <h4>Our Clients Just Say</h4>
		
		<div id="testi_box">


<a href="testimonials_user.php">

<div id="test" style="overflow:hidden;">
<!--<marquee align="middle" behavior="scroll" direction="up">
<?php /*?><?php
  
include('includes/config.php');

?>

<?php
//Retrieves data from MySQL
$data = mysql_query("SELECT * FROM testimonials where bool = '1' LIMIT 2") or die(mysql_error());

?>
<div id="testimonials">
<?php


while($info = mysql_fetch_array( $data ))
{
  echo "<p>{$info['comments']}<br> <span>--> {$info['name']} </span> </p> ";

}

?>
</div>
<?php

mysql_close();


?>
<?php */?>

</div>

</a>
</div>
		
    
   </div>-->
  
  </div>
 <div class="send_quote">
   <h4>Would you like us to send you a quote?</h4>
   <p>Click the button, fill out the form and we'll be right with you!<a href="quote_req.php" class="btn_col">Get A Quote</a></p>
  </div> 
 </div>
</div>

 <?php include('includes/footer.php'); ?>

</body>
</html> 
