<header class="header">
  <div class="logo">Logo</div>
  <?php if (is_null($name)) : ?>
    <a href="/?action=login">Вход</a>
  <?php else : ?>
    <a href="/?action=logout">Выход</a>
  <?php endif; ?>
</header>