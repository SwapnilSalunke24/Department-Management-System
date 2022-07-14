<?php
    session_start();
    include('includes/security.php');
    $conn=mysqli_connect("localhost","root","","adminpanel");

    // if(isset($_POST['login_btn']))
    // {

    //     $Admin_Name = $_POST['AdminName'];
    //     $Admin_Password = $_POST['AdminPassword'];

    //     $query="SELECT * FROM `admin_login` WHERE Admin_Name='$Admin_Name' AND Admin_Password='$Admiin_Password'";
    //     $result=mysqli_query($conn,$query);
    //     if(mysqli_num_rows($result) > 0)
    //     {
            
    //         $_SESSION['username']=$Admin_Name;
    //         header("location: index.php");
    //     }
    //     else
    //     {
    //         $_SESSION['status']='Incorrect Username / Password';
    //         header("location: login.php");
    //     }
    // }
    

    if(isset($_POST['login_btn']))
    {
        // $Username=$_POST[Username];
        // $Password=$_POST[Password];
        // $utype=$_POST[utype];
        // $query="SELECT * FROM `admin_login` WHERE Username='$Username' AND Password='$Password' AND utype='$utype'";
        $query="SELECT * FROM `admin_login` WHERE Username='$_POST[Username]' AND Password='$_POST[Password]' AND utype='$_POST[utype]'";
        // $aquery="SELECT * FROM `admin_login` WHERE Username='$_POST[Username]' AND Password='$_POST[Password]' AND utype='$_POST[utype]'";
        
        if($query)
        {
            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0)
            {
                session_start();
                $_SESSION['Username']=$_POST['Username'];
                header("location: index.php");
            }
            else
            {
                    $squery="SELECT * FROM `student_login` WHERE Username='$_POST[Username]' AND Password='$_POST[Password]' AND utype='$_POST[utype]'";
                    $result1=mysqli_query($conn,$squery);
                    if(mysqli_num_rows($result1) > 0)
                    {
                        session_start();
                        $_SESSION['Username']=$_POST['Username'];
                        header("location: FacultyPanel.php");
                    }
                    else
                    {
                        $fquery="SELECT * FROM `faculty_login` WHERE Username='$_POST[Username]' AND Password='$_POST[Password]' AND utype='$_POST[utype]'";
                        $result2=mysqli_query($conn,$fquery);
                        if(mysqli_num_rows($result2) > 0)
                        {
                            session_start();
                            $_SESSION['Username']=$_POST['Username'];
                            header("location: FacultyPanel.php");
                        }
                        else
                        {
                            $_SESSION['status']='Incorrect Username / Password';
                            header("location: login.php");
                        }
                    }
            }
        }
        // if($query)
        // {
        //     $result=mysqli_query($conn,$query);
        //     if(mysqli_num_rows($result) > 0)
        //     {
        //         session_start();
        //         $_SESSION['Username']=$_POST['Username'];
        //         header("location: index.php");
        //     }
        //     else
        //     {
        //         $_SESSION['status']='Incorrect Username / Password';
        //         header("location: login.php");
        //     }
        // }
        
    }
    ?>

    
