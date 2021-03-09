<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Stronka</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
</head>
<body>
<header>
    <h2>
        formaty graficzne<a href="add.php">.</a>
    </h2>
</header>
<div style="overflow: hidden;">
<section>
    <nav>
        <ul>
            <?php
            include("includes/dbcon.php");

            $sql = "SELECT nazwa FROM formaty";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
//                    echo "<li><a href='".$row['nazwa'].".php'>".$row['nazwa']."</a></li>";
                    echo "<li><a href='format.php?id=".$row['nazwa']."'>".$row['nazwa']."</a></li>";
                }
            }
            $conn->close();
            ?>
        </ul>
    </nav>
    <article>