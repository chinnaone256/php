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


<script type="text/javascript">
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

<style>
tr{height:45px;}

#success{width:800px; text-align:center; color:#31809F;}
.line{background-color:#666; height:2px; width:400px; }
text{border:#666;}
#scroll h4{color:#3EA0C5;}

@charset "utf-8";
/* CSS Document */
.popup
{
   position: fixed;
   width: 100%;
   opacity: 0.5;
   top:0px;
   min-height:200px;
   height:100%;
   z-index: 100;
   background: #000;
   font-size: 20px;
   text-align: center;
   display:none;
   
}
#login_form
{
	position:absolute;
	width:200px;
	top:100px;
	left:45%;
	background-color:#FFF;
	padding:10px;
	border:1px solid #CCC;
	border-radius:10px;
	display:none;
	z-index:101;
	-moz-border-radius: 10px;
	-moz-box-shadow: 0 0 10px #aaa;
	-webkit-border-radius: 10px;
	-webkit-box-shadow: 0 0 10px #aaa;
}

#profile{float:right;}

</style>

</head>
<body>
<div class="wraper">
 
<?php include('includes/header.php'); ?>
	
</div> 




<div class="content_block">

<div class="top_title">
  <div class="wraper">
   <h2>About Us<span>We think you'll love to work with us</span></h2>
   <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="career_requirment_disp_user.php">Career</a></li>
		
		<li><a href="job_apply.php">Apply For A Position</a></li>
    
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
echo "<h3 id=success align=center>Successfully Deleted</h3>";
}
}
}
?>


<?php if(isset($_REQUEST['success'])){
	
	 if($_GET['success']== 'fail'){echo "<h3 id=success align=center>&nbsp;&nbsp;&nbsp;Failed to Send, Please try Later or call Us On our Number</h3>"; }
	 if($_GET['success']== 'true'){echo "<h3 id=success align=center>&nbsp;&nbsp;&nbsp;Your Resume has been Sent Successfully</h3>"; }
	 
	 
	 } ?> 

<div id="scroll" align="center">
            
                        

          
          

<h4 align="center"><strong> Please Update Here</strong></h4>
<!--<table width="400" border="0" align="center" cellpadding="0" cellspacing="0" >

<tr>-->
<form id="form1" name="form1" method="post" action="addupnew.php" onsubmit="return checkform(this);" enctype="multipart/form-data">

 <!--</form>-->

