
    <?php
    //basic ability page
    //Create a new page and insert the following
session_start();
$ability=$_SESSION['ability'];
if($ability>= //insert amount AP needed for ability);
{
    //Insert what happens here
    $ability=$ability- //Amount AP needed for ability
        $_SESSION['Abilitymessage']="You've used ..."; //Insert in the dots what ability you used and the effects
    header('location: ... '); //Insert in the dots where the player should go after the ability
}
else
{
    $Abilitymessage="You don't have enough Ability Points";
    $_SESSION['Abilitymessage']=$Abilitymessage;
    header('location:Fight.php');
}

   
   
   
   
   
   
   //NEW CLASS
   
   //How to:
   //Go to Gamestart.php
   //Make a new Input, keep everything the same exept for the value, change this to the class name.
   //place piece of code under this explaination in statset.php, right under the last made character.
   //Replace the stats with the stats of your desire.
   //???
   //Profit
   
   elseif($class=='') //Insert the value of Gamestart.php.
     {
        $_SESSION['maxhealth']=;    //Maximum amount of HP.
        $_SESSION['maxability']=;   //Maximum amount of AP.
        $_SESSION['class']="";  //Classname.
        $_SESSION['health']=;   //Amount of HP.
        $_SESSION['ability']=;  //Amount of AP.
        $_SESSION['mindamage']=; //Minimum amount of damage.
        $_SESSION['maxdamage']=; //maximum amount of damage.
        $_SESSION['hitchance']=; //chance to hit, between 1 and 100 please, it works with percentages. 
        $_SESSION['baneofexistence']=""; //Bane is a monster your character has a weakness against, insert null if nothing.
        $_SESSION['abilities']=array( //ability 1, 
                                     //Explain  ability1,
                                     //Ability2,
                                     //Explain ability2,
                                     //Ability 3,
                                     //Explain ability3,
                                     //Ability 4,
                                    //explain ability 4);
        $_SESSION['items']=array("Health Potion",
                                 "Ability Potion",
                                 "Gifted Blessing"); //Would not change these if I were you. but if you do, place a new $_SESSION at the bottom of                                                            statset.php, to count the amount of time you can use it.
            
    }

            
            
            
            
            
            
            
               //NEW MONSTER
    //howto:
    //Go to Monsterpicker.php
    //Change the rand(1, 4), add+1 on the 4 for every new monster
    //Paste code under the explaination in Monsterpicker.php right under the last monster and fill in all requirements.
            
            
    if($Monsterpick==) //Place the new number, if this is your fifth monster, place a 5 after the ==.
{
    $monstername=""; //Name your monster/
    $monsterhealth=; //Give it health.
    $monsterability=; //Give him AP, still useless in this version.
    $maxmonsterhealth=; //Maximum health. 
    $maxmonsterability=; //Maximum ability.
    $MinMdamage=; //Minimum damage.
    $MaxMdamage=; //Maximum damage.
    $Mhitchance=; //Chance to hit you, between 1 and 100, see it as a percentage.       
            
}
            
            ?>