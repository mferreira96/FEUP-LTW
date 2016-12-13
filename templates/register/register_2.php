<div id="advanced_search" class="advanced_search">

	<h3>Advanced Search</h3>

	<form action ="../actions/advanced_search_name.php" method="post" enctype="multipart/form-data">
		<div id="search_by_name_form">
			<label for ="username">Name: </label>
			<input type="text" name="name" id ="name">
		</div>
		<input type="submit" value="Search">
	</form>
	<form action ="../actions/advanced_search_city.php" method="post" enctype="multipart/form-data">
		<div id="search_by_name_form">
			<label for ="city">City: </label>
			<input type="text" name="city" id ="city">
		</div>
		<input type="submit" value="Search">
	</form>
	<form action ="../actions/advanced_search_rate.php" method="post" enctype="multipart/form-data">
		<div id="search_by_name_form">
			<label for ="limit">Minimum rating: </label>
			<input type="number" name="limit" id ="limit">
		</div>
		<input type="submit" value="Search">
	</form>
</div>
