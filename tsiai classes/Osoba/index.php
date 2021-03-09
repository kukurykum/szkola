<?php
require_once('Osoba.class.php');
$jane = new Osoba('Jane', 'Doe', 'f', '2000-02-12', 555888777);

echo $jane -> getInfo();

$john = new Osoba('John', 'Doe','m', '1999-12-11', 13456789);
echo $john -> getInfo();
$john -> setSurname('Doenobody');
//  ^^ nazwisko "DoeNobody" nie przechodzi moich wymogow, wiec 'N' zmienilem na lowercase"

//raporty o osobach
echo $john -> getInfo();
echo $jane -> getInfo();
