<?php
  include_once('../templates/header.php');
  echo '<div class="content">';
    include_once('../templates/reviewer/reviewer_menu.php');
    echo'<div class="main">';
      include_once('../templates/advanced_search.php');
    echo'</div>';
  echo '</div>';
  include_once('../templates/footer.php');
?>
