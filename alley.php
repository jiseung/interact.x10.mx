<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function stranger() {
			document.getElementById("stranger").innerHTML = "Oh! HELLO THERE, KIND STRANGER! PLEASE HELP ME!";
		}
		function trash() {
			document.getElementById("trash").innerHTML = "OHHH NO. IT'S ONE OF THEM! Quick, hide!";
		}
	</script>
	<div style="margin: 0 auto;">
		You turn the corner abruptly and enter a dark alleyway. Tonight is not your night. The alley is blocked off. <br><br>
		Just as you think about jumping into a garbage collection tub, you see the silhouette of a lone figure.
	</div>
	<div><a id="stranger" href="stranger.php"></a></div>
	<div><a id="trash" href="trash.php"></a></div>

	<?php 
		$handle = fopen("alley.txt", "r+");
		if (!feof($handle)) {
			$count = fgetc($handle);
		} else {
			$count = 0;
		}
		$count += 1;
		file_put_contents("alley.txt", $count);

		$s = fopen("stranger.txt", "r+");
		if (!feof($s)) {
			$scount = fgetc($s);
		} else {
			$scount = 0;
		}
		$t = fopen("trash.txt", "r+");
		if (!feof($t)) {
			$tcount = fgetc($t);
		} else {
			$tcount = 0;
		}
		if ($scount + $tcount >= 3) {
			if ($scount > $tcount) {
				echo '<script type="text/javascript">', 'window.setTimeout(stranger, 0);', '</script>';
				$scount += 500;
				file_put_contents("stranger.txt", $scount);
			} else {
				echo '<script type="text/javascript">', 'window.setTimeout(trash, 0);', '</script>';
				$tcount += 500;
				file_put_contents("trash.txt", $tcount);
			}
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(stranger, 5000);', 'window.setTimeout(trash, 7000);', '</script>';
		}
	?>
	</body>
</html>