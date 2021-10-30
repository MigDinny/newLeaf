<?php

// fetch data
$food = DB::query("SELECT * FROM food");


?>
<div class="text">Food</div>
<div id="food">

<?php

foreach ($food as $f) {
	$id = $f['id'];
	$name = $f['name'];
	echo "<p>Food #$id: $name</p>";
}

?>

</div>