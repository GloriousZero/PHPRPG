<?php
session_start();
$class=$_SESSION['class'];
$abilities=$_SESSION['abilities'];
$ability=$_SESSION['ability'];

$counter=1;
{
    ;
}

    foreach ($abilities as $abilities ) 
    {
        if($counter==1)
        {
        echo" <a href='$abilities.php'> $abilities</a> :  "; 
        $counter=2;
        }
        else
        {
            echo"$abilities";
            echo"<br />";
            $counter=1;
        }
        }
?>