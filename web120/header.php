<?php include 'portal-config template.php' ?> 
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/templatenav.css" />
<link rel="stylesheet" href="css/template.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/tables.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="template.php"><i class="logo fa <?=$logo?>"></i> Lay Tu </a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="home.php" class="selected">Home</a></li>
      <li><a href="work.php">Work</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="social.php">Social</a></li>
        <li><a href="contact.php">Contact</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>

<!--- END header.php include here! --> 