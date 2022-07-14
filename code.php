 <?php 
session_start();
$connection = mysqli_connect("localhost","root","","adminpanel");
//Update
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $roll_no = $_POST['edit_roll_no'];
    $email = $_POST['edit_email'];
    $contact_no = $_POST['edit_contact_no'];
    $year = $_POST['edit_year'];

    $query = "UPDATE student SET name='$name',roll_no='$roll_no',email='$email',contact_no='$contact_no',year='$year' WHERE id='$id' ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location:student.php');

    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Updated";
        header('Location:student.php');
    }

}

//Delete
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM `student` WHERE id='$id' ";
    $query_run= mysqli_query($connection,$query);
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location:student.php');

    }
    else
    {
        $_SESSION['status'] = "Your Data is Not DELETED";
        header('Location:student.php');
    }
}

//Faculty Delete
if(isset($_POST['faculty_delete_btn']))
{
    $id = $_POST['faculty_delete_id'];

    
    $query = "DELETE FROM `faculty` WHERE id='$id' ";
    $query_run= mysqli_query($connection,$query);
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location:faculty.php');

    }
    else
    {
        $_SESSION['status'] = "Your Data is Not DELETED";
        header('Location:faculty.php');
    }
}


?>