<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	<link rel="stylesheet" type="text/css" href="profile-style.css">
</head>
<body>
    <form action="update-p.php" method="post">
     	<h2>Update Profile</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

				<label>New Email</label>
     	         <input type="text" 
     	         name="n_email" 
     	         placeholder="New Email">
     	       <br>


                 <div class="form-group">
				<label>Gender</label>
     	        <input type="text"
                 class="form-control" 
                 name="gender" 
                 placeholder="Gender"><br>

          </div>

          

            <div class="form-group">
			<label>Address</label>
     	       <input type="text"
                 class="form-control" 
                 name="address" 
                 placeholder="Address"><br>
			</div>

            <div class="form-group">
			<label>Phone</label>
     	         <input type="text"
                 class="form-control" 
                 name="phone" 
                 placeholder="Phone"><br>

          </div>
			</div>
          

     	<button type="submit">CHANGE</button>
          <a href="../index.php" class="ca">HOME</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: loginpage.php");
     exit();
}
 ?>