<?php 

    /*Inserting content of constants.php into connection.php. 
    On failure /require/ should stop the script from running*/
    require("constants.php");
    
    // Creating connection
    $conn = mysqli_connect("$DB_SERVER","$DB_USER","$DB_PASSWORD","$DB_NAME") or 
    die ("Connection failed");
?>