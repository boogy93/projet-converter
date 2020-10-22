<?php
session_start();
if (empty($_SESSION['username'])) {
    
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Convert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
 
<body>
 
<?php
 
function celToFah(float $degrees)
{
    return $degrees * 1.8 + 32;
}
 
function fahToCel(float $degrees)
{
    return ($degrees - 32) / 1.8;
}
 
if (isset($_GET['cel'])) {
    $cel = floatval($_GET['cel']);
    $fah = celToFah($cel);
    $fahMsg = "$cel &deg;C = $fah &deg;F";
}
 
if (isset($_GET['fah'])) {
    $fah = floatval($_GET['fah']);
    $cel = fahToCel($fah);
    $celMsg = "$fah &deg;F = $cel &deg;C";
}
 Header("Location: resultat.php");
?>
 
 
