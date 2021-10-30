<?php

// fetch data
$drinks = DB::query("SELECT * FROM drinks");


?>
<div class="text">Drinks</div>
<div id="drinks">

<?php

foreach ($drinks as $d) {
	$id = $d['id'];
	$name = $d['name'];
	echo "<p>Drink #$id: $name</p>";
}

?>

</div>