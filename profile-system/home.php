<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="profile-style.css">
</head>
<body>
     <div>
     <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
     <nav class="home-nav">
     	<a href="update-profile.php">Update Profile</a>
        <a href="logout.php">Logout</a>
     </nav>
     </div>



     <div class="m-3">
     <nav class="home-nav m-3">
     	<a href="../index.php">Go To Home Page</a>
        
     </nav>
     </div>
     
</body>
</html>

<?php 
}else{
     header("Location: loginpage.php");
     exit();
}
 ?>