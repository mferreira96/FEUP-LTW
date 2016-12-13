<?php

  echo '<div id="restaurant_all_reviews" class="restaurant_tabs_content">'; //part one needed around results to display them

    include_once('../database/connection.php');
    include_once('../database/restaurant.php');
    include_once('../database/review.php');

    $reviews =  getAllReviewsFromRestaurant($restaurant['id']);

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

          <br>

          <div id="review_rating">
            Rate: <?=$review['rating']?>
          </div>

          <br>

          <div id="comment">
              Comment: <?=$review['comment']?>
          </div>

          <?php if($_SESSION['userType'] === "owner")
          {
          ?>
            <form method="POST" action="../templates/restaurant/restaurant_tabs/restaurant_review_answer.php">
              <input type="submit" value="Answer"/>
            </form>
          <?php
          }
          ?>


        </article>
      <?php } ?>
</section>
<?php if($_SESSION['useTtype'] === "reviewer")
{
?>
  <form method="POST" action="../templates/restaurant/restaurant_tabs/restaurant_review.php">
    <input type="submit" value="Write a review"/>
  </form>
<?php
}
?>

<?php
  echo '</div>';    //part two needed around results to display them
?>
