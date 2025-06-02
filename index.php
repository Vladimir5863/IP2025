<!DOCTYPE html>
<html>

<head>
    <title>Naslov teksta</title>

</head>

<body>
    <?php
    $a = 5;
    $b = 10;
    echo $a + $b;
    ?>
    <br>
    <h1>Ovo je naslov</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore esse aspernatur maiores incidunt culpa. Voluptatum rem accusamus blanditiis. Corrupti rem placeat hic magnam pariatur voluptates, et eligendi consequuntur velit consectetur!</p>
    <?php
    $a = "tekst";
    echo "Ja pisem " . $a . "! <br>";
    $x = 5;
    function test()
    {
        static $h = 0;
        $h++;
        echo "Promenjiva x unutar funcije je" . $GLOBALS['x'] . ", i ispisala se " . $h . " puta.<br>";
    }

    test();
    test();
    test();
    test();
    test();

    echo "Promenjiva x van funkije je $x <br>";
    $p = 23.34;
    var_dump($p);
    class Car
    {
        public $model;
        function __construct($model)
        {
            $this->model = $model;
        }
    }

    $auto = new Car("BMW");
    echo "<br>" . $auto->model;
    $ucenici = ["Marko", "Jelena", "Petar", "Ana", "Milan", "14", "16", "18", "20", "22"];
    echo  "<br>" . $ucenici[2];
    ?>
</body>

</html>