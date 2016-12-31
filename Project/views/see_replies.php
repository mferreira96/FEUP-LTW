<?php
  global $userType;
  include_once('../templates/header.php');
  echo '<div class="content">';
  include('../helpers/menu.php');

  echo '<div class="main">';
      include_once('../templates/owner/show_answers.php');
  echo '</div>';
  include_once('../templates/footer.php');
?>
