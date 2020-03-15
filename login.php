<?php
require 'header.php';
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
                            <label for="">Username</label>
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


<?php
require 'footer.php';
?>
