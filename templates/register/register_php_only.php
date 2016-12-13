<section class="loginBox">
    <div class="login">
        <h1>Register</h1>
        <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Name" pattern="[0-9a-zA-Z]+">
            <input type="text" name="username" placeholder="Username" pattern="[0-9a-zA-Z]+">
            <input type="password" name="password" placeholder="Password" pattern="[0-9a-zA-Z]+">
            <input type="password" name="confirm" placeholder="Confirm your password" pattern="[0-9a-zA-Z]+">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</section>
