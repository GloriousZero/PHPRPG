<?php
session_start();
 
        
    $class=$_SESSION['class'];
    $health=$_SESSION['health'];
    $maxhealth=$_SESSION['maxhealth'];
    $maxability=$_SESSION['maxability'];
    $ability=$_SESSION['ability'];


    $monstername=$_SESSION['Mname'];
    $monsterhealth=$_SESSION['Mhealth'];
    $monsterability=$_SESSION['Mability'];
    $maxmonsterhealth=$_SESSION['MaxMhealth'];
    $maxmonsterability=$_SESSION['MaxMability'];
    $kills=$_SESSION['kills'];

    if($health<2)
    {
        echo" You've lost";
        echo" <br /><a href='Mainmenu.php'>Return to main menu?</a>";
        $Camo=0;
       
        $_SESSION['Camo']=$Camo;
        $_SESSION['runicarmor']=0;
        $_SESSION['Piercerstrike']=0;
        $_SESSION['maxability']=150;
    }
    elseif($monsterhealth<2)
    {
        echo"You've Won!";
        echo"<br /><a href='Mainmenu.php'>Return to main menu?</a>";
        $kills=$kills+1;
        $_SESSION['kills']=$kills;
        $Camo=0;
        $_SESSION['Camo']=$Camo;
        $_SESSION['runicarmor']=0;
        $_SESSION['Piercerstrike']=0;
        $_SESSION['maxability']=150;
    }
   
        
    
    else
    {
        $_SESSION['health']=$health;
        $_SESSION['ability']=$ability;
    echo"<div>";
    echo "$class <br />";
    echo "$health / $maxhealth<br />";
    echo "$ability / $maxability <br />";
    echo " <br />";
    echo " <br />";
    echo "</div>";
        
    echo "<div>";
    echo "$monstername <br />";
    echo "$monsterhealth/$maxmonsterhealth  <br />";
    echo "$monsterability/$maxmonsterability <br />";
    echo " <br />";
    echo " <br />";
    echo " </div>";
        
    echo " <br />";
    echo " <br />";
    echo " <br />";
    echo " <table>";
    echo " <tr>";
    echo " <td><a href='basichit.php'>Basic Attack</a></td>";
    echo " <td><a href='AbilityRegen.php'>Replenish AP</a></td>";
    echo " </tr>";
    echo " <tr>";
    echo " <td><a href='abilities.php'>Abilities</a></td>";
    echo " <td><a href='Items.php'</a>Items</a></td></tr>";
    echo " </table>";
    echo " <br />";
        
        //battle messages
        
   
 
        
    if(isset($_SESSION['itemmessage']))
    {
        $Itemmessage=$_SESSION['itemmessage'];
         echo"$Itemmessage";
        $_SESSION['itemmessage']=null;
    }
        
   
        
        echo"<br />";
        if(isset($_SESSION['Abilitymessage']))
        {
            $AbilityMessage=$_SESSION['Abilitymessage'];
            echo"$AbilityMessage";
            $_SESSION['Abilitymessage']=null;
        }  
     
        if(isset($_SESSION['Triggerwarning']))
    {
        $Triggerwarning=$_SESSION['Triggerwarning'];
         echo"$Triggerwarning";
        $_SESSION['Triggerwarning']=null;
    }    
        
        if(isset($_SESSION['Hitmessage']))
    {
        $hitmessage=$_SESSION['Hitmessage'];
        echo"$hitmessage";
        $_SESSION['Hitmessage']=null;
    }
        
   
        
        
    if(isset($_SESSION['Mhitmessage']))
    {
        $Mhitmessage=$_SESSION['Mhitmessage'];
        echo"$Mhitmessage";
        $_SESSION['Mhitmessage']=null;
    }
   
        
  
        
    }
?>
