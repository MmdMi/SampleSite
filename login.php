<?php require_once ("Config/connection.php");
if (isset($_SESSION["username"]))
    header("location:index.php");
$title="Home";
$content="";
$content.='<div id="MainDiv">';
$content.='<form action="Config/validation.php" method="post" id="LoginBox">';
$content.='<h1>Login <span class="glyphicon glyphicon-log-in"></span></h1><hr>
           <input type="text" class="form-control" name="username" placeholder="Username"><br/>
           <input type="password" class="form-control" name="password" placeholder="Password"><br/>
           <input type="submit" class="btn btn-success" value="Login"><br/>
           <a href="#">Forgot your password?</a>
            ';
$content.='</form></div>';
show($title , $content);