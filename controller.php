<?php
require_once 'DAO.php';
require_once 'osoba.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($action == "Unesi") {
        $ime = isset($_POST['ime']) ? $_POST['ime'] : '';
        $prezime = isset($_POST['prezime']) ? $_POST['prezime'] : '';
        $godiste = isset($_POST['godiste']) ? $_POST['godiste'] : '';
        $osoba = new Osoba(0, $ime, $prezime, $godiste);

        $dao = new DAO();
        $dao->insertOsoba($osoba);

        $osobe = $dao->selectOsobe();
        include "prikazOsoba.php";
    }
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    if ($action == "all") {
        $dao = new DAO();
        $osobe = $dao->selectOsobe();
        include "pregledOsoba.php";
    } elseif ($action == "delete") {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $dao = new DAO();
        $dao->deleteOsoba($id);
        $osobe = $dao->selectOsobe();
        include "pregledOsoba.php";
    }
}
