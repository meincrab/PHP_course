    <!-- Makes webpage more simple, also adds dynamic to it -->
<?php include("additional/header.php")?>
<?php require_once("additional/connection.php");?>
<?php require_once("additional/registration-code.php") ?> 
<div id="login">
 <h1>Register</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="registerform" name="registerform">
 <p>Username<br>
 <input class="input" id="username" name="username"size="20"  type="text" value=""></p>
<p>Password<br>
<input class="input" id="password" name="password" size="32"type="password" value=""></p>
<p>Nickname<br>
<input class="input" id="nickname" name="nickname"size="32" type="text" value=""></p>
<p>Email<br>
<input class="input" id="email" name="email" size="32" type="email" value="" placeholder="Optional, needed for password reset!"></label></p>
<input class="button" id="register" name="register" type="submit" value="Register">
	  <p>Already have an account? <a href="login.php">Login here!</a>!</p>
 </form>
</div>

<?php include("additional/footer.php")?>