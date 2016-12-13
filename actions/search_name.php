<?php
  include('../helpers/userAdministration.php');
  include('../database/connection.php');
  include('../database/restaurant.php');

  $_SESSION['request'] = 'search_name';
  $_SESSION['search_by_name'] = $_POST['search_by_name_only'];

  header('Location: ../public/restaurant_overview.php');
?>
