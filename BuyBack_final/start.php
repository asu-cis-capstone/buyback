<?php

	session_start("order");
	session_unset("order");
	session_destroy();
	header('Location: index.php');


	

?>