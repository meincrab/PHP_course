<?php function checkEmail(){
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);
    }
    else {
        $email = NULL;
    }
    return $email;
}
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['nickname'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $nickname = htmlspecialchars($_POST['nickname']);
        $email = checkEmail();
        /*The mysqli_query() function performs a query against the database.*/
        $query = mysqli_query($conn, "SELECT * FROM userdb WHERE username='.$username.'");
        /* The mysqli_num_rows() function returns the number of rows in a result set. */
        $numOfRows = mysqli_num_rows($query);
        if($numOfRows == 0) {
            $mySql="INSERT INTO userdb(username, password, nickname, email)
            VALUES('$username','$hash','$nickname', '$email')";
            $result = mysqli_query($conn, $mySql);
            if($result) {
                $info = "Account created";
            }
            else {
                $info = "Operation failed";
            }
        }
    }
        if (!empty($info)) {echo $info;}
?>