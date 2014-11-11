<?php
$pagetitle="Array test 1";
$pageroot="./";
$imageroot="./images";
$cssroot="./styles";


echo <<<STR
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>$pagetitle</title>
<link rel="shortcut icon" href="$imageroot/favicon.ico" type="image/x-icon">
<link href="$cssroot/tf1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="header">
	This is the header.
</div>
STR;

