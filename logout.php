<?php

	session_start();
	
	session_unset(); // niszczenie sesji
	
	header('Location: index.php');

?>