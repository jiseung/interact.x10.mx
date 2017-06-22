<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function thrash() {
			document.getElementById("thrash").innerHTML = "Wait.. Wait... what's going on? GET THESE OFF ME! STOP!";
		}
		function free() {
			document.getElementById("free").innerHTML = "Okay. I can do this. I saw that 'how to get out of kidnapping' video on Buzzfeed.";
		}
		function talk() {
			document.getElementById("talk").innerHTML = "I can talk to them! Tell them things about me. Make them see that I'm human. I saw that on Criminal Minds.";
		}
		function calm() {
			document.getElementById("calm").innerHTML = "Uh... three people. I can't fight off three people! Maybe it's best if I just keep my mouth shut and try to figure out what's happening first.";
		}
	</script>
	<div>
		Too late. Suddenly everything is black. A cloth bag is placed over your head.
		<br><br>
		As you're panicking, you feel three sets of hands holding you down. Then you feel the cut of the zipties around your wrist.
	</div>
	<div><a id="thrash" href="thrash.php"></a></div>
	<div><a id="free" href="free.php"></a></div>
	<div><a id="talk" href="talk.php"></a></div>
	<div><a id="calm" href="calm.php"></a></div>

	<?php
		$handle = fopen("setup.txt", "r+");
		if (!feof($handle)) {
			$count = fgetc($handle);
		} else {
			$count = 0;
		}
		$count += 1;
		file_put_contents("setup.txt", $count);

		$thrash = fopen("thrash.txt", "r+");
		if (!feof($thrash)) {
			$thrashcount = fgetc($thrash);
		} else {
			$thrashcount = 0;
		}
		$free = fopen("free.txt", "r+");
		if (!feof($free)) {
			$freecount = fgetc($free);
		} else {
			$freecount = 0;
		}
		$talk = fopen("talk.txt", "r+");
		if (!feof($talk)) {
			$talkcount = fgetc($talk);
		} else {
			$talkcount = 0;
		}
		$calm = fopen("calm.txt", "r+");
		if (!feof($calm)) {
			$calmcount = fgetc($calm);
		} else {
			$calmcount = 0;
		}

		$sum = $thrashcount + $freecount + $talkcount + $calmcount;
		if ($sum > 10) {
			if ($thrashcount > $freecount) {
				if ($talkcount > $calmcount) {
					if ($thrashcount > $talkcount) {
						echo '<script type="text/javascript">', 'thrash();', '</script>';
						$thrashcount += 500;
						file_put_contents("thrash.txt", $thrashcount);
					} else {
						echo '<script type="text/javascript">', 'talk();', '</script>';
						$talkcount += 500;
						file_put_contents("talk.txt", $talkcount);
					}
				} else {
					//$talk < $calm
					if ($calmcount > $thrashcount) {
						echo '<script type="text/javascript">', 'calm();', '</script>';
						$calmcount += 500;
						file_put_contents("calm.txt", $calmcount);
					} else {
						echo '<script type="text/javascript">', 'free();', '</script>';
						$freecount += 500;
						file_put_contents("free.txt", $freecount);
					}
				}
			} else {
				//$free > $thrash
				if ($talkcount > $calmcount) {
					if ($freecount > $talkcount) {
						echo '<script type="text/javascript">', 'free();', '</script>';
						$freecount += 500;
						file_put_contents("free.txt", $freecount);
					} else {
						echo '<script type="text/javascript">', 'talk();', '</script>';
						$talkcount += 500;
						file_put_contents("talk.txt", $talkcount);
					}
				} else {
					//calm > talk
					if ($calmcount > $freecount) {
						echo '<script type="text/javascript">', 'calm();', '</script>';
						$calmcount += 500;
						file_put_contents("calm.txt", $calmcount);
					} else {
						echo '<script type="text/javascript">', 'thrash();', '</script>';
						$thrashcount += 500;
						file_put_contents("thrash.txt", $thrashcount);
					}
				}
			}

		} else if ($sum > 5) {
			if ($thrashcount > $freecount) {
				if ($calmcount > $talkcount) {
					echo '<script type="text/javascript">', 'thrash();', 'calm();', '</script>';
				} else {
					echo '<script type="text/javascript">', 'thrash();', 'talk();', '</script>';
				}
			} else {
				//free>thrash
				if ($calmcount > $talkcount) {
					echo '<script type="text/javascript">', 'free();', 'calm();', '</script>';
				} else {
					echo '<script type="text/javascript">', 'free();', 'talk();', '</script>';
				}
			}
		} else {
			echo '<script type="text/javascript">', 'thrash();', 'free();', 'talk();', 'calm()', '</script>';
		}
	?>
	</body>
</html>