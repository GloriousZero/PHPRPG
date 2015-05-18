<?php
session_start();

$health=$_SESSION['health'];
$Monstername=$_SESSION['Mname'];
$minmdamage=$_SESSION['MinMdamage'];
$maxmdamage=$_SESSION['MaxMdamage'];
$hitMchance=$_SESSION['Mhitchance'];



    $MRollhit=rand(0, 100);
    
    if($MRollhit>=$hitMchance)
    {
        $MRolldamage=rand($minmdamage, $maxmdamage);
        $Mhitmessage="$Monstername has hit you for $MRolldamage damage <br />";
        $health=$health-$MRolldamage;
    }
    Else
    {
        $Mhitmessage="$Monstername Missed";
    }




$_SESSION['Mhitmessage']=$Mhitmessage;
$_SESSION['health']=$health;

header('location:Fight.php');
?>