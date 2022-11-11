<?php
   session_start();

   $username = "";
   $passwrod = "";
   $errors = array();

       $conn=mysqli_connect("localhost","root","","spitali");
        mysqli_select_db($conn,'spitali');
            
        if(isset($_POST['login']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
                   
            $login = "SELECT * FROM admin_orl WHERE username='$username' AND password='$password'";
                   
            $con=mysqli_query($connect, $login);
                   
                if(mysqli_num_rows($con)>0)
                {
                    $_SESSION['username']=$username;
                       
                    echo "<script>
                       window.open('admin.php','_self');
                       </script>";
                }
                elseif(empty($username)||empty($password))
                {
                    echo "<script>alert('Username or Password are empty!');</script>";
                }
                else
                {
                    echo "<script>
                       alert('User or Password is incorrect!');
                       </script>";
                }
        } 
               
?>