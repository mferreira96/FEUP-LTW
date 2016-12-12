
<div id="restaurant_info" class="restaurant_tabs_active">
  <ul>
    <li><a>Type of food: </a>
      <br>
      <div><?=$restaurant['type_of_food']?></div></li>
    <li><a>Adress: </a>
      <br>
      <div><?=$restaurant['street'].', '.$restaurant['city'].', '.$restaurant['postcode'] ?></div></li>
    <li><a>Opening hours: </a>
      <br>
      <div><?=$restaurant['opening_hours']?></div></li>
    <li><a>Comment: </a>
      <br>
      <div><?=$restaurant['comment']?></div></li>
    <li><a>Link to Website: </a>
      <br>
      <div><a<?=$restaurant['link_to_website']?>></a></div></li>
    <li><a>Telephone Number: </a>
      <br>
      <div><?=$restaurant['telephoneNumber']?></div></li>
  </ul>
</div>
