
<div id="restaurant_info" class="restaurant_tabs_active">
  <ul>
    <li><a>Type of food: </a><?=$restaurant['type_of_food']?></li>
    <li><a>Adress: </a><?=$restaurant['street'].', '.$restaurant['city'].', '.$restaurant['postcode'] ?></li>
    <li><a>Opening hours: </a><?=$restaurant['opening_hours']?></li>
    <li><a>Comment: </a><?=$restaurant['comment']?></li>
    <li><a>Link to Website: </a><a<?=$restaurant['link_to_website']?>></a></li>
    <li><a>Telephone Number: </a><?=$restaurant['telephoneNumber']?></li>
  </ul>
</div>
