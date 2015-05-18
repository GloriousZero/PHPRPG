<?php
session_start();
$setGblessing=$_SESSION['setGBlessing'];

if($setGblessing==0)
{
    $_SESSION['itemmessage']="You don't have a Gifted Blessing!<br />";
    header('location:Fight.php');
}
else
{
    $Gblessing="true";
    $setGblessing=$setGblessing-1;
    $_SESSION['setGBlessing']=$setGblessing;
    $_SESSION['GBlessing']=$Gblessing;
    $_SESSION['itemmessage']="You used Gifted Blessing, Increased hit chance!<br />";
   header('location:basichit.php');
}

    
?>