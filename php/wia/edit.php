<!DOCTYPE html>
<html lang="pl">
<head>
    <title>edit formats</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
</head>
<body>
<header>
    <?php
    $nazwa = $_GET['id'];
    echo "<h2>edit <a>".$nazwa."<a/> <span style='color: #e2b714;'>as html</span></h2>";
    ?>
</header>
<div class="whole">
    <?php
        include("includes/dbcon.php");
        $result=mysqli_query($conn, "SELECT tekst FROM formaty WHERE nazwa='$nazwa'");
        $dane=mysqli_fetch_assoc($result);

        echo "<form action='edit.php?id=".$nazwa."' method='POST'>";
        echo "<textarea name='tekst'>".$dane['tekst']."</textarea><br>";
        echo "<input type='submit' value='submit'>";
        echo "</form>";

        if (isset($_POST["tekst"])) {
            $tekst = $_POST["tekst"];

            $query = mysqli_query($conn, "UPDATE formaty SET tekst='$tekst' WHERE nazwa='$nazwa'");
            header("Refresh:0");
        }
    ?>
</div>
<div class="powrot">
<a href="../index.php">powrót</a>
</div>
