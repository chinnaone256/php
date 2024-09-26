<?php

//ini_set('display_errors', 'On'); 
//error_reporting(E_ALL);

include('includes/config.php');

$time_now=mktime(date('h')+5,date('i')+30,date('s'));
$time_now=date('h:i:s ', $time_now);

$datetime=date("y-m-d $time_now"); //date time

$designation=$_POST['designation'];
if($designation == ""){echo $designation; echo "Designation can not be blank"; exit();}
$name1=$_POST['name'];
$dob=$_POST['dob'];
$contact_nbr=$_POST['contact_nbr'];
$address=$_POST['address'];
$exp1=$_POST['exp1'];
$exp2=$_POST['exp2'];
$exp=$exp1." YEARS, ". $exp2." MONTHS,";
$current_job_status=$_POST['current_job_status'];
$exp_sal=$_POST['exp_sal'];
$notice_period=$_POST['notice_period'];
$email=$_POST['email'];
			


  if ($_FILES["file"]["error"] >0)
    {
   
	
	$path= "NULL";   
	//return $path;
	
	}
  else
    {   
  
      {
		  
     		
		$filename=$_FILES["file"]["name"];
		$filenamesize=$_FILES["file"]["size"];
		$filenametype=$_FILES["file"]["type"];
		if($filenamesize >=200000){echo "file size too large to upload"; exit;
		
		}else{
			if ($filenametype=="application/pdf" OR $filenametype=="application/msword"){
		
	   	$a = explode('.', $filename);
		//echo (" explode('.', $name)");
		$extension = strtolower(end($a)); unset($a); 
		 		 
		move_uploaded_file($_FILES["file"]["tmp_name"],
      "resumes_doc/pdf/" . $filename);
	  
	 
	  
include('includes/config.php');
	
	$sql = "select id from resume order by id desc limit 1";
	
	$result = mysql_query($sql) or die('Query failed: ' . mysql_error()); 
	$name = mysql_result ( $result, 0, "id" );
	 
	$result=mysql_query($sql);

	while($rows=mysql_fetch_array($result)){
	$final = $rows['id']+1;
	$newfilename= $final.$name1.".".$extension;	
	 rename("resumes_doc/pdf/" . $filename,"resumes_doc/pdf/" . $newfilename);
}
	
	}else
	{echo "Only pdf and doc files allowed";}
	
	}
	


$path= $newfilename;
//echo $newfilename;

$sql = "INSERT INTO resume(date, designation, name, dob, contact_nbr, address, exp, current_job_status, exp_sal, notice_period, email, path )".
"VALUES ( '$datetime', '$designation', '$name1', '$dob', '$contact_nbr', '$address', '$exp', '$current_job_status','$exp_sal', '$notice_period', '$email', '$path')" or die(mysql_error());
$qury  = mysql_query($sql);
if(!$qury)
		//echo mysql_error();
		//echo "<h3 style=color:White; align=center>Failed to Insert</h3>";
		header("location:job_apply.php?success=fail");
	else 
	{
//echo "<h3 style=color:White; align=center>Successfully Inserted</h3>";
		//echo "Successfully Inserted<br />";
//		echo "<a href="adminupdates.php" >View Updates Page</a>";
	//'header:update.php'; 

header("location:job_apply.php?success=true");

	}}}
mysql_close();
?>

<a href="update.php" target="_blank">View Updates Page</a>