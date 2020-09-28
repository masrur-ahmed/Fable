<div id="navBarContainer">
	<nav class="navBar">

		<span role="link" tabindex="0" onclick="openPage('../index.php')" class="logo">
			<img src="../view/images/icons/logo.png">
		</span>


		<div class="group">

			<div class="navItem">
				<span role='link' tabindex='0' onclick='openPage("../controller/search.php")' class="navItemLink">
					Search
					<img src="../view/images/icons/search.png" class="icon" alt="Search">
				</span>
			</div>

		</div>

		<div class="group">
			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('../controller/browse.php')" class="navItemLink">You Might Also Like</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('../controller/yourAudiobooks.php')" class="navItemLink">Your Audiobooks</span>
			</div>

			<div class="navItem">
				<span role="link" tabindex="0" onclick="openPage('../controller/settings.php')" class="navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div>
		</div>

	</nav>
</div>
