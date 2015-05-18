<?php
session_start();
$Hpotionset=$_SESSION['setHpotion'];
$health=$_SESSION['health'];
$maxhealth=$_SESSION['maxhealth'];
$Hpotionset=$_SESSION['setHpotion'];

if($Hpotionset==0)
{
    $_SESSION['itemmessage']="You don't have any Health Potions left!<br />";
    header('location:Fight.php');
}
else
{
    $health=$health+50;
    $Hpotionset=$Hpotionset-1;
    if($health>=$maxhealth)
    {
        $health=$maxhealth;
        $_SESSION['itemmessage']="You used a Health Potion, are at max health<br />";
    }
    else
    {
    $_SESSION['itemmessage']="You used a Health Potion, Restored 50 health<br />";
    }
}
$_SESSION['health']=$health;
$_SESSION['setHpotion']=$Hpotionset;

header('location:Monsterhit.php');
?>