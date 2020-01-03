
<?php

//config.php
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
//Include Google Client Library for PHP autoload file
require_once 'googleAPI/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('604687666120-gqlrdtbake9ofseu69hgblr1eviup8tr.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('CNkH5ubtRMh1XFYr0IIBtAck');


$google_client->setApplicationName('Web client 3');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/projet/GLDec2019_1/Amnesia/Google_setup/g-callback.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page


?>
