<?php
session_start();
$class=$_SESSION['class'];
$Monsterhealth=$_SESSION['Mhealth'];
$Monstername=$_SESSION['Mname'];
$hitchance=$_SESSION['hitchance'];
$mindamage=$_SESSION['mindamage'];
$maxdamage=$_SESSION['maxdamage'];
$Bane=$_SESSION['baneofexistence'];

//Check if abilities are active

if(isset($_SESSION['Camo']))
{
    $Camo=$_SESSION['Camo'];
}

if(isset($_SESSION['Mind']))
{
    $Mind=$_SESSION['Mind'];
}
else
{
    $Mind=0;
}


if(isset($_SESSION['runicarmor']))
{
    $runicarmor=$_SESSION['runicarmor'];
}
else
{
    $runicarmor=0;
}
if(isset($_SESSION['Piercerstrike']))
{
    $Piercerstrike=$_SESSION['Piercerstrike'];
}
else
{
    $Piercerstrike=0;
}
    
if(isset($_SESSION['storm']))
{
    $storm=$_SESSION['storm'];
}
else
{
    $storm=0;
}

if($storm>=1 and $storm<=3)
{
    $Monsterhealth=$Monsterhealth-40;
    $_SESSION['Triggerwarning']="Storm is rising, $Monstername gets 40 damage!";
    $storm=$storm+1;
    $_SESSION['storm']=$storm;
    
}
else
{
    $storm=0;
}





//HeroRoll Hits
    $Rollhit=rand(0, 100);
    
    if(isset($_SESSION['GBlessing']))
    {
        $oldhitchance=$hitchance;
        $hitchance=$hitchance-30;
        $_SESSION["GBlessing"]=null;
    }
    if($Rollhit>$hitchance)
        {
            $Rolldamage=rand($mindamage, $maxdamage);
            if($Monstername==$Bane)
            {
                $Rolldamage=$Rolldamage-15;
                if($Rolldamage<=0)
                {
                    $Rolldamage=0;
                }


            }
            if(isset($_SESSION['greatslam']))
            {
                $_SESSION['greatslam']=null;
                $Rolldamage=$Rolldamage+30;
                $_SESSION['Triggerwarning']="You triggered Great Slam, 30 damage added!<br />";
            }
        
        
            if($runicarmor>=1 and $runicarmor<3)
            {
                
                $Rolldamage=$Rolldamage+30;
                
                
            }
        
            if($Piercerstrike==1)
            {
                $Rolldamage=$Rolldamage*2;
            }
        
            if($Bpassion>=1 and $Bpassion<=3)
            {
                $Rolldamage=$Rolldamage+30;
                $Bpassion=$Bpassion+1;
                
            }
            else
            {
                $Bpassion=0;
            }
        
            $Monsterhealth=$Monsterhealth-$Rolldamage;
             $hitmessage="You hit for $Monstername for $Rolldamage damage <br /> ";
        
        }
        else
        {
            $hitmessage="You missed $Monstername <br />";
        }

    if(isset($_SESSION['Gblessing']))
    {
        $hitchance=$oldhitchance;
        $_SESSION['Gblessing']=null;
    }




$_SESSION['Hitmessage']=$hitmessage;
$_SESSION['Mhealth']=$Monsterhealth;




    
if($Camo>=1 and $Camo<=3)
{
    $Camo=$Camo+1;
    $_SESSION['Camo']=$Camo;
    
    header('location:Fight.php');
}

else
{
    $Camo=0;
}
if($Mind>=1 and $Mind<=3)
{
    $Mind=$Mind+1;
    $_SESSION['Mind']=$Mind;
    
    header('location:Fight.php');
}

else
{
    $Mind=0;
}

    if($runicarmor>=1 and $runicarmor<3)
    {
        $runicarmor=$runicarmor+1;
        $_SESSION['runicarmor']=$runicarmor;
        $rollattack=rand(0,100);
        if($rollattack>80)
        {
            echo"runicarmor fucked up" ;
            header('location:Monsterhit.php');
        }
        else
        {

            echo"Runicarmor did his job";
            
            header('location:Fight.php');
        }
    }
     elseif($runicarmor>=4)
    {
        $_SESSION['runicarmor']=0;
        header('location:Monsterhit.php');
    }




    $_SESSION['Camo']=0;
    echo"runicarmor failed";
  header('location:Monsterhit.php');





?>