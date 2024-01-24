<?php 
require 'konekcija.php';
$id = $_GET['id'];
$baza = "SELECT * FROM adresar WHERE id = $id";
$upit = mysqli_query($konekcija, $baza);
$rezultat = mysqli_fetch_assoc($upit);
require 'izmena.prikaz.php';
?>