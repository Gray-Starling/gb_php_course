<header class="header">
  <div class="logo">Logo</div>
  <?php if (is_null($username)) : ?>
    <a href="/?controller=security">Вход</a>
  <?php else : ?>
    <a href="/?controller=security&action=logout">Выход</a>
  <?php endif; ?>
</header>
<hr>