<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function warning() {
			document.getElementById("warning").innerHTML = "I'm just being paranoid. They're just people.";
		}
		function running() {
			document.getElementById("run").innerHTML = "Run away";
		}
		function moveon() {
			location.assign("http://interact.x10.mx/setup.php");
		}
	</script>
	<div style="margin: 0 auto;">
		You walk out of Logan on your way home. For some reason, there is no one here.
		<br><br>
		You hear a rustle in the back. What's over there? DON'T LOOK!
		<br><br>
		It's a group of strangers dressed in all black. Seeming to walk faster and faster towards you. What do you do?
	</div>
	<div style="margin: 0 auto;"><a id="warning" href="setup.php"></a></div>
	<div style="margin: 0 auto;"><a id="run" href="running.php"></a></div>

	<?php 
		$warning = fopen("setup.txt", "r+");
		if (!feof($warning)) {
			$warningcount = fgetc($warning);
		} else {
			$warningcount = 0;
		}
		$run = fopen("running.txt", "r+");
		if (!feof($run)) {
			$runcount = fgetc($run);
		} else {
			$runcount = 0;
		}
		if ($warningcount + $runcount >= 9) {
			if ($warningcount > $runcount) {
				echo '<script type="text/javascript">', 'window.setTimeout(warning, 0);', '</script>';
			} else {
				echo '<script type="text/javascript">', 'window.setTimeout(running, 0);', '</script>';
			}
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(warning, 10000);', 'window.setTimeout(running, 10000);', 'window.setTimeout(moveon, 15000);', '</script>';
		}
	?>
	</body>
</html>