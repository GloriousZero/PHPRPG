<?php
session_start();
   
$ability=$_SESSION['ability'];


if($ability>=20)
{
    $greatslam="true";
    $ability=$ability-20;
    $Abilitymessage="Greatslam ready, will trigger when hitting target<br />";
}
else
{
    $Abilitymessage="You do not have enough Ability Power!<br />";
    header('location:Fight.php');
}

$_SESSION['ability']=$ability;
$_SESSION['greatslam']=$greatslam;
$_SESSION['Abilitymessage']=$Abilitymessage;
header('location:basichit.php');
?>