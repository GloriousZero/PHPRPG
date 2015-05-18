<?php
session_start();
$ability=$_SESSION['ability'];
$maxability=$_SESSION['maxability'];

if($ability>=60)
{
    $maxability=$maxability+50;
    $ability=$ability-60;
    $_SESSION['Abilitymessage']="You used Burning Passion! increased damage for 3 turns and increased maximum Ability Power!";
    $_SESSION['ability']=$ability;
    $_SESSION['maxability']=$maxability;
    $_SESSION['burningpassion']=1;
    header('location:Fight.php');
}
else
 {
    $Abilitymessage="You don't have enough Ability Points";
    $_SESSION['Abilitymessage']=$Abilitymessage;
    header('location:Fight.php');
}
?>