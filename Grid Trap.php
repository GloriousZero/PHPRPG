<?php
session_start();
$ability=$_SESSION['ability'];
$Monsterhealth=$_SESSION['Mhealth'];
$Monstername=$_SESSION['Mname'];
if($ability>30)
{
    $Monsterhealth=$Monsterhealth-20;

    $ability=$ability-30;

    $Abilitymessage="You used Grid trap and dealt 20 damage<br />";
    $MHitmessage="$Monstername is stunned";
}
else
{
    $Abilityerror="You don't have enough Ability Points<br />";
    $_SESSION['Abilityerror']=$Abilityerror;
}
$_SESSION['Abilitymessage']=$Abilitymessage;
$_SESSION['Mhitmessage']=$MHitmessage;
$_SESSION['ability']=$ability;
$_SESSION['Mhealth']=$Monsterhealth;
header('location:Fight.php');
?>
