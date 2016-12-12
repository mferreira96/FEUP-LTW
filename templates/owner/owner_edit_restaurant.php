<div id="edit_restaurant">
  <form action="../actions/update_restaurant.php" method="post"  enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?=$restaurant['id']?>">

      <label>Restaurant Name:
          <input type="text" name="name" value="<?=$restaurant['name']?>">
      </label>
      <br>
      <label>City:
          <input type="text" name="city" value="<?=$restaurant['city']?>">
      </label>
      <br>
      <label>Number:
          <input type="text" name="number" value="<?=$restaurant['number']?>">
      </label>
      <br>
      <label>Street:
          <input type="text" name="street" value="<?=$restaurant['street']?>">
      </label>
      <br>
      <label>Post Code:
          <input type="text" name="postcode" value="<?=$restaurant['postcode']?>">
      </label>
      <br>
      <label>Link to website:
          <input type="text" name="link" value="<?=$restaurant['link_to_website']?>">
      </label>
      <br>
      <label>Opening Time:
          <input type="text" name="open" value="<?=$restaurant['opening_hours']?>" >
      </label>
      <br>
      <input type="submit" name="submit" value="Save" id="buttonSave">
  </form>
</div>
