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

$sql = mysql_query("delete from resume_req where id=$id[$i]");
}
if ($sql)
{
echo "<h3 id=success align=center align=center>Successfully Deleted</h3>";
}else
{echo "<h3 id=success align=center>&nbsp;&nbsp;&nbsp;Failed to Send, Please try Later or call Us On our Number</h3>"; 
}
}
}
?>



<div align="center" id="scroll" style="min-height:400px; overflow:auto;">
            
                        
  <?php

include('includes/config.inc');

$sql="SELECT * FROM resume_req";

$result=mysql_query($sql);



while($rows=mysql_fetch_array($result)){



?>
    
      <form action="#" method="post">      
            <table align="center" border="0" bordercolor="#CCCCCC" style="margin-bottom:20px; margin:0 auto; ">
            
            <tr class="admin">
            <td rowspan="11" width="20" >
			<?php

			echo "<input type=checkbox name=del[] id=del value=$rows[id] />";
			?>
			</td>
            
            <td>Posted Date</td>
            <td>:</td>
            <td width="400" align="center"><?php echo $newDate = date("d-m-Y", strtotime($rows['date'])); ?></td>
            </tr>
			
            <tr>
            
            <td>Designation</td>
            <td>:</td>
            <td width="400" align="center"><?php echo $rows['designation']; ?></td>
            </tr>
                  
            
            <tr>

            <td>Experience</td>
            <td>:</td>
            <td width="400" align="center"><?php echo $rows['exp']; ?></td>
            </tr>
            
            <tr>

       	    <tr>

            <td>Salary</td>
            <td>:</td>
            <td width="400" align="center"><?php echo $rows['exp_sal']; ?></td>
            </tr>
            
            <tr>

            <td>Notice Period</td>
            <td>:</td>
            <td width="400" align="center"><?php echo $rows['notice_period']; ?></td>
            </tr>
           <tr><td colspan="3" align="center" style="background-color:#333; height:2px; width:400px; margin:0 auto;"></td></tr>

					           <?php
}
mysql_close(); //close database
?>
  
            <tr><td colspan="3" align="center"><input class="admin" type="submit" name="justdel" value="Delete !!" id="justdel" style=" position:static;"></td></tr>
            
            </table>
       
           

</form> 

 
  </div>
 

 
 </div>

</div>
</div>

<script>

	function checkform(theform){
		var why = "";
		 
		if(theform.txtInput.value == ""){
			why += "- Security code should not be empty.\n";
		}
		if(theform.txtInput.value != ""){
			if(ValidCaptcha(theform.txtInput.value) == false){
				why += "- Security code did not match.\n";
			}
		}
		if(why != ""){
			alert(why);
			return false;
		}
		
		validatedesignation();
		validatecurrent_job_status();
		validatenotice_period();
		validateexp_sal();
		
		
		 function validatedesignation(){
  var selectedCombobox=(form1.designation.value);
  if (selectedCombobox=="-1") {
  alert("Please Select Designation");
//exit();
 event.preventDefault();
	 return false;
	 exit();
  }
  return true;
  }
  
  function validatecurrent_job_status(){
  var selectedCombobox=(form1.current_job_status.value);
  if (selectedCombobox=="-1") {
  alert("Please Select Job Status");
 event.preventDefault();
	 return false;
	 exit();
  }
  return true;
  }
  
  
 
  
  function  validatenotice_period(){
  var selectedCombobox=(form1.notice_period.value);
  if (selectedCombobox=="-1") {
  alert("Please Select Notice Period");
 event.preventDefault();
	 return false;
	 exit();
  }
  return true;
  }
  
  function  validateexp_sal(){
  var selectedCombobox=(form1.exp_sal.value);
  if (selectedCombobox=="-1") {
  alert("Please Select Expected Salary");
 event.preventDefault();
	 return false;
	 exit();
  }
  return true;
  }
  
 
  
	}
 

//Generates the captcha function    
	var a = Math.ceil(Math.random() * 9)+ '';
	var b = Math.ceil(Math.random() * 9)+ '';       
	var c = Math.ceil(Math.random() * 9)+ '';  
	var d = Math.ceil(Math.random() * 9)+ '';  
	var e = Math.ceil(Math.random() * 9)+ '';  
	  
	var code = a + b + c + d + e;
	document.getElementById("txtCaptcha").value = code;
	document.getElementById("txtCaptchaDiv").innerHTML = code;	

// Validate the Entered input aganist the generated security code function   
function ValidCaptcha(){
	var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
	var str2 = removeSpaces(document.getElementById('txtInput').value);
	if (str1 == str2){
		return true;	
	}else{
		return false;
	}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
	return string.split(' ').join('');
}


	
</script>


<?php include('includes/footer.php'); ?>

</body>
</html> 
