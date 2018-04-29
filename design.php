<?php

if(empty($title)) $title="";
$title="".Websitename;

if(empty($content))$content='<div id="content"></div>';
require "style/headandfooter.php";
require "style/banner.php";

echo "<!DOCTYPE html>
<html>
<head>
<!-- int Elligents v1 -->
<title>$title</title>
<!-- Meta -->
$meta
<!-- Scripts and Links -->
$links
</head>";

echo"
<body>
<div class=\"container\">
<!--Header -->
$head
<!--end of Header -->
<!-- Main content -->
$content
<!-- end of Main content -->
<!-- Banner -->
$banner
<!-- end of Banner -->
<!-- Footer -->
$footer
<!--end of Footer -->
</div>
</body>
</html>";
