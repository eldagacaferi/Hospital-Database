<?php

    

    $name = "";
    $email = "";
    $mobile = "";
    $servicetype = "";
    $message = "";
    $errors = array();
    
    $conn=mysqli_connect("localhost","root","","spitali");
        mysqli_select_db($conn,'spitali');
        
    if(isset($_POST['getapp']))
    {
        //mysqli_real_escape_string(); eshte nje funksion qe i largon karakteret speciale. Përdoret për të krijuar një string legal SQL që mund të përdoret në një query te SQL.
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
        $servicetype = mysqli_real_escape_string($conn,$_POST['servicetype']);
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
        if (empty($mobile)) 
        { 
            array_push($errors, "Mobile is required"); 
        }
        if (empty($message)) 
        { 
            array_push($errors, "Message is required"); 
        }
         
        $query = "SELECT * FROM `appontiment` WHERE name='$name' AND email='$email' LIMIT 1";
            
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
  
        if ($user) 
        { 
            if ($user['name'] === $name) 
            {
                array_push($errors, "Name already exists");
            }
            if ($user['email'] === $email) 
            {
                array_push($errors, "Email already exists");
            }
        }
        if (count($errors) == 0) 
        {
            
            //Kujdes te veqant tek insertimi i te dhenave!!!
           
                $regist ="INSERT INTO appontiment (name,email,mobile,servicetype,messagee)
                VALUES ('$name','$email','$mobile','$servicetype','$message')";
                
      $rows = "SELECT * FROM appontiment WHERE name='$name' AND email='$email'";
	
	           $run = mysqli_query($conn, $rows);
	
	           if(mysqli_num_rows($run)<10){
                   
                    mysqli_query($conn,$regist);
                    
                   echo "<script>alert('Submitted Successfully!');*</script>";
                    $_SESSION['name'] = $name;
  	                $_SESSION['success'] = "Appointment subbmited";
  	                
                   
    
               }
        }
    }
?>