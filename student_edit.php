<?php
include('includes/security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">EDIT Student Records </h6>
        </div>

        <?php
        $connection = mysqli_connect("localhost","root","","adminpanel");
        if(isset($_POST['edit_btn']))
        {
            $id = $_POST['edit_id'];
            $query = "SELECT * FROM student WHERE id='$id' ";
            $query_run=mysqli_query($connection,$query); 
            
            foreach($query_run as $row)
            {
                ?>
                <form action="code.php" method="post">
                    <div class="card-body">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                    <div class="form-group">
                        <label>Student Name :</label>
                        <font color=red>*</font>
                        <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control"
                            placeholder="Enter Username" required/>
                    </div>
                    <div class="form-group">
                        <label>Roll No. :</label>
                        <font color=red>*</font>
                        <input type="text" name="edit_roll_no" value="<?php echo $row['roll_no'] ?>" class="form-control"
                            placeholder="Enter Roll no." required/>
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <font color=red>*</font>
                        <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                            placeholder="Enter Email" required/>
                    </div>
                    <div class="form-group">
                        <label>Contact No. :</label>
                        <font color=red>*</font>
                        <input type="text" name="edit_contact_no" value="<?php echo $row['contact_no'] ?>" class="form-control"
                            placeholder="Enter Contact No." required/>
                    </div>
                    <div class="form-group">
                        <label>Year :</label>
                        <font color=red>*</font>
                        <select name="edit_year" class="form-select" aria-label="Disabled select example" required>
                        <option value="">Select Year</option>
                        <option value="First Year">First Year</option>
                        <option value="Second Year">Second Year</option>
                        <option value="Third Year">Third Year</option>
                        <option value="Fourth Year">Fourth Year</option>
                        </select>
                    </div>
                    <a href="student.php" class="btn btn-danger"> CANCEL </a>
                    <button type="submit" name="updatebtn" class="btn btn-primary"> UPDATE </button>
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