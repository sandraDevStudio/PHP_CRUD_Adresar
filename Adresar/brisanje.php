<?php 
require 'konekcija.php';
$id = $_GET['id'];
$baza = "DELETE FROM adresar WHERE id = $id";
$upit = mysqli_query($konekcija, $baza);
header('Location: index.php');