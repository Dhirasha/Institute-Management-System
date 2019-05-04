<?php

include('../../includes/connection.php');


    // Assign input data from form to variables
	$student_id = $_POST['student_id'];
	$subject_id = $_POST['subject_id'];
    $amount = $_POST['amount'];
	
        //Insert to Database
            $registrationQuery = "INSERT INTO monthly_fee(student_id,subject_id,amount) VALUES ('$student_id','$subject_id','$amount')";
            

            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Payment Successful"));
				header('Location:../cashier-student-list.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Paying"));
				header('Location:../cashier-student-list.php?msg=' . $message);
				exit();
            }


mysqli_close($connection);
   


?>