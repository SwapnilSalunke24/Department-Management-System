<?php
include('includes/security.php');
include('includes/header.php');
include('includes/fac_navbar.php');
include('includes/connection.php');

?>


<!-- Modal -->
<div class="modal fade" id="addFaculty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="addFaculty.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Faculty Name :</label>
                        <font color=red>*</font>
                        <input type="text" name="faculty_name" class="form-control" placeholder="Enter Faculty name" required/>
                    </div>
                     <div class="form-group">
                        <label>Designation :</label>
                        <font color=red>*</font>
                        <input type="text" name="designation" class="form-control" placeholder="Enter Designation." required/>
                    </div>
                    <div class="form-group">
                        <label>Designation :</label>
                        <font color=red>*</font>
                        <select name="designation" class="form-select" aria-label="Disabled select example" required>
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
                        <input type="text" name="qualification" class="form-control" placeholder="Enter Qualification" required/>
                    </div>
                    <div class="form-group">
                        <label>Upload Image :</label>
                        <font color=red>*</font>
                        <input type="file" name="faculty_image" id="faculty_image" class="form-control" required/>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_faculty" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Faculties
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFaculty">
                    Add New Faculty
                </button> -->
            </h2>
        </div>
        <div class="card-body">
            <?php
          if(isset($_SESSION['success']) && $_SESSION['success'] !='' )
          {
              echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
              unset($_SESSION['success']);
          }

          if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
          {
              echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
              unset($_SESSION['status']);
          }
          ?>


            <div class="table-responsive">
                <?php
                    $connection=mysqli_connect("localhost","root","","adminpanel");
                    $query = "SELECT * FROM faculty";
                    $query_run = mysqli_query($connection, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {  
                        ?>

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr style="text-align: center; vertical-align: middle;">
                                    <th>Faculty Name</th>
                                    <th>Designation</th>
                                    <th>Qualification</th>
                                    <th>Image</th>
                                    <!-- <th>Edit</th>
                                    <th>Delete</th> -->
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                         while($row = mysqli_fetch_assoc($query_run))
                                         {
                                             ?>

                                                <tr style="text-align: center; vertical-align: middle;">

                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['designation']; ?></td>
                                                <td><?php echo $row['qualification']; ?></td>
                                                <td><?php echo '<img src="upload/'.$row['images'].'" width="100px" height="100px" alt="Image">'?></td>
                                                <!-- <td>
                                                    <form action="faculty_edit.php" method="post">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" name="faculty_edit_btn" class="btn btn-success">EDIT</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="post">
                                                    <input type="hidden" name="faculty_delete_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="faculty_delete_btn" class="btn btn-danger">DELETE</button>
                                                    </form>
                                                </td> -->


                                                </tr>

                                            <?php
                                         } 
                                    ?>

                                    </tbody>
                                </table>
                        <?php
                    }
                    else{
                        echo "No Record Found";
                    }

                ?>
                    </div>
                </div>
            </div>
        </div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
 ?>