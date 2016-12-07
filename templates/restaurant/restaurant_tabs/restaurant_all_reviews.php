<?php

include_once('../../database/connection.php');
include_once('../../database/restaurant.php');
include_once('../../database/rebiew.php');

$reviews =  getAllReviewsFromRestaurant($restaurant['id']);

echo $revies[0];
?>

<section class="listReviews">
     <?php foreach($reviews as $review) { ?>
        <article class="review">
          <div id="profile_picture">
            <img src="../pics/blank-profile-picture.png" alt="profile_picture" width="100" height="100">
          </div>

          <div id="name">
            Name: <?=$review['username']?>
          </div>

          <div id="review_rating">
            Rate: <?=$review['rate']?>
          </div>

          <div id="comment">
            Comment: <?=$review['comment']?>
          </div>
        </article>
      <?php } ?>
</div>
