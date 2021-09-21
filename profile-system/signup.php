<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="profile-style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
             <h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

         
          <div class="form-group">
          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      class="form-control"
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      class="form-control"
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
          </div>
             
          <div class="form-group">
          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" class="form-control" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      class="form-control" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>
          </div>
         
          <!-- <label>Gender</label>
     	<input type="text"
                 class="form-control" 
                 name="gender" 
                 placeholder="Gender"><br>

          </div>

          <label>Address</label>
     	<input type="text"
                 class="form-control" 
                 name="address" 
                 placeholder="Address"><br>

          </div>

          <label>Phone</label>
     	<input type="text"
                 class="form-control" 
                 name="phone" 
                 placeholder="Phone"><br>

          </div>
           -->

          <label>Password</label>
     	<input type="password"
                 class="form-control" 
                 name="password" 
                 placeholder="Password"><br>

          </div>

          <div class="form-group">
           <label>Re Password</label>
          <input type="password"
                 class="form-control" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
           </div> 

     	
     	<button type="submit">Sign Up</button>
          <a href="loginpage.php" class="ca">Already have an account?</a>
          <div>
          <a href="../index.php" class="ca">Go to Home Page</a>
          </div>
     </form>
</body>
</html>