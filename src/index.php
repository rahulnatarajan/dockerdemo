<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #D3214C;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>PHP Application running on Docker</h1>
                <h2>YL Demo Devops Using Ansible - A Pipeline For Efficiency!!!</h2>
                <p>Your PHP application is now running on a Docker container- BUILD 39 - Sunday 12:59 PM.</p>
                <p>The container is running PHP version - Its Awesome!!!<?php echo phpversion(); ?>.</p>
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>

            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
