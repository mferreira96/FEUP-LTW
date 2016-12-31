<?php
if($userType === 'owner'){
  include_once('../templates/owner/owner_menu.php');
}else{
  if($userType === 'reviewer'){
    include_once('../templates/reviewer/reviewer_menu.php');
  }
 }
?>
