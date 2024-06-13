<?php
//all the variables defined here are accessible in all the files that include this one
$con = new mysqli('localhost', 'root', '', 'quizmaster') or die("Could not connect to MySQL: " . $con->connect_error);
?>