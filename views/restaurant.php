 <?php
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

  include_once('../database/connection.php');
  include_once('../database/restaurant.php');

  $id = $_GET['id'];
  $restaurant = getRestaurantById($id);


  include_once('../templates/restaurant/restaurant_above_tabs.php');
    echo '<div class="main_menu_oriented">';
      include_once('../templates/restaurant/restaurant_tabs/restaurant_tabs_content.php');
    echo '</div>';
  echo '</div>';
  include_once('../templates/footer.php');
?>
