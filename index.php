<?php
$a = -5;

$niz = ["jabuka", "kruska", "sljiva", "kajsija"];
$niz[7] = "malina";

$osobe = [
    ["ime" => "Marko", "prezime" => "Markovic", "godiste" => "2000", "ocene" => array(6, 7, 8, 9)],
    ["ime" => "Stefan", "prezime" => "Markovic", "godiste" => "2002", "ocene" => array(6, 7, 8, 9)],
    ["ime" => "Marko", "prezime" => "Markovic", "godiste" => "2005", "ocene" => array(6, 7, 8, 9)],
    ["ime" => "Jelena", "prezime" => "Markovic", "godiste" => "2000", "ocene" => array(6, 7, 10, 10)],
    ["ime" => "Marko", "prezime" => "Markovic", "godiste" => "2000", "ocene" => array(6, 9, 9, 8)],
    ["ime" => "Ana", "prezime" => "Petrovic", "godiste" => "2001", "ocene" => [9, 10, 8, 10]],
    ["ime" => "Luka", "prezime" => "Jovanovic", "godiste" => "2003", "ocene" => [7, 6, 7, 8]],
    ["ime" => "Nikola", "prezime" => "Nikolic", "godiste" => "2004", "ocene" => [8, 9, 9, 10]],
    ["ime" => "Ivana", "prezime" => "Kovacevic", "godiste" => "2000", "ocene" => [10, 10, 10, 10]],
    ["ime" => "Filip", "prezime" => "Stojanovic", "godiste" => "2002", "ocene" => [6, 5, 7, 6]],
    ["ime" => "Marija", "prezime" => "Savic", "godiste" => "2001", "ocene" => [9, 9, 8, 7]],
    ["ime" => "Aleksandar", "prezime" => "Popovic", "godiste" => "2005", "ocene" => [8, 8, 9, 10]],
    ["ime" => "Teodora", "prezime" => "Milosevic", "godiste" => "2003", "ocene" => [7, 7, 6, 8]],
    ["ime" => "Milan", "prezime" => "Vukovic", "godiste" => "2004", "ocene" => [10, 9, 10, 9]],
    ["ime" => "Sara", "prezime" => "Ristic", "godiste" => "2002", "ocene" => [6, 6, 7, 7]]
];

?>

<html>

<head>
    <title>Nedelja3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if ($a > 0) {
    ?>
        <h1>Promenjiva a je veca od 0</h1>
    <?php
    } else {
    ?>
        <p>Promenjiva a nije veca od 0</p>
    <?php
    }
    ?>

    <ul>
        <?php
        foreach ($niz as $pom) {
        ?>
            <li> <?= $pom ?> </li>
        <?php
        }
        ?>
    </ul>

    <table>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godiste</th>
            <th>Ocene</th>
        </tr>
        <?php
        foreach ($osobe as $pom) {
        ?>
            <tr>
                <td><?= $pom["ime"] ?> </td>
                <td><?= $pom["prezime"] ?></td>
                <td><?= $pom["godiste"] ?></td>
                <td><?= implode(", ", $pom["ocene"]) ?></td>
            </tr>
        <?php
        }
        ?>

    </table>

    <a href="index1.php">Drugi zadatak</a>
    <br>

    <a href="index2.php">Treci zadatak</a>

</body>

</html>