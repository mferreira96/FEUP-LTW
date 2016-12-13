<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');

  $_SESSION['request'] = 'search_name';
  $_SESSION['search_by_name'] = $_POST['search_by_name_only'];

  /**try {
    getRestaurantsByName($_POST['search_by_name_only']);
  } catch (PDOException $e) {
    die($e->getMessage());
  }
  */


  header('Location: ../public/restaurant_overview.php');
?>
