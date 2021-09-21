<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "db_conn.php";

if (isset($_POST['op']) && isset($_POST['n_email'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$n_email = validate($_POST['n_email']);
	$c_np = validate($_POST['c_np']);
    $gender = validate($_POST['gender']);
	$address = validate($_POST['address']);
	$phone = validate($_POST['phone']);


    
    if(empty($op)){
      header("Location: update-profile.php?error=Old Password is required");
	  exit();
    }else if(empty($n_email)){
      header("Location: update-profile.php?error=New Email is required");
	  exit();
    }
	// else if($np !== $c_np){
    //   header("Location: update-profile.php?error=The confirmation password  does not match");
	//   exit();
    // }
	
	else {
    	// hashing the password
    	$op = $op;
    	
        $id = $_SESSION['id'];

        $sql = "SELECT password,email,gender,address,phone
                FROM users WHERE 
                id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET  password='$c_np',email='$n_email',gender='$gender',address='$address',phone='$phone'

					  WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: update-profile.php?success=Your profile has been updated successfully");
	        exit();

        }else {
        	header("Location: update-profile.php?error=Incorrect username or password please try again");
	        exit();
        }

	

    }

    
}
else{
	header("Location: update-profile.php");
	exit();
}

}else{
     header("Location: loginpage.php");
     exit();
}