<div id="login_message" class="login_message">

	<h3>Advanced Search</h1>

	<form action ="../actions/advanced_search_name.php" method="post" enctype="multipart/form-data">
		<div id="search_by_name_form">
			<label for ="username">Name: </label>
			<input type="text" name="name" id ="name">
		</div>
		<input type="submit" value="Pesquisa">
	</form>
	<form action ="../actions/advanced_search_city.php" method="post" enctype="multipart/form-data">
		<div id="search_by_name_form">
			<label for ="city">City: </label>
			<input type="text" name="city" id ="city">
		</div>
		<input type="submit" value="Pesquisa">
	</form>
	<form action ="../actions/advanced_search_rate.php" method="post" enctype="multipart/form-data">
		<div id="search_by_name_form">
			<label for ="limit">Rating Limit: </label>
			<input type="number" name="limit" id ="limit">
		</div>
		<input type="submit" value="Pesquisa">
	</form>
	<a href="search.php">Back to Normal Search</a>
</div>
