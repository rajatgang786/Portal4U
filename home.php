<html>
<head>
<title> Portal4U</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- ----calling header-->
	<?php include('header.php');?>

	<div class="wrapper clearfix">
		<div class="CentreMain">

		<form action="includes/process.php" method="post">
			<label for="nc" class="label1">Existing Course</label>
			<input type="radio" name="nc" class="radiobutton" value="ecourse"/>
			
			<label for="nc" class="label2">New Course</label>
			<input type="radio" name="nc" class="radiobutton2" value="ncourse"/>
			<br><br>
			<input type="submit" value="Submit" class="Stylish_Button2"/>
		</form>
		
		</div>
	</div>

	<!-- calling footer -->
	<?php include('footer.php');?>

<!--
			/* connecting database*/
			//mysql_connect('localhost','root','');
			/*database name portal*/
			//mysql_select_db('sql');

			//$data = mysql_query("SELECT * FROM `teacher`");

			//echo '<table>';

			//while ($rows = mysql_fetch_assoc($data)) {
			//echo '<tr>';

				/*echo '<td>First Name :'.$rows['firstname']."</td>";
				echo '<td>Last Name :'.$rows['lastname']."</td>";

			/*echo '</tr>';
			}
			echo '</table>';*/
-->




</body>
</html>

