
<div id="restaurant_above_tabs">
  <div id="restaurant_name">
    <h1><?= $restaurant['name'] ?></h1>
  </div>
  <?php
    include_once('../database/connection.php');
    include_once('../database/image.php');

    $images =  getImagesOfRestaurant($restaurant['id']);


    if(empty($images))
    {
      echo '<br>';

    }
    else
    {
     ?>
      <div id="restaurant_picture">
       <img src=<?="../pics/". $images[0]['name'] ?> alt="restaurant_picture" width="400" height="200">
      </div>
    <?php
    }
    ?>
</div>
