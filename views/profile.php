<?php
  include_once('../templates/header.php');
  $userType = $_GET['userType']; //0 owner, 1 reviewer
  include_once('../templates/header.php');
  echo '<div class="content">';
    if($userType === '0'){
      include_once('../templates/owner/owner_menu.php');
    }else{
      if($userType === '1'){
        include_once('../templates/reviewer/reviewer_menu.php');
      }else{
        echo 'No such user';
         //throw new Exception("No such user", 1);
      }
     }

    include_once('../templates/profile.php');
  echo '</div>';
  include_once('../templates/footer.php');
?>
