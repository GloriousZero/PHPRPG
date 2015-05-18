<?php
session_start();
//HERE THE MONSTER WILL BE CHOSEN TO FIGHT, THIS IS ALSO THE MONSTER DATABASE, YOU CAN ADD OTHER MONSTERS HERE BY REPLACING EVERYTHING
$Monsterpick=rand(1, 4);

if($Monsterpick==1)
{
    $monstername="Big Slime";
    $monsterhealth=100;
    $monsterability=20;
    $maxmonsterhealth=100;
    $maxmonsterability=20;
    $MinMdamage=10;
    $MaxMdamage=40;
    $Mhitchance=40;
    
}
if($Monsterpick==2)
{
    $monstername="Skeleton Knight";
    $monsterhealth=200;
    $monsterability=50;
    $maxmonsterhealth=200;
    $maxmonsterability=50;
    $MinMdamage=30;
    $MaxMdamage=80;
    $Mhitchance=50;
}
if($Monsterpick==3)
{
    $monstername="Orge Boss";
    $monsterhealth=200;
    $monsterability=75;
    $maxmonsterhealth=200;
    $maxmonsterability=75;
    $MinMdamage=60;
    $MaxMdamage=120;
    $Mhitchance=75;
}
if($Monsterpick==4)
{
  $monstername="Demonscale Dragon";
    $monsterhealth=500;
    $monsterability=100;
    $maxmonsterhealth=500;
    $maxmonsterability=100;
    $MinMdamage=100;
    $MaxMdamage=180;
    $Mhitchance=80;
}




    $_SESSION['Mname']=$monstername;
    $_SESSION['Mhealth']=$monsterhealth;
    $_SESSION['Mability']=$monsterability;
    $_SESSION['MaxMhealth']=$maxmonsterhealth;
    $_SESSION['MaxMability']=$maxmonsterability;
    $_SESSION['MinMdamage']=$MinMdamage;
    $_SESSION['MaxMdamage']=$MaxMdamage;
    $_SESSION['Mhitchance']=$Mhitchance;

header("location:Fight.php");
?>