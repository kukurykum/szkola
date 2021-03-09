<?php
require_once('Odcinek.class.php');

$odcinek = new Odcinek(1);
$odcinek2 = new Odcinek("dzien dobry", "zycze", "milego", "dnia");

if($odcinek->liczDlugosc() > $odcinek2->liczDlugosc())
    echo "odcinek nr 1 jest dluzszy i wynosi: ".round($odcinek->liczDlugosc(), 2)."";
else
    echo "odcinek nr 2 jest dluzszy i wynosi: ".round($odcinek2->liczDlugosc(), 2)."";
