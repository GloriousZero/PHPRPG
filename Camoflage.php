<?php
session_start();
$ability=$_SESSION['ability'];
if($ability>=70)
{
    $camo=1;
    $ability=$ability-70;
    $_SESSION['Camo']=$camo;
}
else
{
    $Abilityerror="You don't have enough Ability Points";
    $_SESSION['Abilityerror']=$Abilityerror;
}
$_SESSION['ability']=$ability;
header('location:Fight.php');
?>