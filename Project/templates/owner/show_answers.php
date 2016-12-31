
<section class="display_answers">
      <h3>Answers</h3>
     <?php
     include_once('../database/connection.php');
     include_once('../database/review.php');

    try{
       $replies = getReply($_GET['id']);
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
