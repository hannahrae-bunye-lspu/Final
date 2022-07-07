<script>
    //Remove active to all <a>
    $('#navbarNav a').removeClass('active')
</script>
<head>
<style>
		.navbar{
			background-image:url("../assets/HBG1.png");
			background-size: cover;
		}
	</style>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.html"><img class="logo" src="../assets/logo.png" alt="Rae's Menu logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navi">
            <li class="nav-item">
                <a id="nav-home" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a id="nav-menu" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a id="nav-about" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a id="nav-contact" href="contact.php">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>