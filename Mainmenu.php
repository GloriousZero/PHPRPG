<?php
session_start();
//MAIN MENU SHOWS THE STATS TO THE PLAYER AND GIVES HIM DIFFERENT CHOICES TO PLAY.
    if(!isset($_SESSION['kills']))
    {
        $kills=0;
        $_SESSION['kills']=$kills;
        
    }
    else
    {
        $kills=$_SESSION['kills'];
    }
    
    $class=$_SESSION['class'];
    $health=$_SESSION['health'];
    $ability=$_SESSION['ability'];
    $abilities=$_SESSION['abilities'];
    $items=$_SESSION['items'];
    $maxhealth=$_SESSION['maxhealth'];
    $maxability=$_SESSION['maxability'];
    $mindamage=$_SESSION['mindamage'];
    $maxdamage=$_SESSION['maxdamage'];
    
 
    
        
        $_SESSION['Camo']=0;
        $_SESSION['health']=$maxhealth;
        $_SESSION['ability']=$maxability;
        $_SESSION['setHpotion']=1;
        $_SESSION['setMpoition']=1;
        $_SESSION['setGBlessing']=1;
        
    
    
    
   

    echo"Class= $class <br />";
    echo"Health= $health / $maxhealth <br /> ";
    echo"Ability= $ability / $maxability <br />";
    echo"Base Damage= $mindamage-$maxdamage<br />";
    echo"<br />";
    echo"Abilities : <br /> ";

        $counter=1;
      foreach ($abilities as $abilities ) 
    {
        if($counter==1)
        {
        echo"<b>$abilities</b> :  "; 
        $counter=2;
        }
        else
        {
            echo"$abilities";
            echo"<br />";
            $counter=1;
        }
        }
    echo"<br />";
    echo"Items : <br />";
    foreach ($items as $items) {
        echo $items; 
        echo "<br />";
    }
    echo "<br />";
    echo"Monsters Killed: $kills <br />";

    
?>
<html>
    <a href="Monsterpicker.php">Fight Monsters</a>
    <br />
    <br />
    <a href="Resetgame.php">Reset your game</a>
    </html>