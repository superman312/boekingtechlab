    <ul id='expand-menu' onclick="togglemenu()"><span class="material-icons md-36">menu</span></ul>
    <h1>Techlab Regius College</h1>
    <div class="btn">
    	<a class="<?php if ($page == 'home') {echo 'active';}; ?>" href="index.php">Home</a>
    	<a class="" href="#">Reserveren</a>
    	<a class="" href="#">Booking</a>
    	<a class="" href="#">Login</a>
    </div>
    <?php if (isset($_SESSION['first_name'])) {
		echo
		"<li class='dropdown'>
				<a href='/myaccount' class='dropbtn'>placeholder ($_SESSION[first_name])</a>
				<div class='dropdown-content'>
					<a href='#'>placeholder</a>
					<a href='#'>placeholder</a>
					<a href='#'>placeholder</a>
					<a href='/php/logout'>Log out</a>
				</div>
			</li>";
	} else {
		if ($page == 'LoginPage') {
			$active = 'active';
		} else {
			$active = '';
		}
		echo $_SESSION['first_name'];
		echo
		"<li><a href='/loginpage' class='btn dropbtn $active'>Login</a></li>";
	}
	?>