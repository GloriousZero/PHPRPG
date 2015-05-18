<?php
session_start();
$class=$_SESSION['class'];

//STATSSET CHECKS WHAT CLASS YOU ARE AND GIVES YOU THE STATS FOR THAT CLASS.
//IF YOU CHANGE STATS HERE THEY WILL CHANGE IN THE ENTIRE GAME.

    if($class=="warrior")
    {   
        $_SESSION['maxhealth']=300;
        $_SESSION['maxability']=50;
        $_SESSION['class']="Warrior";
        $_SESSION['health']=300;
        $_SESSION['ability']=50;
        $_SESSION['mindamage']=20;
        $_SESSION['maxdamage']=60;
        $_SESSION['hitchance']=40;
        $_SESSION['baneofexistence']="Skeleton Knight";
        $_SESSION['abilities']=array("Great Slam",
                                          "30 damage on top of next attack, 20 Ability Points",
                                           "Three Slash", 
                                            "Three sure hits in 1 attack phase, 30 Ability Points",
                                            "Runic Armor", 
                                           "Increase attack damage with 30 and increased dodge for 3 turns, 40 Ability Points",
                                     "Piercer Strike",
                                            "Gain 50% crit chance for the rest of the fight. When dealing a crit your base damage will                                                            double. 50 Ability Points");
    
           
        $_SESSION['items']=array("Health Potion",
                                 "Ability Potion",
                                 "Gifted Blessing");
       
     }
    elseif($class=='mage')
    {
        $_SESSION['maxhealth']=200;
        $_SESSION['maxability']=150;
        $_SESSION['class']="Mage";
        $_SESSION['health']=200;
        $_SESSION['ability']=150;
        $_SESSION['mindamage']=10;
        $_SESSION['maxdamage']=40;
        $_SESSION['hitchance']=20;
        $_SESSION['baneofexistence']="Demonscale Dragon";
        $_SESSION['abilities']=array("Blazing Boom",
                                     "Explosive spell that does 50 damage, 40 ability power ",
                                     "Crystal Storm", 
                                     "Creates a storm that will deal damage against the enemy for 3 turns, 50 ability power",
                                     "Burning Passion", 
                                     "Increased basic attack damage by 30% for 3 turns, increase maximum Ability Power by 50, 60 Ability Power",
                                     "Mindblast",
                                     "Deals 250 damage agaisnt enemy unit, 250 Ability Power");
        $_SESSION['items']=array("Health Potion",
                                 "Ability Potion",
                                 "Gifted Blessing"); 
    }
    elseif($class=='archer')
    {
        $_SESSION['maxhealth']=250;
        $_SESSION['maxability']=100;
        $_SESSION['class']="Archer";
        $_SESSION['health']=250;
        $_SESSION['ability']=100;
        $_SESSION['mindamage']=10;
        $_SESSION['maxdamage']=80;
        $_SESSION['hitchance']=50;
        $_SESSION['baneofexistence']="Big Slime";
        $_SESSION['abilities']=array("Grid Trap", 
                                     "Deal 20 damage and stun the enemy for 1 turn, 30 Ability Power",
                                     "Rapid Reload",
                                     "Instead of 1 attack per turn, do 3 attacks, 50 Ability Power",
                                     "Camoflage",
                                     "For the next 3 turns, enemy will sure miss, 70 Ability Power",
                                     "Headshot",
                                    "Max damage basic atack and Sure Crit, 100 Ability Power");
        $_SESSION['items']=array("Health Potion",
                                 "Ability Potion",
                                 "Gifted Blessing"); 
    }
//INSERT NEW CLASSES HERE!

$_SESSION['setHpotion']=1;
$_SESSION['setApotion']=1;
$_SESSION['setGBlessing']=1;

header('location:Mainmenu.php');
?>