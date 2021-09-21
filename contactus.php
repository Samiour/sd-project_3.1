<?php
$con = mysqli_connect('localhost','root');
if($con && !empty($_POST)){
    mysqli_select_db($con,'3.1sd');
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userphone = $_POST['userphone'];
    $usermsg = $_POST['usermsg'];
    $query = " insert into contactus (username, useremail, userphone, usermsg) values('$username','$useremail','$userphone','$usermsg') ";
    mysqli_query($con,$query);
    
}



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="css/mystylesheet.css"/>
    </head>
    <body>
        <?php include 'Extra/navbar.php'; ?>
        <div class="container w-50 a-auto">
            <section>
                <div class='py-5'>
                    <h2 class='text-center'>Contact Us</h2>
                </div>
                <div>
                    <form action='' method='POST'>
                        <div class='form-group pb-3 pt-0'>
                            <label>Enter Name</label>
                            <input type='text' name='username' class='form-control' required>
                        </div>
                        <div class='form-group py-3'>
                            <label>Enter Email</label>
                            <input type='email' name='useremail' class='form-control' required>
                        </div>
                        <div class='form-group py-3'>
                            <label>Enter Phone No.</label>
                            <input type='text' name='userphone' class='form-control' required>
                        </div>
                        <div class='form-group pt-3 pb-5'>
                            <label>Message</label>
                            <textarea class='form-control' name='usermsg'></textarea>                            
                        </div>
                        <button type='submit' class='btn btn-primary text-center'>Send</button>
                    </form>
                </div>
            </section>
        </div>
        <?php include 'Extra/footer.php'; ?>
        
        <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>