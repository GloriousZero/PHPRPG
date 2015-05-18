<?php
session_start();
//DESTROY ALL SESSIONS, THIS DELETES ALL THE DATA IN THE VARIABLES.
session_destroy();
header('location:Gamestart.php');
?>