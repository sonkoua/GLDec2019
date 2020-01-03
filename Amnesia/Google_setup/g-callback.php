<?php

require_once 'config.php';

   
//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
        //Set the access token used for requests
        $google_client->setAccessToken($token['access_token']);

        //Store "access_token" value in $_SESSION variable for future use.
        $_SESSION['access_token'] = $token['access_token'];

        //Create Object of Google Service OAuth 2 class
        $google_service = new Google_Service_Oauth2($google_client);

        //Get user profile userData from google
        $userData = $google_service->userinfo_v2_me->get();

        //Below you can find Get profile userData and store into $_SESSION variable
        
    if(!empty($userData['id']))
    {
    $_SESSION['id'] = $userData['id'];
    }
    if(!empty($userData['given_name']))
    {
    $_SESSION['user_first_name'] = $userData['given_name'];
    }
    
    if(!empty($userData['first_name']))
    {
    $_SESSION['user_first_name'] = $userData['first_name'];
    }	

    if(!empty($userData['family_name']))
    {
    $_SESSION['user_last_name'] = $userData['family_name'];
    }

    if(!empty($userData['last_name']))
    {
    $_SESSION['user_last_name'] = $userData['last_name'];
    }	

    if(!empty($userData['email']))
    {
    $_SESSION['user_email_address'] = $userData['email'];
    }

    if(!empty($userData['gender']))
    {
    $_SESSION['user_gender'] = $userData['gender'];
    }else{
            $_SESSION['user_gender'] ="";
    }


    if(!empty($userData['picture']))
    {
    $_SESSION['user_image'] = $userData['picture']['url'];
    }else{
            $_SESSION['user_image'] ="";
    }
    
    if(!empty($userData['birthday']))
    {
    $_SESSION['user_birthday'] = $userData['birthday'];
    }else{
            $_SESSION['user_birthday'] ="";
    }

    if(!empty($userData['hometown']))
    {
    $_SESSION['user_hometown'] = $userData['hometown'];
    }else{
            $_SESSION['user_hometown'] ="";
    }

    if(!empty($userData['location']))
    {
    $_SESSION['user_location'] = $userData['location'];
    }else{
            $_SESSION['user_location'] ="";
    }

    

 }

 header((string) 'Location: ../Requests/requestsControleur.php');

 exit();
}
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 header((string) 'Location: ../index.php');
 exit();
}



        

        /* $oAuth = new Google_Service_OAuth2($google_client);
        $userData = $oAuth->userinfo_v2_me->get();

        $_SESSION['email'] = $token['email'];
        $_SESSION['gender'] = $token['gender'];
        $_SESSION['picture'] = $token['picture'];
        $_SESSION['familyName'] = $token['familyName'];
        $_SESSION['givenName'] = $token['givenName'];

        header((string) 'Location: index.php');
        exit(); */
    
        





   
    

?>