<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function negotiate() {
			document.getElementById("negotiate").innerHTML = "Negotiate.";
		}
		function sit() {
			document.getElementById("sit").innerHTML = "Maybe if I just sit still and let this play out, I'll be okay.";
		}
	</script>
	<div>
		Person 1: "Hey, we're supposed to make sure that the product isn't damaged. Be careful with the zipties!" <br>
		Person 2: "Calm down. It'll be okay." <br>
		Wait... am I the product?<br><br>
	</div>
	<div><a id="negotiate" href="talk.php"> </p></div>
	<div><a id="sit" href="sit.php"> </p></div>
	<?php 
		$warning = fopen("calm.txt", "r+");
		if (!feof($warning)) {
			$warningcount = fgetc($warning);
		} else {
			$warningcount = 0;
		}
		$warningcount += 1;
		file_put_contents("calm.txt", $warningcount);

		$negotiate = fopen("talk.txt", "r+");
		if (!feof($negotiate)) {
			$negcount = fgetc($negotiate);
		} else {
			$negcount = 0;
		}
		$sit = fopen("sit.txt", "r+");
		if (!feof($sit)) {
			$sitcount = fgetc($sit);
		} else {
			$sitcount = 0;
		}

		if ($negcount > $sitcount) {
			echo '<script type="text/javascript">', 'window.setTimeout(negotiate, 4000);', '</script>';
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(sit, 5000);', '</script>';
		}
	?>
	</body>
</html>\