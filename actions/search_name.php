<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');

  $_SESSION['request'] = 'search_name';

  header('Location: ../public/restaurant_overview.php');
?>
