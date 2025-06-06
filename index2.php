<?php
class Auto
{
    private $naziv, $boja;

    function __construct($naziv, $boja)
    {
        $this->naziv = $naziv;
        $this->boja = $boja;
    }

    function set_naziv($naziv)
    {
        $this->naziv = $naziv;
    }
    function set_boja($boja)
    {
        $this->boja = $boja;
    }
    function get_naziv()
    {
        return $this->naziv;
    }
    function get_boja()
    {
        return $this->boja;
    }
    function __destruct()
    {
        echo "<br>Poziv destruktora";
    }
}
class Terenac extends Auto
{
    function message()
    {
        echo "<br>Klasa terenac od klase Auto";
    }
}
$a = new Auto("RB", "Crvena");
$a->set_naziv("BMW");
$a->set_boja("Crna");
echo $a->get_naziv() . " - " . $a->get_boja();
$b = new Terenac("Jeep", "bela");
$b->message();
