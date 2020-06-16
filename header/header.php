<?php
session_start();
if (isset($_SESSION['uid'])){

}
else{
header("Location: ../login/login.php");
session_destroy();
die();
}
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Turna razpored dela</title>
	
    <link rel="stylesheet" type="text/css" href="../style.css">
	
</head>

<body>

<header class="header-fixed">

	<div class="header-limiter">

		<h1><a href="../index/index.php"><img src="../header/turnalogo.png" alt="logo"></a></h1>
<?php
require ("../header/navbar.php");

?>

	</div>

</header>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 600){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>

<!-- You need this element to prevent the content of the page from jumping up -->
<div class="header-fixed-placeholder"></div>
