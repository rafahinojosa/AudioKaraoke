<?php
	header('Content-type: application/json');

	session_start();
	if (isset($_SESSION["login_user"]))
	{
		echo json_encode(array("user" => $_SESSION["login_user"], "Name" => $_SESSION["name"]));
	}
	else
	{
		header('HTTP/1.1 406 Session has expired.');
		die("Your session has expired you will be redirected to the index.");
	}

?>