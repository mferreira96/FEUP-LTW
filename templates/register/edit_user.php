<div id="edit_user">
  <form action="../actions/update_user.php" method="post"  enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?=$user['username']?>">

      <label>Name:
          <input type="text" name="name" value="<?=$user['name']?>">
      </label>
      <br>

      <label>Email:
          <input type="text" name="email" value="<?=$user['email']?>">
      </label>
      <br>

<<<<<<< HEAD
      <label>Old password :
          <input type="text" name="old_password" value="<?=$user['email']?>">
      </label>
      <br>

      <label>New password:
          <input type="text" name="new_password" value="<?=$user['email']?>">
      </label>
      <br>

      <label>Please confirm new password:
          <input type="text" name="confirm_new_password" value="<?=$user['email']?>">
=======
      <label>Password:
          <input type="text" name="email" value="<?=$user['password']?>">
>>>>>>> origin/master
      </label>
      <br>

      <input type="submit" name="submit" value="Save" id="buttonSave">
  </form>
</div>
