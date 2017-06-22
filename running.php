<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function car() {
			document.getElementById("car").innerHTML = "There's a car! Maybe I can hotwire it?";
		}
		function building() {
			document.getElementById("building").innerHTML = "There's a building. Let's hide in there.";
		}
		function alley() {
			document.getElementById("alley").innerHTML = "If not the building, then the alleyway. I could sneak around and lose them.";
		}
		function contrun() {
			document.getElementById("contrun").innerHTML = "Or I could keep running. AND scream for help. HEEEEELP!"
		}
	</script>
	<div>
		That seems to have triggered them. They're also running full speed towards you.
	</div>
	<div><a id="car" href="car.php"></a></div>
	<div><a id="building" href="building.php"></a></div>
	<div><a id="alley" href="alley.php"></a></div>
	<div><a id="contrun" href="contrun.php"></a></div>
	<?php 
		$warning = fopen("running.txt", "r+");
		if (!feof($warning)) {
			$warningcount = fgetc($warning);
		} else {
			$warningcount = 0;
		}
		$warningcount += 1;
		file_put_contents("running.txt", $warningcount);

		$car = fopen("car.txt", "r+");
		if (!feof($car)) {
			$carcount = fgetc($car);
		} else {
			$carcount = 0;
		}
		$building = fopen("building.txt", "r+");
		if (!feof($building)) {
			$buildingcount = fgetc($building);
		} else {
			$buildingcount = 0;
		}
		$alley = fopen("talk.txt", "r+");
		if (!feof($alley)) {
			$alleycount = fgetc($alley);
		} else {
			$alleycount = 0;
		}
		$contrun = fopen("contrun.txt", "r+");
		if (!feof($contrun)) {
			$contruncount = fgetc($contrun);
		} else {
			$contruncount = 0;
		}


		$sum = $carcount + $buildingcount + $alleycount + $contruncount;
		if ($sum > 10) {
			if ($carcount > $buildingcount) {
				if ($alleycount > $contruncount) {
					if ($carcount > $alleycount) {
						echo '<script type="text/javascript">', 'car();', '</script>';
						$carcount += 500;
						file_put_contents("car.txt", $carcount);
					} else {
						echo '<script type="text/javascript">', 'alley();', '</script>';
						$alleycount += 500;
						file_put_contents("alley.txt", $alleycount);
					}
				} else {
					//$talk < $calm
					if ($contruncount > $carcount) {
						echo '<script type="text/javascript">', 'contrun();', '</script>';
						$contruncount += 500;
						file_put_contents("contrun.txt", $contruncount);
					} else {
						echo '<script type="text/javascript">', 'building();', '</script>';
						$buildingcount += 500;
						file_put_contents("building.txt", $buildingcount);
					}
				}
			} else {
				//$free > $thrash
				if ($alleycount > $conturncount) {
					if ($buildingcount > $alleycount) {
						echo '<script type="text/javascript">', 'building();', '</script>';
						$buildingcount += 500;
						file_put_contents("building.txt", $buildingcount);
					} else {
						echo '<script type="text/javascript">', 'alley();', '</script>';
						$alleycount += 500;
						file_put_contents("alley.txt", $alleycount);
					}
				} else {
					//calm > talk
					if ($contruncount > $freecount) {
						echo '<script type="text/javascript">', 'contrun();', '</script>';
						$contruncount += 500;
						file_put_contents("contrun.txt", $contruncount);
					} else {
						echo '<script type="text/javascript">', 'car();', '</script>';
						$carcount += 500;
						file_put_contents("car.txt", $carcount);
					}
				}
			}

		} else if ($sum > 5) {
			if ($carcount > $buildingcount) {
				if ($contruncount > $alleycount) {
					echo '<script type="text/javascript">', 'car();', 'contrun();', '</script>';
				} else {
					echo '<script type="text/javascript">', 'car();', 'alley();', '</script>';
				}
			} else {
				//free>thrash
				if ($calmcount > $alleycount) {
					echo '<script type="text/javascript">', 'building();', 'contrun();', '</script>';
				} else {
					echo '<script type="text/javascript">', 'building();', 'alley();', '</script>';
				}
			}
		} else {
			echo '<script type="text/javascript">', 'window.setTimeout(car, 5000);', 'window.setTimeout(building, 6000);', 'window.setTimeout(alley, 7000);', 'window.setTimeout(contrun, 8000)', '</script>';
		}
	?>
	</body>
</html>