<?php

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '275261901835-dlskigi66qvh7ng7qjha4qs90qa31ut2.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'RDqA1f9uEw3kyJ4wpAKR0Uuv'; //Google client secret
$redirectURL = 'http://localhost/nasprojekt/google_index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>