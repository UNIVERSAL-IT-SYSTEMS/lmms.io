<?php

// Redirects all visitors to HTTPS for live site only
$SECURE_HOST='lmms.io';

// Redirect HTTP PORT 80 traffic to use HTTPS
if ($_SERVER['HTTP_HOST'] == $SECURE_HOST && $_SERVER['HTTPS'] !== 'on' && $_SERVER['SERVER_PORT'] == '80') {
	header("Location: https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    die();
}
?>