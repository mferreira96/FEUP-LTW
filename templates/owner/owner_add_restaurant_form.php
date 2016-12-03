<div id="add_restaurant">
  <p>ADD RESTAURANT</p>
  <form action ="restaurant_form_test.php" method="post" enctype="multipart/form-data">
    <div id="add_restaurant_form">
      <label for ="restaurant_name">Name:</label>
      <input type="text" name="Name" id ="restaurant_name" required="required">
      <br>
      <label for ="restaurant_type_of_food">Type of food:</label>
      <select name="type_of_food" id="restaurant_type_of_food">
        <option value="portugues">Portugues</option>
        <option value="spanish">Spanish</option>
        <option value="italian">Italian</option>
        <option value="greek">Greek</option>
        <option value="german">German</option>
        <option value="others">Others</option>
      </select>
      <br>
      <label for ="restaurant_type_of_food_others">Type of food:</label>
      <input type="text" name="type_of_food_others" id="restaurant_type_of_food_others"></input> <!-- should appear if others was selected-->
      <br>
      <!--<label for ="restaurant_address">Address</label>
      <br>-->
      <fieldset>
        <legend>Address</legend>
          <div id="restaurant_address">
          <label for ="restaurant_address_street">Street:</label>
          <input type="text" name="street" id="restaurant_address_street">
          <br>
          <label for ="restaurant_address_number">Number:</label>
          <input type="text" name="number" id="restaurant_address_number">
          <br>
          <label for ="restaurant_address_city">City:</label>
          <input type="text" name="city" id="restaurant_address_city">
          <br>
          <label for ="restaurant_address_postcode">Postcode:</label>
          <input type="text" name="postcode" id="restaurant_address_postcode">   <!-- just number accepted, has to be implemented-->
          <br>
        </div>
      </fieldset>
      <label for ="opening_hours">Opening hours:</label>
      <input type="text" name="opening_hours" id="opening_hours">
      <br>
      <label for="restaurant_link_to_website">Link to the website:</label>
      <input type="text" name="restaurant_link_to_website" id="restaurant_link_to_website">
      <br>
      <label for ="restaurant_comment">Comment:</label>
      <br>
      <textarea id="restaurant_comment" rows="4" cols="60"></textarea>
      <br>
      <label for ="restaurant_picture">Picture of restaurant:</label>
      <input type="file" name="restaurant_picture" id="restaurant_picture"></input>
      <br>
    <input type="submit" value="Add restaurant">
    </form>
  </div>
</div>
