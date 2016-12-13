
<section class="search_result">
     <?php
     include_once('../database/connection.php');
     include_once('../database/restaurant.php');
     include_once('../database/image.php');


     if($_SESSION['userType'] === "owner"){
       //$restaurants = all restaurants of an owner
     }
     else
     {if($_SESSION['request'] === "search_name")
       {
        try
        {
          $restaurants = getRestaurantsByName($_SESSION['search_by_name']);
        }
        catch (PDOException $e)
        {
          die($e->getMessage());
        }
        }
        else
        {
          if($_SESSION['request'] === "search_advanced")
          {
            $restaurants = //search by $_SESSION['search_by_name'], $_SESSION['search_by_city'] and $_SESSION['search_by_rating']
          }
          else
          {
            $restaurants = getAllRestaurants();
          }
        }
       }


  //   $restaurants = getAllRestaurants();

     foreach($restaurants as $restaurant) {
          $res = getImageOfRestaurant($restaurant['id']);

       ?>
         <article class="search_one_result">
            <div id="search_result_picture">
              <img src="<?="../pics/". $res[0]['name']?>"  alt="restaurant_picture" width="150" height="150">
            </div>

            <div id="search_result_name_content">
              <h1><?=$restaurant['name']?></h1>
            </div>

            <div id="search_result_type_of_food">
              Type of food: <?=$restaurant['type_of_food']?>
            </div></br>

            <div id="search_result_city_title">
              City: <?=$restaurant['city']?>
            </div></br>

            <div id="search_result_score_title">
              Score: <?=$restaurant['rate']?>
            </div></br>

            <div id="search_results_details">
              <p><a href="restaurant.php?id=<?php echo $restaurant['id']; ?>">Details</a></p>
            </div>
            <!--<input type="button" id="search_results_see_more" value="see more">-->
            </br>
            </br>
          </article>
      <?php } ?>
</section>
