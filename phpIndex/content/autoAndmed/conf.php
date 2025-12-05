<?php
$servernimi = "localhost";
$kasutajanimi ='kaurpakaste';
$parool = '123456';
$andmebaasinimi = 'kaurpakaste';
$yhendus=new mysqli($servernimi,$kasutajanimi,$parool,$andmebaasinimi);
$yhendus->set_charset("utf8");
/*

$servernimi = "localhost";
$kasutajanimi ='kaurpakaste';
$parool = '123456';
$andmebaasinimi = 'kaurpakaste';
$yhendus=new mysqli($servernimi,$kasutajanimi,$parool,$andmebaasinimi);
$yhendus->set_charset("utf8");

$servernimi = "d141156.mysql.zonevs.eu";
$kasutajanimi ='d141156_kaurtest';
$parool = 'ExtremityTrinity101';
$andmebaasinimi = 'd141156_phpbaas';
$yhendus=new mysqli($servernimi,$kasutajanimi,$parool,$andmebaasinimi);
$yhendus->set_charset("utf8");
*/
