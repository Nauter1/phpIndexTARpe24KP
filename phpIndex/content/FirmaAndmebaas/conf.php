<?php
$serverinimi="localhost";
$kasutajanimi='kaurpakaste';
$parool='123456';
$andmebaasinimi='kaurpakaste';
$yhendus=new mysqli($serverinimi,$kasutajanimi,$parool,$andmebaasinimi);
$yhendus->set_charset("utf8");