<?php 
require 'konekcija.php';
$id = $_POST['id'];
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$grad = $_POST['grad'];
$adresa = $_POST['adresa'];
$telefon = $_POST['telefon'];
$baza = "UPDATE adresar SET IME = '$ime', PREZIME = '$prezime', GRAD = '$grad', ADRESA = '$adresa', TELEFON = '$telefon' WHERE id = $id";
$upit = mysqli_query($konekcija, $baza);
header('Location: index.php');