<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Adresar</title>
</head>
<body>
<div class="container tabela">
    <h1>Adresar</h1>

    <?php
        require 'konekcija.php';
        $baza = "SELECT * FROM adresar";
        $upit = mysqli_query($konekcija, $baza);
        $rezultat = mysqli_fetch_all($upit, MYSQLI_ASSOC);
        require 'index.prikaz.php';
    ?> 
      
</div>
</body>
</html>