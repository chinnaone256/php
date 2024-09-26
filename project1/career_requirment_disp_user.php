<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Career</title>
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
.line{background-color:#666; height:1px; width:400px; }
</style>

<div class="content_block">

<div class="top_title">
  <div class="wraper">
   <h2>About Us<span>We think you'll love to work with us</span></h2>
   <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="career_requirment_disp_user.php">Career</a></li>
		
		<li><a href="career_requirment_disp_user.php">Current Oppenings</a></li>
    
   </ul>
  </div>
 </div>

 <div class="wraper">
 <div class="intro_text">
<h4>Careers</h4>
<p>Listed below are the positions currently open at <strong>AALPINE IT SERVICES PVT LTD</strong>. Candidates interested in applying for this position may please send in their CV in Word document format to <a href="mailto:info@theaalpine.com">careers@theaalpine.com</a></p>
<p style="margin-bottom: 10px">If you are applying for position(s) listed below, make sure you quote the position name in the subject header. </p>
 
 <?php
if(isset($_POST['justdel']))
{

include('includes/config.php');

$id = $_POST['del'];
$count = count($id); //counting how many rows (from checkbox) to delete
if($_POST['justdel'])
{
for ($i=0; $i<$count; $i++)
{

$sql = mysql_query("delete from resume_req where id=$id[$i]");
}
if ($sql)
{
echo "<h3 align=center>Successfully Deleted</h3>";
}
}
}
?>


<div id="scroll">
            
   <h4 style="margin-left:360px; font-size:20px;">Current Openings<span style="float:right;font-size:14px; border-radius:10px; background-color:#3B99BC; margin-right:100px; padding:0 10px;"><a href="job_apply.php" style="color:#333;" >Apply</a></span></h4>
<div id="scroll_one" style="border: 1px solid rgb(204, 204, 204); overflow: auto; box-shadow: 0px 0px 5px rgb(170, 170, 170);">                     
  <?php

include('includes/config.php');

$sql="SELECT * FROM resume_req";

$result=mysql_query($sql);



while($rows=mysql_fetch_array($result)){



?>
    
      <!--<form action="#" method="post">  -->    
            <table align="center" width="400" border="0" bordercolor="#CCCCCC" style="margin-bottom:20px; margin:0 auto; ">
            
            <tr class="admin">
            <td rowspan="11" width="20" >
			<?php

			//echo "<input type=checkbox name=del[] id=del value=$rows[id] />";
			?>
			</td>
            
            <td>Posted Date</td>
            <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="200" align="left"><?php echo $newDate = date("d-m-Y", strtotime($rows['date'])); ?></td>
            </tr>
			
            <tr>
            
            <td>Designation</td>
            <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="200" align="left"><?php echo $rows['designation']; ?></td>
            </tr>
                  
            
            <tr>

            <td>Experience</td>
            <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="200" align="left"><?php echo $rows['exp']; ?></td>
            </tr>
            
          

       	    <tr>

            <td>Salary</td>
            <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="200" align="left"><?php echo $rows['exp_sal']; ?></td>
            </tr>
            
            <tr>

            <td>Notice Period</td>
            <td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="200" align="left"><?php echo $rows['notice_period']; ?></td>
            </tr>


					           <?php
}
mysql_close(); //close database
?>
  
            <!--<tr><td colspan="3" align="center"><input class="admin" type="submit" name="justdel" value="Delete !!" id="justdel" style=" position:static;"></td></tr>-->
            
            </table>
       
           

<!--</form> -->

 </div>
 
 
 
  </div>
 
 <!--
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
 </table>-->
 
 
 </div>

</div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html> 
