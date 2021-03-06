<div id="add_restaurant">
  <h3>Add restaurant</h3>
  <form action ="../actions/add_restaurant.php" method="post" enctype="multipart/form-data">

    <?php global $form_key; ?>

    <input type ="hidden" name="form_key" id="form_key" value="<?php echo $form_key; ?>">
    <div id="add_restaurant_form">
      <label for ="name">Name:</label>
      <input type="text" name="name" id ="name" required="required" pattern="[a-zA-Z]+">
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
      <label for ="telephoneNumber">Telephone number:</label>
      <input type="text" name="telephoneNumber" id="phone" pattern="\d{9}|\d{3}-\d{3}-\d{3}"></input>
      <br>
      <fieldset>
        <legend>Address</legend>
          <div id="restaurant_address">
          <label for ="restaurant_address_street">Street:</label>
          <input type="text" name="street" id="restaurant_address_street" required="required" pattern="[a-zA-Z\s]+">
          <br>
          <label for ="restaurant_address_number">Number:</label>
          <input type="text" name="number" id="restaurant_address_number" required="required" pattern="[0-9]+">
          <br>
          <label for ="restaurant_address_city">City:</label>
          <input type="text" name="city" id="restaurant_address_city" required="required" pattern="[a-zA-Z]+">
          <br>
          <label for ="restaurant_address_postcode">Postcode:</label>
          <input type="text" name="postcode" id="restaurant_address_postcode" pattern="(\d{4})(?:-(\d{3}))?" required="required">
          <br>
        </div>
      </fieldset>
      <label for ="opening_hours">Opening hours:</label>
      <input type="text" name="opening_hours" id="opening_hours" pattern="[0-9]+\-[0-9]+">
      <br>
      <label for="restaurant_link_to_website">Link to the website:</label>
      <input type="text" name="link_to_website" id="restaurant_link_to_website" pattern="[0-9a-zA-Z\/\:\@\.]+">
      <br>
      <label for ="restaurant_comment" >Comment:</label>
      <br>
      <textarea id="restaurant_comment" name="comment" rows="4" cols="60" pattern="[0-9a-zA-Z\.\,\?\!]+"></textarea>
      <br>
      <label for ="restaurant_picture">Picture of restaurant:</label>
      <input type="file" name="restaurant_picture" required="required" id="restaurant_picture"></input>
      <br>
    <input type="submit" name="add" value="Add restaurant">
    </form>
  </div>
</div>
