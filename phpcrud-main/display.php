<?php


require_once('connect.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);
$Id = null;


if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " .  $row["Id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. '<a href="update.php?Id='.$Id.'">Update</a> | <a href="delete.php?Id='.$Id.'">Delete</a></div>'. "<br>";
    }
} else {
    echo "0 results";
}

?>

