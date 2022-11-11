<?php
   include('./orthopedics_server2.php');
?>
<html>
	<head>
		<style>
			.empty {color: red;}
		</style>
	</head>
	<body>
		<p><span class="empty">* Required</span></p>
		<form method="POST" action="orthopedics.php">
            <?php include('errors.php'); ?>
			First Name: <input type="text" name="firstname">
			<br><br>
			Last Name: <input type="text" name="lastname">
            <br><br>
			Allergy: <input type="text" name="allergy">
            <br><br>
			Medicines: <input type="text" name="medicines">
			<br><br>
            Date: <input type="date" name="date">
			<br><br>
            Time: <input type="time" name="time">
			<br><br>
			Gender:<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">F
				   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">M
			<br><br>
			Birthday: <input type="date" name="birthday">
			<br><br>
			<input type="submit" name="login" value="Register">
			<input type="reset" value="Cancel">
		</form>
	</body>
</html>