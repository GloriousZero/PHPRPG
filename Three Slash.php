<?php
session_start();

$ability=$_SESSION['ability'];
$Monsterhealth=$_SESSION['Mhealth'];

if($ability>=30)
{
    $ability=$ability-30;
    for($t=1;$t<3;$t=$t+1)
    {
        $Newhit=rand(20,60);
        $Rolldamage=$Rolldamage+$Newhit;
        echo"Hit";
    }
    $Monsterhealth=$Monsterhealth-$Rolldamage;
    $_SESSION['Abilitymessage']="You used Three Slash, you dealt $Rolldamage damage<br />";
    
}
else
{
    $_SESSION['Abilitymessage']="You do not have enough Ability Power<br />";
    header('location:Fight.php');
}
$_SESSION['Mhealth']=$Monsterhealth;
$_SESSION['ability']=$ability;
header('location:Monsterhit.php');
?>