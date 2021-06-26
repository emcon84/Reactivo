<?php
//conexion
$servidor = 'localhost';
$usuario = 'root'; 
$password = '';
$basededatos = 'c1560236_bdec';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos); 

$db->query("SET NAMES 'utf8'");


//iniciar la sesión 
session_start();

//conexion
//$servidor = 'localhost';
//$usuario = 'c1560236_bdec'; 
//$password = 've08soDOlo';
//$basededatos = 'c1560236_bdec';
//$db = mysqli_connect($servidor, $usuario, $password, $basededatos); 

//$db->query("SET NAMES 'utf8'");


//iniciar la sesión 
//session_start();