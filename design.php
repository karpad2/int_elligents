<?php
$link=array("link_style"=>"http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."style/style.css");
if(empty($title)) $title="";
$title="".Websitename;

if(empty($content))$content='<div id="content"></div>';
require "style/head.php";
require "style/banner.php";
require "style/footer.php";

echo '<!DOCTYPE html>
<html>
<head>
<!-- Int Elligents v1 -->
<title>'.$title.'</title>
<!-- Scripts and Links -->
<link rel="stylesheet" type="text/css" src="'.$link["link_style"].'">
</head>';

echo"
<body>
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
</body>
</html>";
