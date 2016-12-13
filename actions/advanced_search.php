<?php
include('../helpers/userAdministration.php');
include('../database/connection.php');
include('../database/restaurant.php');

$_SESSION['request'] = 'search_advanced';
$_SESSION['search_by_name'] = $_POST['search_by_name'];
$_SESSION['search_by_city'] = $_POST['search_by_city'];
$_SESSION['search_by_rating'] = $_POST['search_by_rating'];

/**try {
  getRestaurantsByName($_POST['search_by_name_only']);
} catch (PDOException $e) {
  die($e->getMessage());
}
*/

header('Location: ../public/restaurant_overview.php');

?>
