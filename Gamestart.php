<?php
session_start();
if(isset($_POST['submit']))
{
    $class=$_POST['class'];
    $_SESSION['class']=$class;
    header('location:StatsSet.php');
}
else
{
?>

<html>
    <head>
        <title>RandomRPG</title>
    </head>
    <body>
        
        <form method="post">
        
            <h1>What character do you want to be?</h1><br />
            warrior<input type="radio" name="class" value="warrior" />Mainly focusses on basic attacks, medium difficulty<br />
              mage<input type="radio" name="class" value="mage" />Mainly focusses on abilities, hard difficulty<br />
            archer<input type="radio" name="class" value="archer" />Balanced amount between basic attacks and abilities, easy difficulty<br />
            
            <?php 
              //add new characters up here. copy the entire line, only change the value
            ?>
            <input type="submit" name="submit" value="go" />
        </form>
        
    </body>
</html>
<?php
}
?>