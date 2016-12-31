<div id="restaurant_maps" class="restaurant_tabs_content">
  <div id="maps">
  </div>
</div>

<?php
  $myfile = fopen("../maps_key/key_1.txt", "r") or die ("Unable to open file!");
  $key = fread($myfile, filesize("../maps_key/key_1.txt"));
  fclose($myfile);
?>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=<?php echo $key; ?>&callback=initMap">
</script>
