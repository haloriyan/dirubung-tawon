<?php

for($i = 0; $i < 250; $i++) {

	$randomTop = rand(-100, 750);
	$randomLeft = rand(-100, 1400);
	?>
	<input type="hidden" id="randomTop<?php echo $i; ?>" value="<?php echo $randomTop; ?>">
	<input type="hidden" id="randomLeft<?php echo $i; ?>" value="<?php echo $randomLeft; ?>">
	<?php
}

?>