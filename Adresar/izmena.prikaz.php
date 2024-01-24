<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Izmena</title>
</head>
<body>
    <form action="izmeni-zapis.php" method="post">
        <input type="hidden" name="id" value="<?php echo $rezultat['ID']; ?>">
        <input type="text" name="ime" value="<?php echo $rezultat['IME']; ?>">
        <input type="text" name="prezime" value="<?php echo $rezultat['PREZIME']; ?>">
        <input type="text" name="grad" value="<?php echo $rezultat['GRAD']; ?>">
        <input type="text" name="adresa" value="<?php echo $rezultat['ADRESA']; ?>">
        <input type="text" name="telefon" value="<?php echo $rezultat['TELEFON']; ?>">
        <button type="submit">IZMENI</button>
    </form>
</body>
</html>