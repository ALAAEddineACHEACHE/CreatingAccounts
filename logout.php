<?php
	// Initialiser la session
	session_start();
	
	// Détruire la session.
	if(session_destroy())
	{
		// Redirection vers la page de connexion
		header("Location: login.php");
	}
?>
<?php
echo " this is a counter attack ! HHAHAH lol ";
?>