<?php

if(!$_SESSION['usuario']) {
	header('Location: loginreal.php');
	exit();
}