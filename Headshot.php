<?php  
session_start();

$ability=$_SESSION['ability'];
$Monsterhealth=$_SESSION['Mhealth'];
if($ability>=99)
{
    $Monsterhealth=$Monsterhealth-160;
    $ability=$ability-100;
    $_SESSION['Mhealth']=$Monsterhealth;
    $_SESSION['ability']=$ability;
    $Abilitymessage="You used Headshot, 160 damage straight to the face!";
    
}
else
{  
    $Abilitymessage="You don't have enough Ability Points";
   
}
 $_SESSION['Abilitymessage']=$Abilitymessage;

header('location:Monsterhit.php');
?>