<html>
	<body bgcolor="#f8d7da">
		<form action="display.php">
			<?php
			error_reporting(E_ERROR | E_PARSE); 
			// create a variable
			$first_name=$_POST['first_name'];
			$last_name=$_POST['last_name'];
			$department=$_POST['department'];
			$email=$_POST['email'];
			$connect=mysqli_connect('sql206.epizy.com','epiz_24332971','wKlEK6YhZL6Hm0','epiz_24332971_db_name');
			if(mysqli_connect_errno($connect)){
				echo 'Failed to connect';
			}
			//Execute the query
			mysqli_query($connect, "INSERT INTO stud_tb(first_name,last_name,department,email) VALUES('$first_name','$last_name','$department','$email')");
			?>
			<input type="submit" value="Display"></input>
		</form>
	</body>
</html>