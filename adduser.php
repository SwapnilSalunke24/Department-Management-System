<?php

session_start();
if(isset($_POST['registerbtn']))
{
	
	$name=$_POST['name'];
	$roll_no=$_POST['roll_no'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
    $year=$_POST['year'];


	$connection = mysqli_connect("localhost","root","","adminpanel");
	$query="INSERT INTO student(name,roll_no,email,contact_no,year) VALUES
	('$name','$roll_no ','$email','$contact_no','$year')";
	if(mysqli_query($connection, $query))
	{
		echo "Saved";
		$_SESSION['success'] = "Student Data Added";
		header('Location: student.php');
	}
	else
	{
		echo "Not saved";
		$_SESSION['status'] = "Student Data not Added";
		header('Location: student.php');
	}
}

?>
