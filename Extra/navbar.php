<?php 
session_start();?>



 <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  


    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>



      <li class="nav-item">

      <?php 
      if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){?>
        <a class="nav-link" href="profile-system/logout.php">LogOut</a>
      <?php 
      }
      else{
        ?>
        <a class="nav-link" href="profile-system/loginpage.php">Login</a>
        <?php 
      }
?>
      
      </li>



      <li class="nav-item">

<?php 
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){?>

<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">

          <a class="dropdown-item  text-white" href="viewprofile.php">View Profile</a>
          <a class="dropdown-item  text-white" href="profile-system/update-profile.php">Edit Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item  text-white" href="teampage.php">Creator of this site</a>
        </div>
  
<?php 
}
else{
  ?>
  
  <?php 
}
?>

</li>



    </ul>


    <form class="form-inline my-2 my-lg-0 ms-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


