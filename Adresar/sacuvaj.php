<?php
require 'konekcija.php';
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$grad = $_POST['grad'];
$adresa = $_POST['adresa'];
$telefon = $_POST['telefon'];
$baza = "INSERT INTO adresar VALUES (NULL, '$ime', '$prezime', '$grad', '$adresa', '$telefon')";
$upit = mysqli_query($konekcija, $baza);
if($upit) {
    header('Location: index.php');
}
