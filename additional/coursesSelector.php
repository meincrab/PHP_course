<?php require_once("additional/connection.php");?>
<?php  
    $query = "SELECT courseId,courseName FROM courselist ORDER BY courseId ASC";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result))
    {
      echo "<option value='".$row['courseId']."'>'".$row['courseId']." ".$row['courseName']."'</option>";
    }

?>