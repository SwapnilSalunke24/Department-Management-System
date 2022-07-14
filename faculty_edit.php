<?php
include('includes/security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/connection.php');

?>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">EDIT Faculty </h6>
        </div>

        <?php
        // $connection = mysqli_connect("localhost","root","","adminpanel");
        if(isset($_POST['faculty_edit_btn']))
        {
            $id = $_POST['edit_id'];
            $query = "SELECT * FROM faculty WHERE id='$id' ";
            $query_run=mysqli_query($connection,$query); 
            
            foreach($query_run as $row)
            {
                ?>
                <form action="update_faculty.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label>Faculty Name :</label>
                        <font color=red>*</font>
                        <input type="text" name="edit_faculty_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Faculty name" required/>
                    </div>
                    <!-- <div class="form-group">
                        <label>Designation :</label>
                        <font color=red>*</font>
                        <input type="text" name="edit_designation" value="<?php echo $row['designation'] ?>" class="form-control" placeholder="Enter Designation." required/>
                    </div> -->
                    <div class="form-group">
                        <label>Designation :</label>
                        <font color=red>*</font>
                        <select name="edit_designation" class="form-select" aria-label="Disabled select example" required>
                        <option value="">Select Designation</option>
                        <option value="HOD">HOD</option>
                        <option value="Professor">Professor</option>
                        <option value="Associate Professor">Associate Professor</option>
                        <option value="Assistant Professor">Assistant Professor</option>
                        <option value="Lecturer">Lecturer</option>
                        <option value="Lab Assistant">Lab Assistant</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Qualification :</label>
                        <font color=red>*</font>
                        <input type="text" name="edit_qualification" value="<?php echo $row['qualification'] ?>" class="form-control" placeholder="Enter Email" required/>
                    </div>
                    <div class="form-group">
                        <label>Upload Image :</label>
                        <font color=red>*</font>
                        <input type="file" name="faculty_image" id="faculty_image" value="<?php echo $row['images'] ?>" class="form-control" >
                    </div>
                    <a href="faculty.php" class="btn btn-danger"> CANCEL </a>
                    <button type="submit" name="faculty_updatebtn" class="btn btn-primary"> UPDATE </button>
                    </div>
                </div>
            </form>

                <?php
                    }
                }

            ?>

    </div>



</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
 ?>