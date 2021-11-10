<?php
if (isset($_POST["Admin"]) && isset($_POST["Password"])) {
    if ($_POST["Admin"] == "Admin" && $_POST["Password"] == "Admin") {
        session_start();
        setcookie("username", $_POST["Admin"], time() + 3600);
        setcookie("password", $_POST["Password"], time() + 3600);
        $_SESSION["username"] = $_COOKIE["username"];
        $_SESSION["password"] = $_COOKIE["password"];
        header("Location: Lat3_4a.php");
    } else {
        echo "Username atau Password salah";
    }
}
