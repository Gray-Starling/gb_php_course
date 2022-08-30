<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/index.css">
  <title>Document</title>
</head>

<body>
  <?php include_once "./controller/UserStatusController.php" ?>
  <a href="/">На главную</a>
  <br>
  <br>
  <form method="POST" action="/?controller=tasks&action=add">
    <input type="text" name="taskName">
    <input type="submit" value="Добавить">
  </form>
  <br>
  <br>
  <?php if (isset($_SESSION["task"])) : ?>
    <?php foreach ($undoneList as $key => $item) : ?>

      * <?= $item->getDescription() ?> <a href="/?controller=tasks&action=del&key=<?= $key ?>">Завершена</a> <br>

    <?php endforeach ?>
  <?php endif ?>
</body>

</html>