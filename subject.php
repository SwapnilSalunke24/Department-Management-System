<?php
include('includes/security.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/connection.php');
?>



<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- <div class="modal-content">
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
        </div> -->
    </div>
</div>

<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Subject</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle;">Class</th>
                            <th style="text-align: center; vertical-align: middle;">Subjects</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center; vertical-align: middle;" rowspan="13">TE(SEM V)</td>
                            <td>310241: Database Management System</td> 
                        </tr>
                        <tr>
                            <td>310242: Theory of Computation</td> 
                        </tr>
                        <tr>
                            <td>310243: System Programming and Operating System</td> 
                        </tr>
                        <tr>
                            <td>310244: Computer Networks and Security</td> 
                        </tr>
                        <tr>
                            <td>310245A: Elective I - Internet of Things and Embedded Systems </td> 
                        </tr>
                        <tr>
                            <td>310245B: Elective I - Human Computer Interface</td> 
                        </tr>
                        <tr>
                            <td>310245C: Elective I - Distributed Systems</td> 
                        </tr>
                        <tr>
                            <td>310245D: Elective I - Software Project Management</td> 
                        </tr>
                        <tr>
                            <td>310246: Database Management System Laboratory</td> 
                        </tr>
                        <tr>
                            <td>310247: Computer Networks and Security Laboratory</td> 
                        </tr>
                        <tr>
                            <td>310248: Laboratory Practices I</td> 
                        </tr>
                        <tr>
                            <td>310249: Seminar and Technical Communication</td> 
                        </tr>
                        <tr>
                            <td>310250: Audit Courses 5</td> 
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle;">Class</th>
                            <th style="text-align: center; vertical-align: middle;">Subjects</th>  
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center; vertical-align: middle;" rowspan="12">TE(SEM V)</td>
                            <td>310251: Data Science and Big Data Analytics</td> 
                        </tr>
                        <tr>
                            <td>310252: Web Technology</td> 
                        </tr>
                        <tr>
                            <td>310253: Artificial Intelligence</td> 
                        </tr>
                        <tr>
                            <td>310254A: Elective II - Information Security</td> 
                        </tr>
                        <tr>
                            <td>310254B: Elective II - Augmented and Virtual Reality</td> 
                        </tr>
                        <tr>
                            <td>310254C: Elective II - Cloud Computing</td> 
                        </tr>
                        <tr>
                            <td>310254D: Elective II - Software Modeling and Architectures</td> 
                        </tr>
                        <tr>
                            <td>310255: Internship</td> 
                        </tr>
                        <tr>
                            <td>310256: Data Science and Big Data Analytics Laboratory</td> 
                        </tr>
                        <tr>
                            <td>310257: Web Technology Laboratory</td> 
                        </tr>
                        <tr>
                            <td>310258: Laboratory Practice II</td> 
                        </tr>
                        <tr>
                            <td>310259: Audit Courses 6</td> 
                        </tr>
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