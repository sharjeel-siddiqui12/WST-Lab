<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = "sharjeel";
        $password = "sharjeel12";

        if ($_POST["username"] === $username && $_POST["password"] === $password) {
            $_SESSION["username"] = $username;
            
            header("Location: https://sharjeel-siddiqui.vercel.app/");
            exit();
        } else {
            header("Location: L10ex3.php?error=Invalid username or password");
            exit();
        }
    } else {
        header("Location: L10ex3.php?error=Please enter username and password");
        exit();
    }
} else {
    header("Location: /Lab10/error.html");
    exit();
}
?>
