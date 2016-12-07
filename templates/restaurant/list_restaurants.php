
<section class="search_result">
     <?php
     include_once('../database/connection.php');
     include_once('../database/restaurant.php');
     include_once('../database/image.php');
     $restaurants = getAllRestaurants();

     foreach($restaurants as $restaurant) {
          $res = getImageOfRestaurant($restaurant['id']);

       ?>
         <article class="listrestaurant">
            <div id="search_result_picture">
              <img src="<?="../pics/". $res[0]['name']?>"  alt="restaurant_picture" width="200" height="200"> <!--load from database-->
            </div>

            <div id="search_result_name_content">
              <h1><?=$restaurant['name']?></h1>
            </div>

            <div id="search_result_type_of_food">
              <div id="search_result_type_of_food_title">Type of food:</div>
            </div></br>

            <div id="search_result_city_title">
              City: <?=$restaurant['city']?>
            </div></br>

            <div id="search_result_score_title">
              Score: <?=$restaurant['rate']?>
            </div></br>

            <input type="button" id="search_results_see_more" value="see more">
          </article>
      <?php } ?>
</section>
