<?php

    require_once "config.php";

    try{
        $accessToken = $helper->getAccessToken();
    } catch(\Facebook\Exceptions\FacebookResponseException $e){
        echo "Response Exception" . $e->getMessage();
        exit();
    }catch(\Facebook\Exceptions\FacebookSDKException $e){
        echo "SDK Exception" . $e->getMessage();
        exit();
    }

    if(!$accessToken){
        header((string) 'Location: ../index.php');
        exit();
    }

    $oAuth2Client = $FB->getOAuth2Client();

    if ($accessToken->isLongLived())
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);

    $response = $FB->get("/me?fields=id, first_name, last_name, email, picture.type(large)",$accessToken);
    $userData = $response->getGraphNode()->asArray();
    //$_SESSION['userData'] = $userData;
    $_SESSION['access_token'] = (string) $accessToken;

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
	}

	if(!empty($userData['picture']))
	{
	$_SESSION['user_image'] = $userData['picture']['url'];
	}


    header((string) 'Location: ../index.php');
    exit();
    



?>