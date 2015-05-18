<?php
session_start();
$ability=$_SESSION['ability'];
$Monsterhealth=$_SESSION['Mhealth'];

if($ability>=250)
{
    $Monsterhealth=$Monsterhealth-250;
    $ability=$ability-250;
    $_SESSION['Abilitymessage']="You used Mindblast! BRAINS EXPLODED!<br />";
    $_SESSION['Mind']=1;
   $_SESSION['Mhealth']=$Monsterhealth;
    $_SESSION['ability']=$ability;
    header('location:basichit.php');
}
else
{
    $Abilitymessage="You don't have enough Ability Points";
    $_SESSION['Abilitymessage']=$Abilitymessage;
    header('location:Fight.php');
}
?>