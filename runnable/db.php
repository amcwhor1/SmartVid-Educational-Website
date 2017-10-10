<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '0000';
$db = 'smartvid';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
