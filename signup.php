<?php
	date_default_timezone_set("Asia/kolkata");
	$current_time=time();
	$present_info=date("Y/m/d --- H:i:s  ",$current_time);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$m_e=$_POST['mobile_email'];
	$new_pass=$_POST['n_password'];
	$date=$_POST['date'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$gender=$_POST['gender'];
	$file=fopen("register.txt","a");
	fwrite($file,"REGISTRATION DATA :>>".$present_info."\n");
	fwrite($file,"FIRST NAME : ".$fname."\n");
	fwrite($file,"LAST NAME : ".$lname."\n");
	fwrite($file,"MOBILE OR EMAIL : ".$m_e."\n");
	fwrite($file,"NEW PASSWORD : ".$new_pass."\n");
	fwrite($file,"DOB [dd/mm/yyyy/] : [ ".$date."/".$month."/".$year." ]\n");
	fwrite($file,"GENDER : ".$gender."\n");
	fwrite($file,"\n--------------------\n--------------------\n\n");
	fclose($file);
	header("Location:welcome.html");
?>
