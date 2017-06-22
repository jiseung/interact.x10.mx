<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function lit() {
			document.getElementById("lit").innerHTML = "Open the door!";
		}
		function dark() {
			document.getElementById("dark").innerHTML = "For some reason... you hesitate";
		}
	</script>
	<div>
		Is the door... unlocked? <br><br><br>
		YES! It's unlocked! You quickly run inside the building. Running through the halls, you finally see a brightly lit room. You can hear the sound of people! You're safe now!
	</div>
	<div><a id="lit" href="lit.php"></a></div>
	<div><a id="dark" href="dark.php"></a></div>

	<?php 
		$warning = fopen("building.txt", "r+");
		if (!feof($warning)) {
			$warningcount = fgetc($warning);
		} else {
			$warningcount = 0;
		}
		$warningcount += 1;
		file_put_contents("building.txt", $warningcount);

		$lit = fopen("lit.txt", "r+");
		if (!feof($lit)) {
			$litcount = fgetc($lit);
		} else {
			$litcount = 0;
		}
		$dark = fopen("dark.txt", "r+");
		if (!feof($dark)) {
			$darkcount = fgetc($dark);
		} else {
			$darkcount = 0;
		}

		if ($litcount + $darkcount >= 10) {
			if ($litcount > $darkcount) {
				echo '<script type="text/javascript">', 'window.setTimeout(lit, 0);', '</script>';
				$litcount += 500;
				file_put_contents("lit.txt", $litcount);
			} else {
				echo '<script type="text/javascript">', 'window.setTimeout(dark, 0);', '</script>';
				$darkcount += 500;
				file_put_contents("dark.txt", $darkcount);
			}
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(lit, 5000);', 'window.setTimeout(dark, 6000);', '</script>';
		}
	?>
	</body>
</html>