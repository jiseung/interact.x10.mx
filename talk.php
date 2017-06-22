<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function response() {
			document.getElementById("response").innerHTML = "'I'm sorry. You're part of something bigger. It doesn't matter what you know.'";
		}
		function what() {
			document.getElementById("what").innerHTML = "What do I do now?";
		}
		window.setTimeout(response, 4000);
	</script>
	<div>
		Excuse me. I'm just an undergrad at UChicago. I'm about to finish the academic year. Please... I don't know anything.
	</div>
	<div><p id="response"></a></div>
	<div><a id="what" href="setup.php"></a></div>

	<?php
		$handle = fopen("talk.txt", "r+");
		if (!feof($handle)) {
			$count = fgetc($handle);
		} else {
			$count = 0;
		}
		$count += 1;
		file_put_contents("talk.txt", $count);
	?>
	</body>
</html>