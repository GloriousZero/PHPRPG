<?php
session_start();
$ability=$_SESSION['ability'];
if($ability>=50) 
{
    $Piercerstrike=1;
    $ability=$ability-50 ;
        $_SESSION['Abilitymessage']="You've used Piercer Strike, 50% crit chance until end of fight!"; 
    $_SESSION['Piercerstrike']=$Piercerstrike;
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