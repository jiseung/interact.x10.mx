<!DOCTYPE html>
<html>
	<head>

	</head>

	<body>
	<script>
		function yousuck() {
			document.getElementById("suck").innerHTML = "You've only drawn attention to yourself. Bad idea.";
		}
		function moveon() {
			location.assign("http://interact.x10.mx/setup.php");
		}
		window.setTimeout(yousuck, 4000);
		window.setTimeout(moveon, 8000);
	</script>
	<div>
		HEEEELP! SOMEONE HEEEELP!
	</div>
	<p id="suck"></p>
	</body>
</html>