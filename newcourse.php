<html>
<head>
<title> Portal4U</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- ----calling header-->
	<?php include('header.php');?>
	<div class="wrapper clearfix">
		
		<form action="includes/process.php" method="post">
			<label for="cname" class="labelfor_cn">Course Name</label>
			<input type="text" name="cname" placeholder="Course Name" class="container_course_name" required/>
		 
			<label for="sem" class="labelfor_sem">Please Also Provide Semester</label>
			<input type="text" name="sem" placeholder="Semester" class="container_for_semester" required/>

			<br>
			<input type="submit" value="Add" class="Stylish_Button2"/>
		</form>
	</div>
	<!-- calling footer -->
	<?php include('footer.php');?>


</body>
</html>