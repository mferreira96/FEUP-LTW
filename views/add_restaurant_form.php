<form action ="restaurant_form_test.php" method="post" enctype="multipart/form-data>
  <label for ="restaurant_name">Name</label>
  <input type="text" name="Name" id ="restaurant_name" required="required">
  <label for ="restaurant_type_of_food">Type of food</label>
  <select name="type_of_food" id="restaurant_type_of_food">
    <option value="portugues">Portugues</option>
    <option value="spanish">Spanish</option>
    <option value="italian">Italian</option>
    <option value="greek">Greek</option>
    <option value="german">German</option>
    <option value="others">Others</option>
  </select>
  <label for ="restaurant_type_of_food_others">Type of food</label>
  <input type="text" name="type_of_food_others" id="restaurant_type_of_food_others"></input> <!-- should appear if others was selected-->
  <label for ="restaurant_address">Address</label>
  <div id="restaurant_address">
    <label for ="restaurant_address_street">Street</label>
    <input type="text" name="street" id="restaurant_address_street">
    <label for ="restaurant_address_number">Number</label>
    <input type="text" name="number" id="restaurant_address_number">
    <label for ="restaurant_address_city">Address</label>
    <input type="text" name="city" id="restaurant_address_city">
    <label for ="restaurant_address_postcode">Postcode</label>
    <input type="text" name="postcode" id="restaurant_address_postcode">   <!-- just number accepted, has to be implemented-->
  </div>
  <label for ="opening_hours">Opening hours</label>
  <input type="text" name="opening_hours" id="opening_hours">
  <label for="restaurant_link_to_website">Link to the website</label>
  <input type="text" name="restaurant_link_to_website" id="restaurant_link_to_website">
  <label for ="restaurant_comment">Comment</label>
  <textarea id="restaurant_comment" rows="4" cols="50"></textarea>
  <label for ="restaurant_picture">Picture of restaurant</label>
  <input type="file" name="restaurant_picture" id="restaurant_picture"></input>
<input type="submit" value="Send">
</form>
