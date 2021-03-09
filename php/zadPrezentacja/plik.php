<html>
<head>
</head>
<html>
<head>
</head>
<body>
<h1>Witaj w PHP</h1>

<?php
	if (    //kiedy wchodze przez formularz
		isset($_POST["tlo"]) || isset($_POST["fontsize"]) ||
		isset($_POST["border"]) || isset($_POST["fontcolor"]) ||
		isset($_POST["font"])	|| isset($_POST["div"]) ||
		isset($_POST["tekst"])
	){
		if (!empty($_POST["tlo"]) && !empty($_POST["border"]) && !empty($_POST["font"]) && !empty($_POST["fontsize"]) && !empty($_POST["fontcolor"]) && !empty($_POST["div"])){//gdy dane nie sa puste
			$tlo=$_POST["tlo"];
			$border=$_POST["border"];
			$font=$_POST["font"];
			$fontsize=$_POST["fontsize"];
			$fontcolor=$_POST["fontcolor"];
			$div=$_POST["div"];
			$tekst=$_POST["tekst"];
			
			for ($i=0; $i<$div; $i++){
				echo "<div style='background-color: $tlo; border: $border solid black; font-family: $font; text-size: $fontsize; color: $fontcolor; margin: 20px;'>$tekst</div>";
			}
				
		}
		else{
			echo "Uzupelnij dane w formularzu";
		}
	}else{//danych brak
		echo "<h2>Wejdz poprzez formularz</h2>";
	}
	
?>



</body>
</html>