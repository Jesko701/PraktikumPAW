<!DOCTYPE html>
<html>

<head>
    <title>Order Form</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["username"]) && !isset($_SESSION["password"])) {
        header("Location: Perintah_Suruh_Login.html");
    } else { ?>
        <p><u>Order Summary</u></p>
    <?php
        $num_cd_order = $_COOKIE['cd_order'];
        $num_dvd_order = $_COOKIE['dvd_order'];
        echo "Ordered CD: " . $num_cd_order . " pieces <br>";
        echo "Ordered DVD: " . $num_dvd_order . " pieces <br>";
        require("formlogout.php");
    } ?>
</body>

</html>