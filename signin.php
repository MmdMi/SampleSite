<?php require_once("Config/connection.php");

if (isset($_SESSION["username"]))
    header("location:index.php");

$title = "Home";
$content = "";
$content .= '<div id="MainDiv">';
$content .= '<form action="register.php" method="post" id="LoginBox">';
$content .= '<h1>Register <span class="glyphicon glyphicon-log-in"></span></h1><hr>
           <input type="text" class="form-control" name="username" placeholder="Username"><br/>
           <input type="password" class="form-control" name="password" placeholder="Password"><br/>
           <input type="password" class="form-control" name="confirm-p" placeholder="Confirm password"><br/>
           <input type="email" class="form-control" name="email" placeholder="Email Address"><br/>
           <input type="submit" class="btn btn-danger" value="Signup"><br/>
           <a href="#">Forgot your password?</a></form></div>
            ';
show($title, $content);