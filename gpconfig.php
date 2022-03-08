<?php
    session_start();

    // Include Librari Google Client (API)
    include_once 'libraries/google-client/Google_Client.php';
    include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';

    $client_id = 'XXXX'; // Google client ID
    $client_secret = 'XXXX'; // Google Client Secret
    $redirect_url = 'http://localhost:8080/LOGIN-GMAIL/google.php'; // Callback URL (CONTOH)

    // Call Google API
    $gclient = new Google_Client();
    $gclient->setApplicationName('Sign in Google'); // Set dengan Nama Aplikasi Kalian
    $gclient->setClientId($client_id); // Set dengan Client ID
    $gclient->setClientSecret($client_secret); // Set dengan Client Secret
    $gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login

    $google_oauthv2 = new Google_Oauth2Service($gclient);
?>