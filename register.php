<?php require_once('Config/connection.php');
if (isset($_SESSION["username"]))
    header("location:index.php");
$username = $_POST["username"];
$password = $_POST['password'];
$confirmP = $_POST['confirm-p'];
$email = $_POST['email'];
$content = '<div id="MainDiv"><div id="LoginBox">';

if ($username == "" || $password == "" || $confirmP == "" || $email == "" || $password != $confirmP) {
    $content .= error("information is not entered correctly");
} else {
    $password = md5($password);
    $query = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";

    if (mysqli_query($connection, $query)) {
        $content .= '<h1>Register Successfully <span class="glyphicon glyphicon-ok"></span></h1><hr><br>';
        $content .= '<a href="login.php" class="btn btn-success">Login</a>';

    } else {
        $content .= error("Error: " . $query . "<br>" . mysqli_error($connection));
    }
}

$content.='</div></div>';
show("Register",$content);

function error($text)
{
    $output = "";
    $output .= '<h1>ERROR <span class="glyphicon glyphicon-remove"></span></h1><hr>';
    $output .= '<p>ERROR : ' . $text . '</p><br>';
    $output .= '<a href="signin.php" class="btn btn-info">Back</a>';
    return $output;
}