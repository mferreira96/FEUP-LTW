
<form action="../actions/add_review.php?id=<?php echo $_GET['id']; ?>" method="post"  enctype="multipart/form-data">



  <div id="one_review">
    <div id="profile_picture">
      <img src="../pics/blank-profile-picture.png" alt="profile_picture" width="100" height="100">
    </div>

    <div id="name">
      Name: <?= $_SESSION["username"];?>
    </div>

    <textarea id="review_text" name="comment" rows="8" cols="50" pattern="[0-9a-zA-Z\.\,\?\!]+">
    </textarea>

    <div id="review_rating">
      <input id="rating_1" type="radio" name="rating" value="1">
      <label for ="rating_1">1</label>
      <input id="rating_2" type="radio" name="rating" value="2">
      <label for ="rating_2">2</label>
      <input id="rating_3" type="radio" name="rating" value="3">
      <label for ="rating_3">3</label>
      <input id="rating_4" type="radio" name="rating" value="4">
      <label for ="rating_4">4</label>
      <input id="rating_5" type="radio" name="rating" value="5">
      <label for ="rating_5">5</label>
    </div>
    <input type="submit" name="submit" value="Send"/>
    </div>
</form>
