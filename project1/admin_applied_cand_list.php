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
.line{background-color:#666; height:2px; width:400px; }
text{border:#666;}
.pad_val{padding-left:50px;}

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
if(isset($_POST['justdel']))
{

include('includes/config.php');

$id = $_POST['del'];
$count = count($id); //counting how many rows (from checkbox) to delete
if($_POST['justdel'])
{
for ($i=0; $i<$count; $i++)
{

$sql = mysql_query("delete from resume where id=$id[$i]");
}
if ($sql)
{
echo "<h3 id=success align=center>Successfully Deleted</h3>";
}
}
}
?>


<?php if(isset($_REQUEST['success'])){
	
	 if($_GET['success']== 'fail'){echo "<h3 id=success align=center>&nbsp;&nbsp;&nbsp;Failed to Send, Please try Later or call Us On our Number</h3>"; }
	 if($_GET['success']== 'true'){echo "<h3 id=success align=center>&nbsp;&nbsp;&nbsp;Your Resume has been Sent Successfully</h3>"; }
	 
	 
	 } ?> 

<div align="center" style="overflow:auto;min-height:500px; ">      
                        
  <?php

include('includes/config.php');

$sql="SELECT * FROM resume";

$result=mysql_query($sql);

while($rows=mysql_fetch_array($result)){



?>
     <table align="center" border="0" bordercolor="#CCCCCC" style="margin-bottom:20px; border-bottom:#999999 thin solid;">
      <form action="#" method="post">      
           
            
            <tr class="admin" align="left">
            <td rowspan="11" width="20">
			<?php

			echo "<input type=checkbox name=del[] id=del value=$rows[id] />";
			?>
			</td>
            
            <th>Submit Date</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['date']; ?></td>
            </tr>
			
            <tr align="left">
            
            <th>Designation</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['designation']; ?></td>
            </tr>
            
            <tr align="left">

            <th>Name</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['name']; ?></td>
            </tr>
            <tr align="left">

            <th>Date of Birth</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['dob']; ?></td>
            </tr>
			
            <tr align="left">

            <th>Address</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['address']; ?></td>
            </tr>
            
            <tr align="left">

            <th>Email</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['email']; ?></td>
            </tr>
            
            <tr align="left">

            <th>Experience</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['exp']; ?></td>
            </tr>
            
            <tr align="left">

            <th>Current Job Stauts</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['current_job_status']; ?></td>
            </tr>
            
            <tr align="left">

            <th>Expected Salary</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['exp_sal']; ?></td>
            </tr>
            
            <tr align="left">

            <th>Notice Period</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['notice_period']; ?></td>
            </tr>
            
            <tr align="left">

            <th>Date of Birth</th>
            <td>:</td>
            <td width="400" align="left" class="pad_val"><?php echo $rows['dob']; ?></td>
            </tr>
            
            <tr align="left">

            <td>&nbsp;</td>
                        <td>&nbsp;</td>
            <td>:</td>
            <td align="left" ><a style="background-color:#666; width:100px; height:10px; line-height:10px;" href=" <?php echo  "New_folder/pdf/".$rows['path']; ?>" target="_blank">Read More</a></td>
            </tr>
	           <?php
}
mysql_close(); //close database
?>
  
		<tr><td colspan="3">	<input class="admin" type="submit" name="justdel" value="Delete !!" id="justdel" style="float:left; position:static;">
</form></td></tr>
            </table>
       
           

          </div>
 

 
 </div>

</div>
</div>



<?php include('includes/footer.php'); ?>

</body>
</html> 
