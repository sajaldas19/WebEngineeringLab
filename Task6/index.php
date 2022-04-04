<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Task 6 Insert, Update, Search, Delete</title>
</head>
<body>
	<style>
		body{
			max-width: 500px;
  			margin: auto;
		}
		input{
			padding: 10px;
			border: none;
			border-radius: 10px;
			margin: 5px 0;
			opacity: 0.85;
			display: inline-block;
			font-size: 14px;
			line-height: 17px;
			background-color: #f2f2f2;
		}
		input[type=submit] {
			background-color: #ff8852;
			color: white;
			cursor: pointer;
		}
		input[type=submit]:hover{
			background-color: #ee5610;
		}
	</style>

	<h3>Task 6 Insert, Update, Search, Delete </h3>
	<h5>***(Email should be Matched For Update & Delete)</h5>
	<form action="" method="POST">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Age: <input type="number" name="age"><br><br>
		Department: <input type="text" name="dept"><br><br>
		Result: <input type="number" step="0.01" name="result"><br><br>
        <input type="submit" name="insert" value="Insert">
		<input type="submit" name="update" value="Update Result">
		<input type="submit" name="delete" value="Delete">
		<input type="submit" name="search" value="Search with Name">

    </form>

	<?php
		$con = mysqli_connect('localhost','root', '');
		if(!$con){
			echo 'Not connected to the server';
		}
		if(!mysqli_select_db($con,'task6')){
			echo "Database not selected";
		}
		if(isset($_POST['insert'])){
			$insert = "INSERT INTO user (name, email, age, dept, result) VALUES ('$_POST[name]','$_POST[email]', '$_POST[age]', '$_POST[dept]', '$_POST[result]')";
			if(!mysqli_query($con, $insert)){
				echo "Not Inserted";
			}
			else{
				echo "Successfully Inserted";
			}
		}
		if(isset($_POST['update'])){
			$update = "UPDATE user SET result='$_POST[result]' WHERE email='$_POST[email]'";
			if(!mysqli_query($con, $update)){
				echo "Not Updated";
			}
			else{
				echo "Successfully Updated";
			}
		}
		if(isset($_POST['delete'])){
			$delete = "DELETE FROM user WHERE email = '$_POST[email]'";
			if(!mysqli_query($con, $delete)){
				echo "Not Deleted";
			}
			else{
				echo "Successfully Deleted";
			}
		}
		if(isset($_POST['search'])){
			$search = mysqli_query($con, "SELECT * FROM user WHERE name = '$_POST[name]'");
			echo "<p align=center>"; echo "Search Results"; echo "</p>";
			echo "<table border=1>";
				echo "<tr>";
				echo "<th width=100px>"; echo "Name"; echo "</th>";
				echo "<th>"; echo "Email"; echo "</th>";
				echo "<th>"; echo "Age"; echo "</th>";
				echo "<th>"; echo "Depertment"; echo "</th>";
				echo "<th>"; echo "Result"; echo "</th>";
				echo "</tr>";
			while($row=mysqli_fetch_array($search)){
				echo "<tr>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['email']; echo "</td>";
				echo "<td>"; echo $row['age']; echo "</td>";
				echo "<td>"; echo $row['dept']; echo "</td>";
				echo "<td>"; echo $row['result']; echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
	?>
	
</body>
</html>