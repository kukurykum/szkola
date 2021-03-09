<?php
include("includes/head.php");
include("includes/dbcon.php");

$nazwa = $_GET['id'];

$sql = "SELECT tekst FROM formaty WHERE nazwa='$nazwa'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='title'>$nazwa: </div><br>" . $row["tekst"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
echo "<br><a href='edit.php?id=".$nazwa."'>edit ".$nazwa."</a><br><br>";

include("includes/foot.html");
?>
