<?php
   $username = "root";
   $servername = "localhost";
   $password = "";
   $db_name = "final1";

   $con = mysqli_connect($servername, $username, $password, $db_name);
   if (!$con) {
   	 die("Faled to connect to the local server". mysqli_connect_error());
   }
   if (isset($_POST["submit"])) {
   	 if (!empty($_POST["username"]) && !empty($_POST["age"]) && !empty($_POST["pass"])) {
   	 	$_POST["pass"] = md5($_POST["pass"]);
   	 	$query = "insert into registration values ('". $_POST["username"] ."'," . $_POST["age"] . ",'" . $_POST["pass"] ."')";
   	 	mysqli_query($con, $query);
   	 }
   	 header("Location: regdata.php");
   }
?>

<html>
<head>
	<title>Registration</title>
</head>
<body>
    <form action="" method="post">
    	<table>
    		<tr>
    			<td>
    				Username:
    			</td>
    			<td>
    				<input type="text" name="username">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Age:
    			</td>
    			<td>
    				<input type="text" name="age">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Password:
    			</td>
    			<td>
    				<input type="text" name="pass">
    			</td>
    		</tr>
    		<tr>
    			<td colspan="2" align="right">
    				<input type="submit" name="submit" value="Okay">
    			</td>
    		</tr>
    	</table>
    </form>
</body>
</html>
