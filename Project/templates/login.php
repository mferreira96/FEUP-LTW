<div id="login_message" class="login_message">

	<h3>Login</h1>

	<form action ="../actions/login.php" method="post" enctype="multipart/form-data">
		<div id="login_form">
			<label for ="username">Username:</label>
			<input type="text" name="username" id ="username" required="required" pattern="[a-zA-Z]+">
			<br>
			<label for ="password">Password: </label>
			<input type="password" name="password" id ="password" required="required" pattern="[0-9a-zA-Z]+">
		</div>
		<input type="submit" value="Login">
	</form>
	<a href="register.php">Create account</a>
</div>
