<?php
if (!isset($_SESSION)) {
	session_start();
}
if (!isset($_SESSION['UId'])) {
	header('Location: /loginpage');
} else {
	if ($_SESSION['user_level'] === 0) {
		header('Location: /user');
	}
}
$page = 'adminschedule'
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="icon" type="image/png" href="/assets/logo/LOGO.png" /> -->
	<title>Admin pagina</title>

	<!-- Stylesheets -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/alerts.css">
	<link rel="stylesheet" href="/css/admin.css">
	<link rel="stylesheet" href="/css/schedule.css">

	<!-- Scripts -->
	<script src="/js/messagestimer.js" defer></script>
	<script src="/js/expand_date.js" defer></script>
</head>

<body>
	<header>
		<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/php/inc/header.inc.php' ?>
	</header>

	<main>
		<?php include_once $_SERVER["DOCUMENT_ROOT"] . '/php/inc/adminsidebar.inc.php' ?>
		<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/php/inc/messages.inc.php' ?>

		<section class="schedule">
			<?php include $_SERVER["DOCUMENT_ROOT"] . "/php/inc/importadmintimes.inc.php" ?>
		</section>
	</main>
</body>

</html>