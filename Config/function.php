<?php
session_start();
function show($title, $content)
{
    echo '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySite</title>
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/style.css">
</head>
<body>
<div style="position: absolute;width: 100%;padding: 10px">
<nav class="navbar navbar-default" role="navigation" style="width: 100%">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

        <a class="navbar-brand" href="index.php">Home</a>
    </div>
        
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
        <li><a href="gallery.php">Gallery</a></li>
            <li><a href="users.php">Users</a></li> 
            ';
    if (isset($_SESSION["username"])) {
        echo '<li class="active"><a href="gallery.php">Hello ' . $_SESSION['username'] . '</a></li>';
        echo '<li class="active"><a href="Config/logout.php">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>';
    }
    echo '         
        </ul>
    </div><!-- /.navbar-collapse -->
</nav></div>';
    echo $content;
    echo '</body><script src="Bootstrap/bootstrap.min.js"></script></html>';
}
