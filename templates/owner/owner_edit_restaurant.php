<div id="edit_restaurant">
  <h3>Edit restaurant</h3>
  <form action="../actions/update_restaurant.php" method="post"  enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?=$restaurant['id']?>">

      <label>Restaurant Name:
          <input type="text" name="name" value="<?=$restaurant['name']?>" pattern="[0-9a-zA-Z]+">
      </label>
      <br>
      <label>City:
          <input type="text" name="city" value="<?=$restaurant['city']?>" pattern="[0-9a-zA-Z]+">
      </label>
      <br>
      <label>Number:
          <input type="text" name="number" value="<?=$restaurant['number']?>" pattern="[0-9]+">
      </label>
      <br>
      <label>Street:
          <input type="text" name="street" value="<?=$restaurant['street']?>" pattern="[a-zA-Z\s]+">
      </label>
      <br>
      <label>Post Code:
          <input type="text" name="postcode" value="<?=$restaurant['postcode']?>" pattern="(\d{4})(?:-(\d{3}))?">
      </label>
      <br>
      <label>Link to website:
          <input type="text" name="link_to_website" value="<?=$restaurant['link_to_website']?>" pattern="[0-9a-zA-Z\/\:\@\.]+">
      </label>
      <br>
      <label>Opening Time:
          <input type="text" name="opening_hours" value="<?=$restaurant['opening_hours']?>" pattern="[0-9]+\-[0-9]+">
      </label>
      <br>
      <input type="submit" name="submit" value="Save" id="buttonSave">
  </form>
</div>
