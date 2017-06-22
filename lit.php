<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function saved() {
			document.getElementById("saved").innerHTML = "You were saved. But what about the others?";
		}
		function set() {
			document.getElementById("set").innerHTML = "The players have spoken. You're saved. You were saved by security officers.";
		}
		function end() {
			document.getElementById("end").innerHTML = "The end."
		}
	</script>
	<div>
		When you open the door, you find that... <br><br>
		Oh, they're security officers! You're saved!<br><br>
	</div>
	<p id="saved"></p>
	<p id="set"></p>
	<p id="end"></p>
	<?php 
		$warning = fopen("lit.txt", "r+");
		if (!feof($warning)) {
			$warningcount = fgetc($warning);
		} else {
			$warningcount = 0;
		}
		$warningcount += 1;
		file_put_contents("lit.txt", $warningcount);

		if ($warningcount > 500) {
			echo '<script type="text/javascript">', 'window.setTimeout(set, 4000);', '</script>';
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(saved, 4000);', '</script>';
		}
		echo '<script type="text/javascript">', 'window.setTimeout(end, 5000);', '</script>';
	?>
	</body>
</html>