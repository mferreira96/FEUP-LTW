<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');

  unset($_SESSION['request']);
  unset($_SESSION['search_by_name']);

  header('Location: ../public/restaurant_overview.php');
?>
