<?php

$secret_key = 'supersecretkey';

if (!isset($_GET['key']) || $_GET['key'] !== $secret_key) {
header('Location: http://infohelp.great-site.net/');
exit();
}

//http://infohelp.great-site.net/admin/users/index.php?key=supersecretkey