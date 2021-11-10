<?php
if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
    session_start();
    session_destroy();
    unset($_COOKIE["username"]);
    unset($_COOKIE["password"]);
    setcookie("username", null, -1);
    setcookie("password", null, -1);
    echo "Cookie sudah dihapus";
} else {
    echo "Cookie sudah kosong";
}
