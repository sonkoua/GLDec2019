
<?php

//config.php
session_start();

//Include Google Client Library for PHP autoload file
require_once 'googleAPI/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('604687666120-25h2t01jqd97fjpnjvre7kn14aomafdj.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('5vndzwFHx6nxv7rHlyFSAwd4');


$google_client->setApplicationName('Amnesia Google Login');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/glogin/g-callback.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page


?>
