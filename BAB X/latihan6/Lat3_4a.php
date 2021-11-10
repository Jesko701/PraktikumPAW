<html>

<head>
  <title>Order Form</title>
</head>

<body>
  <?php
  $cd = 0;
  $dvd = 0;
  if (isset($_POST["cd_order"]) && isset($_POST["dvd_order"])) {
    $cd = $_POST["cd_order"];
    $dvd = $_POST["dvd_order"];
  }
  session_start();
  if (!isset($_SESSION["username"]) && !isset($_SESSION["password"])) {
    header("Location: Perintah_Suruh_Login.html");
  } else {
  ?>
    <form action="Lat3_4b.php" method="post">
      <p>
        Order CD, amount:
        <input type="text" name="cd_order" value="0" size="2" maxlength="2" />
      </p>
      <p>
        Order DVD, amount:
        <input type="text" name="dvd_order" value="0" size="2" maxlength="2" />
      </p>
      <input type="submit" value="Add To Cart" name="submit" />
    </form>
    <?php require("formlogout.php") ?>
</body>

</html>
<?php } ?>