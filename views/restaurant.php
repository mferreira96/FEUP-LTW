 <?php
  include_once('../templates/header.php');
  echo '<div class="content">';
  include('../helpers/menu.php');

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
