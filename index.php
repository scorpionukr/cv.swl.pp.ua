<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Bogachev Vitaliy CV</title>
	<meta charset="utf-8">
    <meta name="description" content="CV">
    <meta name="keywords" content="CV">
    <meta name="author" content="Scorpion">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css" />
	<!-- JS -->
	<script src="semantic/dist/semantic.min.js"></script>
	<script src="js/jquery/jquery-3.1.0.min.js"></script>
	<script>
		function showHide(idDiv) {
			$('#'+idDiv).toggle('fast');
		}
		function recShow(idModal) {
			$('#'+idModal).show('fast');
		}
		function recClose(idModal) {
			$('#'+idModal).hide('fast');
		}
	</script>
</head>
<body>
	<!-- menu -->
	<div id="menu" class="ui left fixed vertical menu inverted">
  		<div class="ui inverted segment">
    		<button class="ui inverted basic button icon" onClick="showHide('menu');"><i class="content icon"></i></button>
  		</div>
  		<a class="item" href="#welcome">Welcome</a>
	</div>
	<div class="pusher">
		<!-- Site content !-->
		<!-- menu button -->
		<button class="ui inverted button mesto icon" onClick="showHide('menu');"><i class="content icon"></i></button>
		<!-- Ciaeiinoai -->
		<div class="back-welcome">
		<div class="ui center aligned container">
			<p>Bogachev Vitaliy CV</p>
		</div>
		</div>
		<!-- Iiuo ?aaiou -->
		<div class="ui raised very padded text container segment">
			<h2 class="ui header">Dogs Roles with Humans</h2>
			<p></p>
			<p></p>
		</div>
		<div class="ui raised very padded text container segments">
			<div class="ui segment">
				<p>Top</p>
			</div>
			<div class="ui red segment">
				<p>Middle</p>
			</div>
			<div class="ui blue segment">
				<p>Middle</p>
			</div>
			<div class="ui green segment">
				<p>Middle</p>
			</div>
			<div class="ui yellow segment">
				<p>Bottom</p>
			</div>
		</div>
		<div class="ui two column stackable grid center aligned container">
			<!-- TKL -->
			<div class="column">
				<div class="ui alig-rig">
					<a href="#">
						<img src="img/tkl-logo.png" class="company-logo" />
					</a>
				</div>
			</div>
			<div class="column">
				<div class="ui red message">
					<h3 class="ui header red">Turnkey-Lender</h3>
				</div>
			</div>
			<!-- SVITLA -->
			<div class="column">
				<div class="ui">Red</div>
			</div>
			<div class="column">
				<div class="ui orange message">Orange</div>
			</div>
			<!-- EPICALL -->
			<div class="column">
				<div class="ui">Red</div>
			</div>
			<div class="column">
				<div class="ui green message">Green</div>
			</div>
			<!-- YALTA -->
			<div class="column">
				<div class="ui">Red</div>
			</div>
			<div class="column">
				<div class="ui blue message">Blue</div>
			</div>
		</div>
	</div>
</body>
</html>