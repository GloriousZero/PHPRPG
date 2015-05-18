<?php
session_start();
$ability=$_SESSION['ability'];
$Monsterhealth=$_SESSION['Mhealth'];
$Monstername=$_SESSION['Mname'];

if($ability>=50)
{
    $Rollhit=rand(0, 100);
        
        if($Rollhit>30)
        {
            $Rolldamage=rand(40, 80);
            
            if($Monstername=="Big Slime")
            {
                $Rolldamage=rand(10, 30);
            }
            $Monsterhealth=$Monsterhealth-$Rolldamage;
        }
     $Rollhit=rand(0, 100);
        
        if($Rollhit>30)
        {
            $Rolldamage=rand(40, 80);
            
            if($Monstername=="Big Slime")
            {
                $Rolldamage=rand(10, 30);
            }
            $Monsterhealth=$Monsterhealth-$Rolldamage;
        }
     $Rollhit=rand(0, 100);
        
        if($Rollhit>30)
        {
            $Rolldamage=rand(40, 80);
            
            if($Monstername=="Big Slime")
            {
                $Rolldamage=rand(10, 30);
            }
            $Monsterhealth=$Monsterhealth-$Rolldamage;
        }
        
    $ability=$ability-50;
    $AbilityMessage="You used Rapid Reload<br />";
}
else
{
    $Abilityerror="You don't have enough Ability Points";
    $_SESSION['Abilityerror']=$Abilityerror;
}
$_SESSION[ability]=$ability;
$_SESSION[Mhealth]=$Monsterhealth;
$_SESSION[Abilitymessage]=$AbilityMessage;
header('location:Monsterhit.php');
?>