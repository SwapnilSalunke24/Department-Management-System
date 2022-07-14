<?php
include('includes/security.php');
include('includes/header.php');
include('includes/fac_navbar.php');
include('includes/connection.php');
?>



<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="adduser.php" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Student Name :</label>
                        <font color=red>*</font>
                        <input type="text" name="name" class="form-control" placeholder="Enter Student name" required/>
                    </div>
                    <div class="form-group">
                        <label>Roll No. :</label>
                        <font color=red>*</font>
                        <input type="text" name="roll_no" class="form-control" placeholder="Enter Roll no." required/>
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <font color=red>*</font>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required/>
                    </div>
                    <div class="form-group">
                        <label>Contact No. :</label>
                        <font color=red>*</font>
                        <input type="text" name="contact_no" class="form-control" placeholder="Enter Contact No." required/>
                    </div>
                    <div class="form-group">
                        <label>Year :</label>
                        <font color=red>*</font>
                        <select name="year" class="form-select" aria-label="Disabled select example" required/>
                        <option value="">Select Year</option>
                        <option value="First Year">First Year</option>
                        <option value="Second Year">Second Year</option>
                        <option value="Third Year">Third Year</option>
                        <option value="Fourth Year">Fourth Year</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Student Records
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addadminprofile">
                    Add Student Data
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

          $query="SELECT * FROM register";
          $query_run = mysqli_query($connection, $query); 

          ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align: center; vertical-align: middle;">
                            <th>Roll no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact no.</th>
                            <th>Year</th>
                            <!-- <th>Edit</th>
                            <th>Delete</th> -->
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                  $conn=mysqli_connect("localhost","root","","adminpanel");
                  //servername,username,password,dbname
                  if(!$conn)
                  {
                    echo "error occured ".mysqli_connect_error();
                  }
                  $query="SELECT * FROM student ";
                  $result=mysqli_query($conn,$query);
                  $num=mysqli_num_rows($result);
                  if($num==0){
                    echo"No record present";
                    exit;
                  }
                  //$i=1;
                  while($row=mysqli_fetch_assoc($result))
                  {
                  ?>


                        <tr >

                            <td><?php echo $row['roll_no']; ?></td>
                            <td><?php echo $row['name']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['contact_no']; ?> </td>
                            <td><?php echo $row['year']; ?> </td>
                            <!-- <td style="text-align: center; vertical-align: middle;">
                                <form action="student_edit.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                </form>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <form action="code.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                </form>
                            </td> -->


                        </tr>

                        <?php

                  }
                ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
 ?>