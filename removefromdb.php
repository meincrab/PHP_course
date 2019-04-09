<?php include("additional/header.php");?>
<?php require_once("additional/connection.php");?>
<?php 


if (!empty($_POST["courseToRemove"])) {
            $courseIdToRm = $_POST['courseToRemove'];
            echo $courseIdToRm;

            $q = intval($_POST['courseToRemove']);
            $query = mysqli_query($conn, "DELETE FROM courselist WHERE courseId = '".$q."'");
}
?>
<?php include("additional/footer.php")?>