<section id="register_form">
  <h3>Register</h3>
  <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
    <label for ="name">Name:</label>
    <input type="text" name="name" pattern="[0-9a-zA-Z]+">
    <br>
    <label for ="username">Username:</label>
    <input type="text" name="username" pattern="[0-9a-zA-Z]+">
    <br>
    <label for ="password">Password:</label>
    <input type="password" name="password" pattern="[0-9a-zA-Z]+">
    <br>
    <label for ="confirm">Confirm password:</label>
    <input type="password" name="confirm" pattern="[0-9a-zA-Z]+">
    <br>
    <label for ="email">E-mail:</label>
    <input type="email" name="email">
    <br>
    <input type="submit" name="submit" value="Register">
  </form>
</section>
