   <?php 
   session_start();
   ?>

    <!-- Makes webpage more simple, also adds dynamic to it -->
   <?php include("additional/header.php")?>
   <?php require_once("additional/connection.php") ?>
   <?php require_once("additional/login-code.php") ?>
   <div class = "loginContainer">
        <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>" id="loginform"  name="loginform">
            <p>
                <p>Default - test / test</p>
                <p>Admin - admin / admin</p>
                <label for="user_login">Login<br>
                    <input type="text"  id="username" name="username" size="20" value="">
                </label>
            </p>
            <p>
                <label for="user_password">Password<br>
                    <input type="password" id="userpass" name="password" value="">
                </label>
            </p>
            <p>
                <input type="submit" value="Get Inside" name="submit">
            </p>         
        </form>
        <p>
                Not registered yet? So it's perfect time to do it right <a href= "registration.php">NOW!</a>!</p>
            </p>
    </div>
    <?php include("additional/footer.php")?>
    