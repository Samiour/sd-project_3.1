
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="css/mystylesheet.css"/>


    <title>profile page</title>
</head>
<body>
<?php include 'Extra/navbar.php'; ?>


<div>
    <p class="mt-4" style='font-size:3vw;'>Your Profile</p>
</div>

<div>
<i style='font-size:10vw;' class='fas text-info'>&#xf406;</i>
</div>

<div class="mt-5">
    <p>Username: <?php echo $_SESSION['user_name']; ?></p>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <p>password: <?php echo $_SESSION['password']; ?></p>
    <p>gender: <?php echo $_SESSION['gender']; ?></p>
    <p>address: <?php echo $_SESSION['address']; ?></p>
    <p>Phone: <?php echo $_SESSION['phone']; ?></p>


</div>



</body>
</html>