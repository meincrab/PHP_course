<?php include("additional/header.php")?>
<?php require_once("additional/connection.php")?>
<?php

$q = intval($_GET['q']);
$query = mysqli_query($conn, "SELECT * FROM courselist WHERE courseId = '".$q."'");
echo "<table>
<tr>
<th>courseName</th>
<th>courseData</th>
<th>courseStatus</th>
<th>Grade</th>
<th>Additional</th>
</tr>";
while($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $row['courseName'] . "</td>";
    echo "<td>" . $row['courseData'] . "</td>";
    echo "<td>" . $row['courseStatus'] . "</td>";
    echo "<td>" . $row['Grade'] . "</td>";
    echo "<td>" . $row['Additional'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
<?php include("additional/footer.php")?>