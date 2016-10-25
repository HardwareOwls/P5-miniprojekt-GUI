<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/etc/common.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Bootstrap 101 Template</title>
		<!-- Bootstrap -->
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="/assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<h1>Smart greenhouse</h1>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div id="temp_inside">Current temp, inside: <span></span></div>
				<div id="temp_outside">Current temp, outside: <span></span></div>
				<div id="humidity_inside">Current humidity, inside: <span></span></div>
				<div id="humidity_outside">Current humidity, outside: <span></span></div>
				<div id="sun">Is the sun shining: <span></span></div>
				<div id="window_control" d="open">Click here to Open the window / Click here to close the window</div>
			</div>
		</div>
		<script type="text/javascript">
			function update(id){
				/*$.ajax({
					url: "ajax.php",
					method: "POST",
					data: {
						action: "update",
						var: id
					}
				}).error(function(data){
					//
				}).done(function(data){
					//
				});*/
			}

			$(function(){
				update("temp_inside");
				update("temp_outside");
				update("humidity_inside");
				update("humidity_outside");
				update("sun");
				setInterval(update("temp_inside"), 500);
				setInterval(update("temp_outside"), 500);
				setInterval(update("humidity_inside"), 500);
				setInterval(update("humidity_outside"), 500);
				setInterval(update("sun"), 500);
			});

			$("#window_control").click(){
				console.log($(this).attr("d"));
				/*$.ajax({
					url: "ajax.php",
					method: "POST",
					data: {
						action: "window",
						direction: $(this).attr("d");
					}
				}).error(function(data){
					//
				}).done(function(data){
					//
				});*/
			}
		</script>
	</body>
</html>