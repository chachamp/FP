<?php
	session_start();
	session_destroy();
	header("location:/FP/index.html");
?>