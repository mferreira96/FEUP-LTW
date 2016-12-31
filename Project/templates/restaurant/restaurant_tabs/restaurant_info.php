
<div id="restaurant_info" class="restaurant_tabs_active">
  <ul>
    <li><div>Type of food: </div>
      <br>
      <div><?=$restaurant['type_of_food']?></div></li>
    <li><div>Adress: </div>
      <br>
      <div><?=$restaurant['street'].', '.$restaurant['city'].', '.$restaurant['postcode'] ?></div></li>
    <li><div>Opening hours: </div>
      <br>
      <div><?=$restaurant['opening_hours']?></div></li>
    <li><div>Comment: </div>
      <br>
      <div><?=$restaurant['comment']?></div></li>
    <li><div>Link to Website: </div>
      <br>
      <div id="external_website"><a href="<?=$restaurant['link_to_website']?>"><?=$restaurant['link_to_website']?></a></div></li>
    <li><div>Phone Number: </div>
      <br>
      <div><?=$restaurant['telephoneNumber']?></div></li>
  </ul>
  <?php if($_SESSION['userType'] === "owner")
  {
  ?>
    <div id="edit_restaurant"><a href="../public/edit_restaurant.php?id=<?php echo $restaurant['id']; ?>">Edit restaurant</a></div>
  <?php
  }
  ?>
</div>
