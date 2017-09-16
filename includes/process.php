<?php
/* connecting database*/
mysql_connect('localhost','root','');
/*database name portal*/
mysql_select_db('portal');

/* inserting teacher records in database*/
if(isset($_POST['username']) && $_POST['username']!="")
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$cpass = $_POST['cpassword'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		
		

	$query = mysql_query("INSERT INTO `Teacher`(`username`,`password`,`cpassword`,`firstname`,`lastname`,`gender`) VALUES('$user','$pass','$cpass','$fname','$lname','$gender')");
			if ($query) 
									{/*Redirecting to another page*/
				header('location:register.php');
				}
			else
				echo "Unable To connect ".mysql_error();

	}

	

/*----------------------------------------------------------------Student databse connectivity-----------------------------------------------------*/
if (isset($_POST['stuusername'])  && $_POST['stuusername']!="") 
{
		$suser = $_POST['stuusername'];
		$spass = $_POST['stupassword'];
		$scpass = $_POST['stucpassword'];
		$sfname = $_POST['stufirstname'];
		$slname = $_POST['stulastname'];
		$sgender = $_POST['stugender'];
	$query = mysql_query("INSERT INTO `Student`(`susername`,`spassword`,`scpassword`,`sfirstname`,`slastname`,`sgender`) VALUES('$suser','$spass','$scpass','$sfname','$slname','$sgender')");
		if ($query) {
			header('location:register.php');
		} else {
			echo "Unable to login".mysql_error();
				}
}
/* checking username and password of student with database */


if(isset($_POST['Selection']))
{
	$type = $_POST['Selection'];

	if ($type== "Teacher") 
	{
		if (isset($_POST['usernamelogin'])) 
		{
			$user = $_POST['usernamelogin'];
			$pass = $_POST['passwordlogin'];
			$query = mysql_query("SELECT * FROM `Teacher` WHERE `username` = '$user' and `password` = '$pass'");
			$data = mysql_fetch_assoc($query);

			if(!empty($data))
				{	
					header('location:../home.php');
				}
			
			else
				echo "Unable to login:".mysql_error();
		
		}

		
	}
	 else 

	 {
		if ($type== "Student") 
		{
			if (isset($_POST['usernamelogin'])) 
			{

			$suser=$_POST['usernamelogin'];
			$spass = $_POST['passwordlogin'];
			$query = mysql_query("SELECT * FROM `Student` WHERE `susername` = '$suser' and `spassword` = '$spass'");
			$data = mysql_fetch_assoc($query);

			if(!empty($data))
				{	
					header('location:../home.php');
				}
			
			else
				echo "Unable to login:".mysql_error();

			}
		}
	}
}	
/*-------------------------------------------------------Choice filing by teacher...i.e. new course or existing course---------------------------------------*/

if (isset($_POST['nc'])) {

	$var = $_POST['nc'];
	if ($var== "ncourse") 
	{
		header('location:../newcourse.php');
	
	}
	else
		if ($var=="ecourse") {
			header('location:../existingcourse.php');
		}


}
/*----------------------newcourse.php-------connectivity wid database------------------------------------------------------------------------------*/
if (isset($_POST['cname']) && $_POST['cname']!="") {
	$COURSENAME = $_POST['cname'];
	$SEMNUMBER = $_POST['sem'];

	$query1 = mysql_query("INSERT INTO `new_course`(`C_Name`,`Sem`) VALUES('$COURSENAME','$SEMNUMBER')");
			if ($query1) 
				{ /*Redirecting to another page*/
				header('location:../add_subject_name.php');
				}
			else
				echo "Unable To connect ".mysql_error();

	}
/*--------------------------Add_subject_name.php databse connectivity-------------------*/
if (isset($_POST['subject_name']) && $_POST['subject_name']!='') {
	$SUBJECTNAME=$_POST['subject_name'];
	
	$query2=mysql_query("INSERT INTO `add_subject`(`Subject_Name`) VALUES('$SUBJECTNAME')");
		if ($query2) {
			/* Redirectin to uploading Page*/
			header('location:upload_download.php');
		}
		else
			echo "Unable to connect".mysql_error();
}

?>
