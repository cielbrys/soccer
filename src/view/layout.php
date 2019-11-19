<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SoccerSearch - <?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
    <header class="header">
      <h1 class="header__title">Soccer<spans class="header__title--variant">Search</span></h1>
    </header>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>



  <section class="filter">
    <h2 class="filter__title">Filter</h2>
    <form action="index.php" class="filter__form">
    <input type="hidden" name="action" value="filter" />
      <label for="term" class="form__label">
        <span class="hidden">Search</span>
        <input type="search" id="term" name="term" class="input input--filter" value="<?php echo $term?>">
      </label>
      <input type="submit" value="Filter" class="form__submit input input--button">
    </form>
  </section>

      <section class="players">
          <h2 class="hidden">Players</h2>
        <?php echo $content;?>
        </section>
    <?php echo $js; ?>
  </body>
</html>
