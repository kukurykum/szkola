<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formaty";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nazwa FROM formaty";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li><a href='" . $row['nazwa'] . ".php'>" . $row['nazwa'] . "</li>";

    }
}
$conn->close();
?>
