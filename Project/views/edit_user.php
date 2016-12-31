<?php
  include_once('../templates/header.php');
  echo '<div class="content">';
    include_once('../helpers/menu.php');
    echo'<div class="main">';
    include_once('../database/connection.php');
    include_once('../database/user.php');
    include_once('../database/image.php');
    $username = $_SESSION['username'];

    try {
      $user = getUserByusername($username);
      $image = getImageOfUSer($username);
    } catch(PDOException $e) {
      die($e->getMessage());
    }


      include_once('../templates/register/edit_user.php');
    echo'</div>';
  echo '</div>';
  include_once('../templates/footer.php');
?>
