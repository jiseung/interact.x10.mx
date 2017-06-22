<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function moveon() {
			location.assign("http://interact.x10.mx/running.php");
		}
		window.setTimeout(moveon, 5000);
	</script>
	<div>
		You try to discreetly take off the zipties with the little knowledge from that video. Thank Buzzfeed!
		And...<br><br><br>
		It works!<br>
		RUN FOR YOUR LIIIIIIIIIFE!
	</div>
	<?php 
		$warning = fopen("free.txt", "r+");
		if (!feof($warning)) {
			$warningcount = fgetc($warning);
		} else {
			$warningcount = 0;
		}
		$warningcount += 1;
		file_put_contents("free.txt", $warningcount);
	?>
	</body>
</html>\