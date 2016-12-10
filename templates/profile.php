<section class="central">
    <div class="container">
        <article id="myprofile" class="box">
            <div id="userlogo"><img src="../uploads/users/defaultlogo.png"></div>
            <div id="userpresentation">
                <h2><?=$user['name']?></h2>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?=$user['country']?></p>
            </div>
        </article>

        <?php if($user['status']==1){ ?>
            <section class="myrestaurants">
                <div class="sectiondescription">
                    <h3>Meus Restaurantes
                        <?php if(sizeof($restaurants)>0){ ?>
                            <span class="number"><?=sizeof($restaurants)?></span>
                        <?php } else { ?>
                            <span class="zero"><?=sizeof($restaurants)?></span>
                        <?php } ?>
                    </h3>
                    <p>Faça a gestão dos seus restaurantes de modo a melhorar as suas avaliações</p>
                </div>
                <?php foreach($restaurants as $restaurant) { ?>
                    <article class="listrestaurant box">
                        <div class="restaurantphoto">
                            <img src="../uploads/restaurants/restaurant1.png">
                        </div>
                        <div class= "content">
                            <a href="../pages/restaurant.php?id=<?=$restaurant['id']?>"><h3><?=$restaurant['name']?></h3></a>
                            <div class="rating">
                                <?php for ($i = 0; $i < intval($restaurant['reviewersRating']); $i++){ ?>
                                    <img src="../res/images/star.png">
                                <?php } ?>
                            </div>
                            <br>
                            <p><?=$restaurant['city']?>&middot<?=$restaurant['country']?></p><br>
                            <a href="../pages/restaurant.php?id=<?=$restaurant['id']?>"><button class="btn" id="btn-details">Ver detalhes</button></a>
                        </div>
                    </article>
                <?php } ?>
            </section>
        <?php } ?>

        <section class="myreviews">
            <div class="sectiondescription">
                <h3>Minhas Avaliações
                    <?php if(sizeof($reviews)>0){ ?>
                        <span class="number"><?=sizeof($reviews)?></span>
                    <?php } else { ?>
                        <span class="zero"><?=sizeof($reviews)?></span>
                    <?php } ?>
                </h3>
                <p>Relembre as suas avaliações</p>
            </div>
            <?php foreach ($reviews as $review) { ?>
                <article class="review box">
                    <a href="../pages/restaurant.php?id=<?=$review['restaurantid']?>"><h4><?= $review['restaurantname'] ?></h4></a><br>
                    <div class="rating">
                        <?php for ($i = 0; $i < intval($review['rating']); $i++){ ?>
                            <img src="../res/images/star.png">
                        <?php } ?>
                    </div>
                    <br>
                    <p><?= $review['text'] ?></p>
                </article>
            <?php } ?>
        </section>
    </div>
</section>