<?php
require 'header.php';
require 'config.php';
//$email = $password = '';
//$email_err = $password_err = '';
// if (isset($_POST['btn_signup'])){
//    if (isset($_POST['email'])){
//        $email = $_POST['email'];
//    }else{
//        $email_err = "Please fill in the right email";
//    }
//    if (isset($_POST['password'])){
//        $password = $_POST['password'];
//    }else{
//        $password_err = "Please fill in the correct password";
//    }
//
//    $password = md5($password);
//     $sql = "SELECT `id`, `firstname`, `lastname`, `username`, `email`, `phone`, `password`, `user_type`, `location` FROM `users` WHERE email = '$email' AND password = '$password'";
//    $results = mysqli_query($conn,$sql);

// }






?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/customerimage.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/vendorimage.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/deliveryimage.jpeg" class="d-block w-100" alt="...">
        </div>
        <br>

        <div class="container" style="color: orangered">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3"></div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div id="form-section">
                        <form action="" method="post" style="font-weight: bold; color: orange">
                            <fieldset>
                                <div class="form-group">
                                    <label style="color: darkorange" for="">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control" required>
                                </div>
                                <button class="btn btn-warning btn-block" name="btn_signup">Login</button>
                            </fieldset>
                        </form>

                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3"></div>
            </div>
        </div>
    </div>
</div>



<?php
require 'footer.php';
?>
