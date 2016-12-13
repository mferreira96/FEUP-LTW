<?php
include('../helpers/userAdministration.php');
include('../database/connection.php');
include('../database/restaurant.php');

$_SESSION['request'] = 'search_advanced';
$_SESSION['search_by_city'] = $_POST['search_by_city'];
$_SESSION['search_by_food'] = $_POST['search_by_food'];

/**try {
  getRestaurantsByName($_POST['search_by_name_only']);
} catch (PDOException $e) {
  die($e->getMessage());
}
*/

header('Location: ../public/restaurant_overview.php');

?>
