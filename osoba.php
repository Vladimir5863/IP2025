<?
class Osoba
{

    private $id;
    private $ime;
    private $prezime;
    private $godiste;

    function __construct($id, $ime, $prezime, $godiste)
    {
        $this->id = $id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->godiste = $godiste;
    }
}