<table width="651" border="0" cellpadding="3" cellspacing="10" style="margin-left:70px;"><!--</td>-->

 <tr>
            
            <th align="left" width="150">Designation</th>
            <td width="10">:</td>
            <td width="50" align="left" style="vertical-align:central; "><select required name="designation" id="designation" >
		<option style="background-color:#CCCCCC;" value="-1" >Select..</option>
        <option  value="WEB DEVELOPER">WEB DEVELOPER</option>
		<option  value="WEB DESIGNER">WEB DESIGNER</option>
		<option  value="JAVA DEVELOPER">JAVA DEVELOPER</option>
		<option value="BUISNESS DEVELOPMENT OFFICER">BUISNESS DEVELOPMENT OFFICER</option>	
	</select>
    </td>
    <td width="150"></td>
						</tr>
           
            
            <tr>

            <th align="left">Name</th>
            <td>:</td>
            <td width="150" align="left" ><input name="name" type="text" id="name" size="20" style="width:254px;"  required/></td>
            <td></td>
						</tr>
            <tr>
            <th align="left">Date of Birth</th>
            <td>:</td>
            <td width="150" align="left"><input name="dob" type="date" id="dob" size="20" style="width:254px;" required/> </td>
          	<td style="margin-left:60px;  font-size:12px;">DD-MM-YYYY</td>
					  </tr>
			
             <th align="left">Contact Number</th>
            <td>:</td>
            <td width="150" align="left"><input name="contact_nbr" type="text" maxlength="12" id="contact_nbr" size="20"  style="width:254px;"  required/></td>
            <td></td>
						</tr>
            
            <tr>

            <th  align="left" valign="middle" style="vertical-align: middle;">Address</th>
            <td style="vertical-align: middle;">:</td>
            <td width="150" align="left"><textarea name="address" required  style="min-height:100px;max-height:100px;min-width:254px;max-width:254px;"></textarea></td>
            <td></td>
						</tr>
            
            <tr>

            <th align="left">Email</th>
            <td>:</td>
            <td width="150" align="left"><input name="email" type="email" id="email" size="20"   style="width:254px;" required/></td>
            <td></td>
						</tr>
            
            <tr>

            <th align="left">Experience</th>
            <td>:</td>
            <td width="150" align="left"  valign="middle" style="font-size:10px;"><div style="width:300px; height:40px;"><select required name="exp1" id="exp1" >
		
        <option  selected value="00">00</option>
		<option  value="01">01</option>
		<option  value="02">02</option>
		<option  value="03">03</option>
         <option  value="04">04</option>
		<option  value="05">05</option>
		<option  value="06">06</option>
		<option  value="07">07</option>	
        <option  value="08">08</option>
		<option  value="09">09</option>
		<option  value="10">10</option>
		<option value="10+">10+</option>	
        	
	</select>    YEARS    <select name="exp2" id="exp2">
		 <option selected value="00">00</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option  value="03">03</option>
         <option  value="04">04</option>
		<option  value="05">05</option>
		<option  value="06">06</option>
		<option value="07">07</option>	
        <option value="08">08</option>
		<option  value="09">09</option>
		<option  value="10">10</option>
		<option  value="11">11</option>	
        <option value="12">12</option>	
	</select>    MONTHS  </div></td>
           <td></td>
						</tr>
            
            <tr>

            <th align="left">Current Job Status</th>
            <td>:</td>
            <td width="150" valign="middle" align="left"><select name="current_job_status" id="current_job_status" style="width:254px;" >
		<option  value="-1">Select..</option>
        <option  value="EMPLOYED">EMPLOYED</option>
		<option  value="UNEMPLOYED">UNEMPLOYED</option>
	</select><!--<input name="current_job_status" type="text" id="current_job_status" size="20" style="margin:10px 10px;  border:none;  height:25px; width:200px; text-align:center;"  required/>--></td>
            <td></td>
						</tr>
            
            <tr>

            <th align="left">Expected Salary</th>
            <td>:</td>
            <td width="150" align="left" height="40" valign="middle">
            <select name="exp_sal" id="exp_sal" class="combo_select" >
		 <option  value="-1" selected>00</option>
		<option value="Up to 1 lac">Up to 1 lac</option>
		<option  value="1 to 2 lacs">1 to 2 lacs</option>
		<option value="2 to 5 lacs">2 to 5 lacs</option>
         <option  value="More than 5 lacs">More than 5 lacs</option>
		
	</select>
            
            
           
            <td></td>
						</tr>
            
            <tr>

            <th align="left">Notice Period</th>
            <td>:</td>
            <td width="150" align="left"><input name="notice_period" type="text" id="notice_period" size="20" style="  height:20px; width:254px; text-align:center; "  required/></td>
            <td>in months</td>
						</tr>
            
           

           

<tr>
<input type=hidden name=MAX_FILE_SIZE value=1000000>
<input type=hidden name=completed value=1>
<th align="left" height="auto" valign="top" style="vertical-align:middle; font-size:13px;">Upload Resume / CV</th>
<td valign="top" style="vertical-align:middle;font-weight:bold;">:</td>
<td width="150" ><input style=" width:190px; margin-left:10px;  " type=file name="file" id="file" required /></td>

<td>Only doc/pdf files</td>
						</tr>

<tr>

            <th  align="left"> <label for="code">Enter Code  &nbsp; <span id="txtCaptchaDiv" style="color:#F00"></span> </th>
           
					  <td>:</td>
            <td width="150" align="left"> <input type="hidden" id="txtCaptcha" /></label>
						<input type="text" name="txtInput" id="txtInput" class="bord" size="30" style="  height:20px; width:254px; text-align:center; " /></td>
           <td></td>
						</tr>


<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td align="center" style="padding-right:100px;"><input type="submit" value="Submit" name="upload"  style="width:100px;">&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" name="Submit2" value="Reset" /></td>
<td></td>
						</tr>




</table>
</td>
</form>
</tr>
</table>

</table>
 
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
