
<section class="display_answers">
     <?php
     include_once('../database/connection.php');
     include_once('../database/review.php');


    try
       $replies = getReply();
    }catch (PDOException $e){
        die($e->getMessage());
    }

     foreach($replies as $reply) {
       ?>
         <article class="reply">

            <div id="answer">
              Answer: <?=$reply['answer']?>
            </div>

            </br>
            </br>

          </article>
      <?php } ?>
</section>
