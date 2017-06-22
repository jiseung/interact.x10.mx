<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function alt1() {
			document.getElementById("alt1").innerHTML = "Suddenly you hear 'oh my gosh, we have to stop, you guys!' 'We just wanted to surprise you for a party. You gave Stephanie a nosebleed!'";
		}
		function alt2() {
			document.getElementById("alt2").innerHTML = "You hear a groan. You hit one! You celebrate for just a second before you are knocked out.";
		}
		function ending() {
			document.getElementById("alt2").innerHTML = "The End.";
		}
	</script>
	<div>
		You start thrashing around to try to get some kicks in to the attackers.
	</div>
	<div><p id="alt1"> </p></div>
	<div><p id="alt2"> </p></div>
	<div><p id="ending"> </p> </div>
	<?php 
		$warning = fopen("thrash.txt", "r+");
		if (!feof($warning)) {
			$warningcount = fgetc($warning);
		} else {
			$warningcount = 0;
		}
		$warningcount += 1;
		file_put_contents("thrash.txt", $warningcount);

		if ($warningcount > 500) {
			echo '<script type="text/javascript">', 'window.setTimeout(alt1, 4000)', '</script>';
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(alt2, 4000)', '</script>';
		}
	?>
	</body>
</html>\