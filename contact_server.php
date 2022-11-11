<?php
    session_start();
    
    $name = "";
    $email = "";
    $subject = "";
    $message = "";
    $errors = array();
    
    $conn=mysqli_connect("localhost","root","","spitali");
        mysqli_select_db($conn,'spitali');
        
    if(isset($_POST['send']))
    {
       
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $subject = mysqli_real_escape_string($conn,$_POST['subject']);
        $message = mysqli_real_escape_string($conn,$_POST['message']);
              
        if (empty($name)) 
        {
            array_push($errors, "Name is required"); 
        }
        else if (!preg_match("/^[a-zA-ZëË ]*$/",$name)) 
        {
          array_push($errors, "Only letters and white space allowed");
        }

        if (empty($email)) 
        { 
            array_push($errors, "Email is required"); 
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
          array_push($errors, "Invalid email format");
        }
        if (empty($subject)) 
        { 
            array_push($errors, "Subject is required"); 
        }

        if (empty($message)) 
        {
            array_push($errors, "Message is required"); 
        }
        
        $query = "SELECT * FROM contact WHERE email='$email' LIMIT 1";
            
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
  
        if ($user) 
        { 
           
            if ($user['email'] === $email) 
            {
                array_push($errors, "Email already exists");
            }
        }
        if (count($errors) == 0) 
        {
  
           
                $regist ="INSERT INTO contact (name,email,subject,message)
                VALUES ('$name','$email','$subject','$message')";
                
      $rows = "SELECT * FROM contact WHERE name='$name' AND email='$email'";
  
             $run = mysqli_query($conn, $rows);
  
             if(mysqli_num_rows($run)<10){
                   
                    mysqli_query($conn,$regist);
                    
                   echo "<script>alert('Registration Successfully!');*</script>";
                    $_SESSION['name'] = $name;
                     $_SESSION['success'] = "Your message was sent!";
                     header('index.php');
                   
    
               }
        }
    }
?>