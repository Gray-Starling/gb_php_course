<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Lesson06</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <?php include_once  "./view/header.php" ?>
  <hr>

  <?php if (is_null($username)) : ?>
    <div>Вы не авторизованны, <a href="/?controller=security">Войдите</a></div>
  <?php else : ?>
    <h3>Привет, <?= $username ?></h3>
    <br>
    <a href="/?controller=tasks">Список задач</a>
  <?php endif; ?>
</body>

</html>