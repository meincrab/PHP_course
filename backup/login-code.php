<?php 
      //  if(isset($_SESSION["session_username"])){
        // вывод "Session is set"; // в целях проверки
        //header("Location: intropage.php");
        //}
        if(isset($_POST['submit'])) {
            if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
			
			  if ($username == "admin" && $password == "admin") {
                $_SESSION['admin_username'] = $username;
                header ("Location: main_admin.php");
                        }
						
			else {		
            $hashedPassword = md5($password);
            $result = mysqli_query($conn, "SELECT username, password FROM userdb WHERE username = '$username'");
            if (!empty($result)) {
                if (mysqli_num_rows($result) >=1) {
                    while ($row = mysqli_fetch_object($result)) {
                        $db_password  =  $row -> password; }  
                if ($hashedPassword = $db_password) {
                    $_SESSION['session_username'] = $username;
                    header ("Location: main.php");
                } else {
                    echo "Password not valid";
            }  
        } else {echo "Incorrect Input";}
    }         
        else { echo "Wrong input";
        }
    }
		}
        else { echo "Fields are not filled";
        }   
        }
	
   ?>