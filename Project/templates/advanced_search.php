<div id="advanced_search" class="advanced_search">

	<form action ="../actions/advanced_search.php" method="post" enctype="multipart/form-data">
		<h3>Advanced search</h3>
			<label for ="city">City: </label>
			<input type="text" name="city" id ="city" pattern="[a-zA-Z]+">
			<br>
			<label for ="food">Type of food: </label>
			<input type="text" name="food" id ="food" pattern="[a-zA-Z]+">
		<input type="submit" value="Search">
	</form>
</div>
