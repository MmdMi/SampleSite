<?php
require_once("connection.php");

$username = $_POST["username"];
$password = md5($_POST["password"]);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['username'] == $username && $row['password'] == $password) {
            $_SESSION['username'] = $username;
            header("location:../index.php");
        }
    }
} else {
    echo "Error";
}