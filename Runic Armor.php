<?php
session_start();
$ability=$_SESSION['ability'];

if($ability>=40)
{
    $runicarmor=1;
    $ability=$ability-40;
    $_SESSION['runicarmor']=$runicarmor;
    $Abilitymessage="You used Runic Armor, increase damage output with 30 and increased chance to dodge attacks for 3 turns!<br />";
    $_SESSION['Abilitymessage']=$Abilitymessage;
    $_SESSION['ability']=$ability;

    header('location:basichit.php');
}
else
{
     $Abilitymessage="You don't have enough Ability Points<br />";
    $_SESSION['Abilitymessage']=$Abilitymessage;
    header('location:Fight.php');
}
?>