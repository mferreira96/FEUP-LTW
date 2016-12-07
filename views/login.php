<div id="login_message" class="login_message">

	<h1>Login</h1>

	<form action ="../actions/login.php" method="post" enctype="multipart/form-data">
		<div id="login_form">
			<label for ="username">Username:</label>
			<input type="text" name="username" id ="username" required="required">
			<br>
			<label for ="password">Password: </label>
			<input type="password" name="password" id ="password" required="required">
		</div>
		<input type="submit" value="Login"
	</form>
</div>
