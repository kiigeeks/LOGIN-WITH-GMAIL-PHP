<?php
    // Include file gpconfig
    include_once 'gpconfig.php';

    if(isset($_GET['code'])){
        $gclient->authenticate($_GET['code']);
        $_SESSION['token'] = $gclient->getAccessToken();
        header('Location: ' . filter_var($redirect_url, FILTER_SANITIZE_URL));
    }

    if (isset($_SESSION['token'])) {
        $gclient->setAccessToken($_SESSION['token']);
    }

    if ($gclient->getAccessToken()) {

        // Get user profile data from google
        $gpuserprofile = $google_oauthv2->userinfo->get();
        $nama = $gpuserprofile['given_name']." ".$gpuserprofile['family_name']; // Ambil nama dari Akun Google
        $email = $gpuserprofile['email']; // Ambil email Akun Google nya
        
        $_SESSION['namalengkap'] = $nama;
        $_SESSION['username'] = $email;
    
        header("location: welcome.php");
    } else {
        $authUrl = $gclient->createAuthUrl();
        header("location: ".$authUrl);
    }
?>
