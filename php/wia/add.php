<!DOCTYPE html>
<html lang="pl">
<head>
    <title>edit formats</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/style.css?v=<?php echo time(); ?>">
</head>
<body>
<header>
    <h2>add format</h2>
</header>
<div class="whole">
   <form action='add.php' method='POST'>
       <input type="text" name="nazwa" autocomplete="off" placeholder="name, max 5 chars..." maxlength="5"><br>
       <textarea name='tekst' placeholder="add text here..."></textarea><br>
       <input type='submit' value='submit'>
   </form>
    <?php
    // zastosowalem petle by mozna bylo przerwac wykonywanie
    // bo inaczej juz po stworzeniu wpisu nadal przechodzilo do
    // else i z tego powodu zawsze printowalo ze wpis istnieje
    do {
        // rowniez uzywam !empty poniewaz isset nie dziala na $_POST,
        // poniewaz jest globalny i defaultowo jest ustawiony na "set"
        if (!empty($_POST["nazwa"]) && !empty($_POST["tekst"])) {
            $nazwa = $_POST["nazwa"];
            $tekst = $_POST["tekst"];

            include("includes/dbcon.php");
            $exists = mysqli_query($conn, "SELECT nazwa FROM formaty WHERE nazwa='$nazwa'");
            if (!$exists || mysqli_num_rows($exists) == 0) {
                mysqli_query($conn, "INSERT INTO formaty VALUES('$nazwa', '$tekst')");
                echo "<div class='raport'>dodano wpis o nazwie $nazwa</div>";
                break;
            } else {
                echo "<div class='raport'>wpis o nazwie $nazwa juz istnieje</div>";
            }
        } else {
            echo "<div class='raport'>wypełnij wszytkie pola</div>";
        }
    }while(0);
    ?>
</div>
<div class="powrot">
    <a href="../index.php">powrót</a>
</div>
