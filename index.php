<?php require_once ("Config/connection.php");

$title="Home";
$content="";
$content.='<div id="MainDiv">';
$content.='<div class="row" id="MainRow" style="margin: 0px">Sample Site</div>';
$content.='<div class="row" style="margin: 0px">
                <div class="col-lg-6"><a href="login.php" class="btn btn-success">Login</a></div>
                <div class="col-lg-6"><a href="signin.php" class="btn btn-danger">Signup</a></div>
            </div>';
$content.='</div>';
show($title , $content);