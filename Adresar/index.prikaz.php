<form action="sacuvaj.php" method="post">
    <input type="text" name="ime" placeholder="Unesite ime" autofocus>
    <input type="text" name="prezime" placeholder="Unesite prezime">
    <input type="text" name="grad" placeholder="Unesite grad">
    <input type="text" name="adresa" placeholder="Unesite adresu">
    <input type="text" name="telefon" placeholder="Unesite telefon">
    <button type="submit">Sačuvaj</button>
</form>  

<?php foreach($rezultat as $red) : ?>
    <?php echo 'IME:' . ' ' . $red['IME'] . ' ' . $red['PREZIME']; ?> <a href="brisanje.php?id=<?php echo $red['ID']; ?>" class="btn">X</a> <a href="izmena.php?id=<?php echo $red['ID']; ?>" class="btn2">V</a> <br>
    <?php echo 'GRAD:' . ' ' . $red['GRAD']; ?> <br>
    <?php echo 'ADRESA:' . ' ' . $red['ADRESA']; ?> <br>
    <?php echo 'TELEFON:' . ' ' . $red['TELEFON']; ?> <hr>
<?php endforeach; ?>
<?php mysqli_close($konekcija); ?>