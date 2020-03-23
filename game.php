<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta>
        <title>Steen,Papier,Schaar</title>
    </head>
    <body>
        <h1>Steen, Papier, Schaar</h1>

<?php
if (isset($_POST["speler1Keuze"])) {
    $_SESSION["speler1Keuze"] = $_POST["speler1Keuze"];
}
if (isset($_POST["speler2Keuze"])) {
    $_SESSION["speler2Keuze"] = $_POST["speler2Keuze"];
}
if (isset($_POST["reset"])) {
    unset($_SESSION["speler1Keuze"]);
    unset($_SESSION["speler2Keuze"]);
}
?>

<?php
if (isset($_SESSION["speler1Keuze"]) && isset($_SESSION["speler2Keuze"])) {

$speler1 = $_SESSION["speler1Keuze"];
$speler2 = $_SESSION["speler2Keuze"];

?>
<div class="">
<?php echo "Speler 1 heeft gekozen voor: $speler1"; ?>
</div>
<div class="">
<?php echo "Speler 2 heeft gekozen voor: $speler2"; ?>
</div>
<?php

if ($speler1 === $speler2) {
    echo "Het is gelijk spel";
}
else if($speler1 === "Steen"){
    if($speler2 === "Schaar") {
        echo "Speler 1 wint";
    } else {
        echo "Speler 2 wint";
    }
}
else if($speler1 === "Papier") {
    if($speler2 === "Steen") {
        echo "Speler 1 wint";
    }else {
        if($speler2 === "Schaar") {
            echo "speler 2 wint";
        }
    }
}
else if($speler1 === "Schaar") {
    if($speler2 === "Steen") {
        echo "Speler 1 wint";
    } else {
        if($CPU === "Papier") {
            echo "Speler 2 wint";
        }
    }
}



?>
<form class="" method="post">
    <input type="submit" name="reset" value="reset knop">
</form>
<?php


} elseif (isset($_SESSION["speler1Keuze"]) && !isset($_SESSION["speler2Keuze"])) {
    ?>
<form class="" method="post">
            <h2>Speler 1</h2>
                <h3>Speler 2 maakt zijn keuze</h3>
</form>
<form class="" method="post">
    <h2>Speler 2</h2>
        <select class="" name="speler2Keuze">
            <option value="">- Keuze -</option>
            <option value="Steen">Steen</option>
            <option value="Papier">Papier</option>
            <option value="Schaar">Schaar</option>
        </select>
    <input type="submit" name="submit2" value="Submit">
</form>

    <?php

} if (!isset($_SESSION["speler1Keuze"])) {
    ?>
<form class="" method="post">
    <h2>Speler 1</h2>
        <select class="" name="speler1Keuze">
            <option value="">- Keuze -</option>
            <option value="Steen">Steen</option>
            <option value="Papier">Papier</option>
            <option value="Schaar">Schaar</option>
        </select>
    <input type="submit" name="submit1" value="Submit">
</form>
<form class="" method="post">
    <h2>Speler 2</h2>
    <h3>Speler 1 maakt zijn keuze</h3>
</form>

    <?php
}
?>
    </body>
</html>
