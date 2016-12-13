<form action="../actions/add_reply.php?id=<?php echo $review['id']; ?>" method="post"  enctype="multipart/form-data">
  <div id="reply_review">
    <h3>Reply to review</h3>
    <textarea id="reply_text" name="comment" rows="8" cols="50">
    </textarea>
    <input type="submit" name="submit" value="Send"/>
  </div>
</form>
