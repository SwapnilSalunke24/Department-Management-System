<?php
include('includes/security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['faculty_updatebtn']))
{
    $edit_id = $_POST['edit_id'];
    $edit_faculty_name = $_POST['edit_faculty_name'];
    $edit_designation = $_POST['edit_designation'];
    $edit_qualification = $_POST['edit_qualification'];
    $edit_faculty_image = $_FILES["faculty_image"]['name'];

    $query = "UPDATE faculty SET name='$edit_faculty_name', designation='$edit_designation', qualification='$edit_qualification', images='$edit_faculty_image' WHERE id='$edit_id' ";

    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
            move_uploaded_file($_FILES["faculty_image"]['tmp_name'], "upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "Faculty Data is Updated";
            header('Location:faculty.php');
    }
    else
    {
        $_SESSION['status'] = "Faculty Data is Not Updated";
        header('Location:faculty.php');
    }
}


?>