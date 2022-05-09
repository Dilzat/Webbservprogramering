<?php
	session_start();
	if (isset($_SESSION["username"]) && !empty($_SESSION["username"])) {
		echo "Du är inloggad som " . $_SESSION["username"];
        echo "<p><a href='LoginSite.html'>Tillbaka till LoginSite</a></p>";
	}
	else {
		echo "Du är inte inloggad.";
        echo "<p><a href='LoginSite.html'><button>Tillbaka till LoginSite</button></a></p>";
	}
?>

