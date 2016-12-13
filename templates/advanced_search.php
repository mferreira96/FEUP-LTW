<div id="advanced_search" class="advanced_search">

	<form action ="../actions/advanced_search_name.php" method="post" enctype="multipart/form-data">
		<div id="search_by_name_form">
			<label for ="username">Name: </label>
			<input type="text" name="name" id ="name">
		</div>
		<div id="search_by_name_form">
			<label for ="city">City: </label>
			<input type="text" name="city" id ="city">
		</div>
		<div id="search_by_name_form">
			<label for ="limit">Minimum rating: </label>
			<input type="number" min="0" max="5" name="limit" id ="limit" value="0">
		</div>
		<input type="submit" value="Search">
	</form>
</div>
