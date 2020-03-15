<?php
require 'header.php';
require 'config.php';

$firstname=$lastname=$username=$email=$phone=$password1=$password2=$user_type=$location='';
$firstname_error=$lastname_error=$username_error=$email_error=$phone_error=$password1_error=$password2_error=$location_error='';
//steps
//grabbing user data
if (isset($_POST ['btn-signup'])){
// 1. clean data
    if(isset($_POST ['firstname'])){
        $firstname = $_POST['firstname'];
    }else{
        $firstname_error = "Fill in first name";
    }
    if(isset($_POST ['lastname'])){
        $lastname = $_POST['lastname'];
    }else{
        $lastname_error = "Fill in last name";
    }
    if(isset($_POST ['username'])){
        $username = $_POST['username'];
    }else{
        $username_error = "Fill in username";
    }
    if(isset($_POST ['email'])){
        $email = $_POST['email'];
    }else{
        $email_error = "Fill in email";
    }
    if(isset($_POST ['phone'])){
        $phone = $_POST['phone'];
    }else{$phone_error = "Fill in phone no";
    }
    if(isset($_POST ['password1'])){
        $password1 = $_POST['password1'];
    }else{
        $password1_error = "Fill in password";
    }
    if(isset($_POST ['password2'])){
        $password2 = $_POST['password2'];
    }else{
        $password2_error = "Confirm your password";
    }
    if(isset($_POST ['user_type'])){
        $user_type= $_POST['user_type'];
    }else{
        $user_type_error = "Select your user type";
    }
    if(isset($_POST ['location'])){
        $location = $_POST['location'];
    }else{
        $location_error = "Select your location";
    }

// add user to db
    $password1 = md5($password1);
    $sql = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `username`, `email`, `phone`, `password`, `user_type`, `location`) VALUES (NULL,'$firstname','$lastname','$username','$email','$phone','$password1','$user_type','$location')";
    if(mysqli_query($conn,$sql)){
        //take user to login page
        header("location:login.php");
        exit();
    }else{
        echo "Error:".mysqli_error($conn);
    }
}

?>


<br>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div id="form-section">
                <form action="" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">Firstname</label>
                            <input type="text" name="firstname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" name="lastname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="number" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>
                        <div class="input-group">
                            <span>
                                Supplier <input type="radio" name="user-type" value="supplier">
                            </span>
                            <span>
                                Customer <input type="radio" checked name="user-type" value="customer">
                            </span>
                        </div>
                        <br>

                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Location</label>
                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Choose location</option>
                                        <option value="1">Kahawa Wendani</option>
                                        <option value="2">Roysambu</option>
                                        <option value="3">Muthaiga</option>
                                    </select>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
                                    </div>
                                </div>
<!--                                <div class="col-auto my-1">-->
<!--                                    <button type="submit" class="btn btn-primary">Submit</button>-->
<!--                                </div>-->
                            </div>

                        <br>
                        <button class="btn btn-warning btn-block" name="btn_signup">Create account</button>
                    </fieldset>
                </form>

            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>






<?php
require 'footer.php';
?>

