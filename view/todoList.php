<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/index.css">
  <title>Document</title>
</head>

<body>
  <?php include_once  "./view/header.php" ?>
  <a href="/">На главную</a>
  <br>
  <br>
  <form method="POST" action="/?controller=tasks&action=add">
    <input type="text" name="taskName">
    <input type="submit" value="Добавить">
  </form>
  <br>
  <br>
  <?php if (isset($tasks)) : ?>
    <?php foreach ($undoneList as $key => $item) : ?>
      <div class="todos border">
        <div>
          * <?= $item->getDescription() ?>
        </div>
        <div>
          <a href="/?controller=tasks&action=del&key=<?= $key ?>">Удалить</a> <br>
        </div>
      </div>
    <?php endforeach ?>
  <?php endif ?>
</body>

</html>