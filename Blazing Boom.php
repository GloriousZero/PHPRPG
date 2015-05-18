
<?php
session_start();
   
$ability=$_SESSION['ability'];
$Monsterhealth=$_SESSION['Mhealth'];
$Monstername=$_SESSION['Mname'];


if($ability>=40)
{
    
    $ability=$ability-40;
    $Monsterhealth=$Monsterhealth-50;
    $Abilitymessage="You used Blazing Boom, 50 damage against $Monstername<br />";
    $_SESSION['ability']=$ability;
    $_SESSION['Abilitymessage']=$Abilitymessage;
    $_SESSION['Mhealth']=$Monsterhealth;
    header('location:Monsterhit.php');
}
else
{
    $Abilitymessage="You do not have enough Ability Power!<br />";
    $_SESSION['Abilitymessage']=$Abilitymessage;
    header('location:Fight.php');
}


?>
