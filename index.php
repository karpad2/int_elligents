<?php
//int Elligents v1 engine
require "config.php";
$content="";

if(isset($_GET["ajax"])) echo"$content";
else
require "design.php";

