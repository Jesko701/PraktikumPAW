<html>

<head>
  <title>Order Form</title>
</head>

<body>
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
</body>

</html>

<?php
$cd = 0;
$dvd = 0;
if (isset($_POST["cd_order"]) && isset($_POST["dvd_order"])) {
  $cd = $_POST["cd_order"];
  $dvd = $_POST["dvd_order"];
}
?>