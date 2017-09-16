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
		<div id="outerdiv">
		 <form action="includes/process.php" method="Post">

			<div class="innerdiv1">
				<table>
					<tr>  
					<td>Subject name</td>  
					<td><select name="subject_name">  
					<?php  
					/* connecting database*/
					mysql_connect('localhost','root','');
					/*database name portal*/
					mysql_select_db('portal');
					$query = "SELECT `uid`, `C_Name` FROM `new_course`";  

					$result = mysql_query($query) ;  

					while ($row = mysql_fetch_assoc($result))  
					{  
					   
					  {  
					    echo '<option value="' . $row['uid'] . '"> ' . $row['C_Name'] . '</option>';  
					  }  
					}  
					?>  
					</select></td>  
					</tr>  
				</table> 

			</div>	
		</form> 
	<div class="innerdiv2">
		<!-- innerdiv2 -->
		<h1>Download your file here</h1><br><br>		
			
			<form action="downloadhandler.php" method="post" enctype="multipart/form-data">

				<label for="file">Filename:</label>&nbsp&nbsp
				<input type="file" name="file"><br><br>

				<input type="submit" value="Download">
			</form>

	</div>
		


	</div>
	
	<!-- calling footer -->
	<?php include('footer.php');?>
	

</body>
</html>