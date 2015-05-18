<?php
session_start();

$ability=$_SESSION['ability'];

if($ability>=50)
{
    $storm="1";
    $ability=$ability-50;
    $_SESSION['Abilitymessage']="You used Crystal storm, damage per turn against enemy for 3 turns!";
    $_SESSION['ability']=$ability;
    $_SESSION['storm']=$storm;
    header('location:Monsterhit.php');
}
else
{
    $Abilitymessage="You don't have enough Ability Points";
    $_SESSION['Abilitymessage']=$Abilitymessage;
    header('location:Fight.php');
}
?>