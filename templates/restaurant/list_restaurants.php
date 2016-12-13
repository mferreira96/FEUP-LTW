
<section class="search_result">
     <?php
     include_once('../database/connection.php');
     include_once('../database/restaurant.php');
     include_once('../database/image.php');


     if($_SESSION['userType'] === "owner"){
       try{
         $restaurants = getRestaurantsByOwner($_SESSION['username']);
       }catch (PDOException $e){
         die($e->getMessage());
       }
     }
     else{
       if(isset($_SESSION['request']) &&  $_SESSION['request'] === "search_name"){
        try{
          $restaurants = getRestaurantsByName($_SESSION['search_by_name']);
        }catch (PDOException $e){
          die($e->getMessage());
        }
        }else{
          if(isset($_SESSION['request']) && $_SESSION['request'] === "search_advanced"){
            try{
              $restaurants = getRestaurantByCityFood($_SESSION['search_by_city'], $_SESSION['search_by_food']);
            }catch (PDOException $e){
              die($e->getMessage());
            }
          }
          else {
            try{
              $restaurants = getAllRestaurants();
            }catch (PDOException $e){
              die($e->getMessage());
            }
          }
        }
       }



     foreach($restaurants as $restaurant) {
          $res = getImagesOfRestaurant($restaurant['id']);

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
              Score: <?=number_format($restaurant['rate'],1)?>
            </div></br>

            <div id="search_results_details">
              <p><a href="restaurant.php?id=<?php echo $restaurant['id']; ?>">Details</a></p>
            </div>
            </br>
            </br>
          </article>
      <?php } ?>
</section>
