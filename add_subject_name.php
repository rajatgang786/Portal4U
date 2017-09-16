<html>
<head>
<title> Portal4U</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<!-- calling header-->
	<?php include('header.php'); ?>
	
	<div class="wrapper clearfix">
		<form method="post" action="includes/process.php">
			<label for="subject_name" class="labelfor_cn" >Subject Name</label>
			<input type="text" name="subject_name" class="container_course_name" required/>
			<input type="submit" value="Submit" class="Stylish_Button2"/>
		</form>
		

	</div>
	
	<!-- calling footer -->
	<?php include('footer.php');?>

</body>
</html>