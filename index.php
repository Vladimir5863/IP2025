<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>

    <header> <?php include "./templates/header.php"; ?></header>
    <nav> <?php include "./templates/navigate.php"; ?></nav>

    <form action="controller.php" method="post">
        Ime<input type="text" name="ime" required> <br>
        Prezime<input type="text" name="prezime" required> <br>
        Godiste<input type="number" name="godiste" required> <br>
        <button type="submit">Dodaj Osobu</button>
        <button type="reset">Reset</button>
    </form>

    <footer> <?php include "./templates/footer.php" ?></footer>

</body>

</html>