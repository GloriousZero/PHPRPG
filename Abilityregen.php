<?php
session_start();
$ability=$_SESSION['ability'];
$class=$_SESSION['class'];

$maxability=$_SESSION['maxability'];

if($class=='Mage')
{
 $Rolleffect=rand(0, 100);
if($Rolleffect>=15)
{  
    $abilityadd=rand(20,50);
    $ability=$ability+$abilityadd;
    
    if($ability >=$maxability)
    {
        $ability=$maxability;
        $hitmessage="Max ability reached, cannot exceed";
    }
    else
    {
        $hitmessage="You have replenished $abilityadd Ability Points, New Ability Points is $ability<br />";
    }
}
else
{
    $hitmessage="You've failed replensishing your Ability Points, nothing happened<br />";
}
}
else
{

$Rolleffect=rand(0, 100);
if($Rolleffect>=25)
{  
    $abilityadd=rand(1,30);
    $ability=$ability+$abilityadd;
    
    if($ability >=$maxability)
    {
        $ability=$maxability;
        $hitmessage="Max ability reached, cannot exceed";
    }
    else
    {
        $hitmessage="You have replenished $abilityadd Ability Points, New Ability Points is $ability<br />";
    }
}
else
{
    $hitmessage="You've failed replensishing your Ability Points, nothing happened<br />";
}
}
$_SESSION['ability']=$ability;
$_SESSION['Hitmessage']=$hitmessage;
header('location:Monsterhit.php');
?>