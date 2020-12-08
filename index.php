<?php
include  'assets/php/fonctions.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">


</head>
<body>

<div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
</div>
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-img pere-text">
                <img class="fadeIn" src="img/logo.png" alt="">
                <?php
//                echo $ip[country]
                ?>
            </div>
        </div>
    </div>
</div>
<script src="js/custom.js"></script>
<script>
    <?php
    $ip=getLocationInfoByIp($_SERVER['REMOTE_ADDR']);

    if($ip[country]=='TN' or $ip[country]=='FR' or $ip[country]=='DZ' or $ip[country]=='MA')
    {
        echo 'window.location.href = "https://ditcsrl.com/fr"; ';
    }
    else if($ip[country]=='IT')
    {
        echo 'window.location.href = "https://ditcsrl.com/it"; ';
    }
    else if ($ip[country]=='SA')
    {
        echo 'window.location.href = "https://ditcsrl.com/ar"; ';
    }
    else
    {
        echo 'window.location.href = "https://ditcsrl.com/en"; ';
    }

    ?>
    </script>
</body>
</html>
