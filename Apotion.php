<?php
session_start();
$Hpotionset=$_SESSION['setApotion'];
$ability=$_SESSION['ability'];
$maxability=$_SESSION['maxability'];
$Apotionset=$_SESSION['setApotion'];

if($Apotionset==0)
{
    $_SESSION['itemmessage']="You don't have any Ability Potions left!<br />";
    header('location:Fight.php');
}
else
{
    $ability=$maxability;
    $Apotionset=$Apotionset-1;
    
    
    $_SESSION['itemmessage']="You used an Ability Potion, Ability Points fully Replenished<br />";
}
$_SESSION['ability']=$ability;
$_SESSION['setApotion']=$Apotionset;

header('location:Monsterhit.php');
?>