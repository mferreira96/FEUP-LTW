<?php
  include_once('../templates/header.php');
  echo '<div class="content">';
    include_once('../templates/owner/owner_menu.php');
    echo'<div class="main">';
    include_once('../database/connection.php');
    include_once('../database/user.php');

    $username = $_SESSION['username'];
    try {
      $user = getUserByusername($username);
    } catch(PDOException $e) {
      die($e->getMessage());
    }
      include_once('../templates/register/edit_user.php');
    echo'</div>';
  echo '</div>';
  include_once('../templates/footer.php');
?>
