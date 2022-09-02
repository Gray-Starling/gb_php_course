<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/index.css">
  <title>Register</title>
</head>

<body>
  <?php include_once  "./view/header.php" ?>
  <form method="post" action="/?controller=registration&action=registration">
    <input type="text" name="login" placeholder="Login">*<br><br>
    <input type="text" name="username" placeholder="Name"><br><br>
    <input type="text" name="password" placeholder="Password">*<br><br>
    <input type="submit">
  </form>

</body>

</html>