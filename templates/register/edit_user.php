<div id="edit_user">
  <?php
    if((isset($_SESSION['user-logged']) && $_SESSION['user-logged']) === false){
      echo'<h3>Create profile</h3>';
    }


   ?>

  <form action="../actions/update_user_photo.php" method="post"  enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?=$user['username']?>">

      <label>Photo:
          <input type="file" name="name" value="<?=$image['name']?>">
      </label>

      <br>
      <input type="submit" name="submit" value="Change" id="buttonSave">
  </form>


  <form action="../actions/update_user.php" method="post"  enctype="multipart/form-data">
    <?php
      if((isset($_SESSION['user-logged']) && $_SESSION['user-logged']) === false){
        echo'<label>Username:
            <input type="text" name="username" value="">
        </label>
        <br>';
      }
     ?>
      <input type="hidden" name="id" value="<?=$user['username']?>">

      <label>Name:
          <input type="text" name="name" value="<?=$user['name']?>">
      </label>
      <br>

      <label>Email:
          <input type="text" name="email" value="<?=$user['email']?>">
      </label>
      <br>


<?php
  if((isset($_SESSION['user-logged']) && $_SESSION['user-logged']) === true){
    echo'<label>Old password :
        <input type="password" id="old_password" name="old_password" value="">
    </label>
    <br>';
  }
?>


      <label>New password:
          <input type="password" name="new_password" value="">
      </label>
      <br>

      <label>Please confirm new password:
          <input type="password" name="confirm_new_password" value="">
      <br>

      </label>
      <br>

      <input type="submit" name="submit" value="Save" id="buttonSave">
  </form>

</div>
