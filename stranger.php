<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function alt1() {
			document.getElementById("alt1").innerHTML = "The players have spoken. You're saved. The stranger was a UCPD officer who was driving by and saw you frantically run into the alleyway.";
		}
		function alt2() {
			document.getElementById("alt2").innerHTML = "You were 'saved'. The silhouette was of a orderly. You're delusional, and you were captured by mental health professionals back to the Logan Psychiatric Hospital.";
		}
		function ending() {
			document.getElementById("alt2").innerHTML = "The End.";
		}
	</script>
	<div>
		Call the police! There are people trying to hurt me! 
	</div>
	<div><p id="alt1"> </p></div>
	<div><p id="alt2"> </p></div>
	<div><p id="ending"> </p> </div>
	<?php 
		$warning = fopen("stranger.txt", "r+");
		if (!feof($warning)) {
			$warningcount = fgetc($warning);
		} else {
			$warningcount = 0;
		}
		$warningcount += 1;
		file_put_contents("stranger.txt", $warningcount);

		if ($warningcount > 500) {
			echo '<script type="text/javascript">', 'window.setTimeout(alt1, 5000);', '</script>';
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(alt2, 5000);', '</script>';
		}
		echo '<script type="text/javascript">', 'window.setTimeout(ending, 9000);', '</script>';
	?>
	</body>
</html>\