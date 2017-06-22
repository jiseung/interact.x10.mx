<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function moveon() {
			location.assign("http://interact.x10.mx/running.php");
		}
	</script>
	<div style="margin: 0 auto;">
		You... don't know how to hotwire a car.
	</div>

	<?php 
		$handle = fopen("car.txt", "r+");
		if (!feof($handle)) {
			$count = fgetc($handle);
		} else {
			$count = 0;
		}
		$count += 1;
		file_put_contents("car.txt", $count);

		if ($count > 500) {
			echo '<div>', "The players have spoken. You couldn't hotwire the car. You got caught by the mysterious, strange men, and that's all anyone has heard about you.", '<br>', '<br>', "The end.", '</div>';
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(moveon, 6000);', '</script>';
		}
	?>
	</body>
</html>