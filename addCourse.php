<?php include("additional/header.php");?>
<?php require_once("additional/connection.php");?>
<?php

 if (isset($_POST['submit'])) {
    $courseName = htmlspecialchars($_POST['courseName']);
    $courseData = htmlspecialchars($_POST['courseData']);
    $courseStatus = htmlspecialchars($_POST['courseStatus']);
    $grade = htmlspecialchars($_POST['Grade']);
    $additional = htmlspecialchars($_POST['Additional']);

    $query = mysqli_query($conn, "SELECT * FROM courselist WHERE courseName='$courseName'");
    /* The mysqli_num_rows() function returns the number of rows in a result set. */
    $numOfRows = mysqli_num_rows($query);

    echo $numOfRows;
    echo var_dump($numOfRows);
    if($numOfRows == 0) {
        $mySqlC = "INSERT INTO courselist(courseName, courseData, courseStatus, Grade, Additional)
        VALUES('$courseName','$courseData','$courseStatus', '$grade', '$additional')";
        $result = mysqli_query($conn, $mySqlC);
            if($result) {
                $info = "New Data Added";
            }
        else {
        $info = "Something wrong with inserting!";
             }
    }
    else {echo "Operation failed, course already exists";}
    }
    /* $query = mysqli_query($conn, "SELECT * FROM courselist WHERE courseName='.$courseName.'");
    /* The mysqli_num_rows() function returns the number of rows in a result set. */
    /*   $numOfRows = mysqli_num_rows($query);

    if($numOfRows == 0) {
        $mySql="INSERT INTO courselist(courseName, courseData, courseStatus, Grade, Additional)
        VALUES('$courseName','$courseData','$courseStatus', '$grade'. $additional)";
        $result = mysqli_query($conn, $mySql);
        if($result) {
            $info = "Account created";
        }
        else {
            $info = "Operation failed, course exists";
        }
    } */

     ?>

<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="post" id="courseForm"> 
<p>courseName<br>
<input type="text" name="courseName" size="32"  value="">
<p>courseData<br>
<input type="text" name="courseData" size="32"  value="">
<p>courseStatus<br>
<input type="text" name="courseStatus" size="32"  value="">
<p>Grade<br>
<input type="range" name="Grade" min="1" max="5" step = "1">
<p>Additional<br>
<textarea name="Additional" rows="5" cols="34"value=""></textarea>
<p>button<br>
<input type="submit" name="submit" value ="Enter new data">
</form>

<?php include("additional/footer.php")?>