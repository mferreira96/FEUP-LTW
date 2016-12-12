<div id="restaurant_gallery" class="restaurant_tabs_content">
  <!--<div class="restaurant_photo_gallery"> <-->
  <div class="pictures_by_reviewers">
    <?php
      include_once('../database/connection.php');
      include_once('../database/image.php');

      $images = getImageOfRestaurant($_GET['id']);
      $first = $images[0];
      $firstSrc ="../pics/".$first['name'];

      foreach ($images as $image) {
        $path = "pic_preview.src=img".$image['name'].".sec";
        $name = "img".$image['name'];
        $src = "../pics/".$image['name'];
    ?>

    <img onmouseover=<?=$path?> name=<?=$name?> src=<?=$src?>  alt=""/>

    <?php } ?>

    <!-- img onmouseover="pic_preview.src=img2.src" name="img2" src="../pics/food_2.jpg" alt=""/>
    <img onmouseover="pic_preview.src=img3.src" name="img3" src="../pics/food_3.jpg" alt=""/>
    <img onmouseover="pic_preview.src=img4.src" name="img4" src="../pics/food_4.jpg" alt=""/>
    <img onmouseover="pic_preview.src=img5.src" name="img5" src="../pics/food_5.jpg" alt=""/>
    <img onmouseover="pic_preview.src=img6.src" name="img6" src="../pics/food_1.jpg" alt=""/>
    <img onmouseover="pic_preview.src=img7.src" name="img7" src="../pics/food_2.jpg" alt=""/>
    <img onmouseover="pic_preview.src=img8.src" name="img8" src="../pics/food_3.jpg" alt=""/>
    <img onmouseover="pic_preview.src=img9.src" name="img9" src="../pics/food_4.jpg" alt=""/>
    <img onmouseover="pic_preview.src=img10.src" name="img10" src="../pics/food_5.jpg" alt=""/-- >
  </div>
  <br/>

    <div class="pic_preview">
      <img id="pic_preview" src=<?=$firstSrc?> alt=""/>
    </div>

  <!--</div>-->
</div>
