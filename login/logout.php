<?php
session_start();
session_destroy();
header('Location: loginreal.php');
exit();