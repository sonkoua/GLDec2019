<?php

    session_start();


    require_once "Facebook/autoload.php";
    
    $FB = new \Facebook\Facebook([
        'app_id' => '549949435800504',
        'app_secret' => 'a01015aee1f4006187664e7688c9cda3',
        'default_graph_version' => 'v2.10'

    ]);

    $helper = $FB->getRedirectLoginHelper();
?>