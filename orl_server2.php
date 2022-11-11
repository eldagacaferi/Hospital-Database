<?php
    session_start();
    
    //Inicializimi i variablave
    $firstname = "";
    $lastname = "";
    $allergy  = "";
    $medicines  = "";
    $date  = "";
    $time  = "";
    $errors = array();
    
    $conn=mysqli_connect("localhost","root","","spitali");
        mysqli_select_db($conn,'spitali');
        
    if(isset($_POST['login']))
    {
        //mysqli_real_escape_string(); eshte nje funksion qe i largon karakteret speciale. Përdoret për të krijuar një string legal SQL që mund të përdoret në një query te SQL.
    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
        $allergy = mysqli_real_escape_string($conn,$_POST['allergy']);
        $medicines = mysqli_real_escape_string($conn,$_POST['medicines']);
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        $time = mysqli_real_escape_string($conn,$_POST['time']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $birthday = mysqli_real_escape_string($conn,$_POST['birthday']);
              
        if (empty($firstname)) 
        {
            array_push($errors, "Firstname is required"); 
        }
        else if (!preg_match("/^[a-zA-ZëË ]*$/",$firstname)) 
				{
					array_push($errors, "Only letters and white space allowed");
				}
        if (empty($lastname)) 
        {
            array_push($errors, "Lastname is required"); 
        }
        else if (!preg_match("/^[a-zA-ZëË ]*$/",$lastname)) 
			{
			array_push($errors, "Only letters and white space allowed");
			}

        if (empty($allergy)) 
             {
              array_push($errors, "Allergy is required"); 
             }

         if (empty($medicines)) 
             {
              array_push($errors, "Medicines is required"); 
             }

                if (empty($date)) 
                {
                    array_push($errors, "Date is required"); 
                }
        
                if (empty($time)) 
                {
                    array_push($errors, "Time is required"); 
                }
        // $query = "SELECT * FROM allergology_patients WHERE firstname='$firstName' OR mbiemri='$lastName' OR email='$email' LIMIT 1";
            
        // $result = mysqli_query($conn, $query);
        // $user = mysqli_fetch_assoc($result);
  
        // if ($user) 
        // { 
        //     if ($user['firstname'] === $firstName) 
        //     {
        //         array_push($errors, "Firstname already exists");
        //     }
        //     if ($user['lastname'] === $lastName) 
        //     {
        //         array_push($errors, "Lastname already exists");
        //     }
        //     if ($user['email'] === $email) 
        //     {
        //         array_push($errors, "Email already exists");
        //     }
        // }
           
 $regist ="INSERT INTO orl_patients (firstname,lastname,allergy,medicines,date,time,gender,birthday)
                VALUES ('$firstname','$lastname','$allergy','$medicines','$date','$time','$gender','$birthday')";




                
                
                $rows = "SELECT * FROM orl_patients WHERE firstname='$firstname' AND lastname='$lastname'";
	
	           $run = mysqli_query($conn, $rows);
	
	           if(mysqli_num_rows($run)<100){
                   
                    mysqli_query($conn,$regist);
                    
                //   echo "window.open('login.php')";
    
               }
        }
?>
