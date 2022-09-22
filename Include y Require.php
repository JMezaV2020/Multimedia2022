<?php

//include
include("include.php"); //cuando falla arroja un warning
echo "<br>";
require("include.php"); //cuando falla arroja un fatal error

//ONCE INCLUYE SOLO UNA VEZ
include_once("include.php"); 
echo "<br>";
require_once("include.php");