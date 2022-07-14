<?php

include('includes/security.php');

$connection = mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['save_faculty']))
{
	
	$name=$_POST['faculty_name'];
	$designation=$_POST['designation'];
	$qualification=$_POST['qualification'];
	$images=$_FILES["faculty_image"]['name'];
	
    if(file_exists("upload/".$_FILES["faculty_image"]["name"]))
    {
        $store = $_FILES["faculty_image"]['name'];
        $_SESSION['status']= "Image already exits. '.$store.'";
        header('Location: faculty.php'); 
    }
    else
    {
        $query="INSERT INTO faculty(name,designation,qualification,images) VALUES
        ('$name','$designation ','$qualification','$images')";
        if(mysqli_query($connection, $query))
        {
            move_uploaded_file($_FILES["faculty_image"]['tmp_name'], "upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "Faculty Added";
            header('Location: faculty.php');
        }
        else
        {
            
            $_SESSION['status'] = "Faculty not Added";
            header('Location: faculty.php');
        }
    }
}

?>