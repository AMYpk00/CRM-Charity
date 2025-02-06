<?php
include("path.php");
include("app/database/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <script src="./assets/script/script.js"></script>
    <script src="https://kit.fontawesome.com/c37ac7a1ae.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="../../assets/pic/customLogo.png">
    <?php include("google.php"); ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <title>Home</title>
</head>

<body class="body-contact">
    <!-- facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v21.0"></script>

    <!-- header -->
    <?php include(ROOT_PATH . "/app/fix/header.php"); ?>
    <!-- header -->

    <div class="contact-content-wrap">
        <h2>Contact Us</h2>
        <div class="contact-content">
            <div class="contact-info">
                <h3>CRM Charity Address</h3>
                <p>1054/8 New Petchburi Rd., Rachatevee, Bangkok 10400</p>
                <br><br>
                <h3>Phone</h3>
                <p>+66 2 655 3569 <br>
                    +66 2 655 3551</p>
                <br><br>
                <h3>E-mail</h3>
                <p>support@crm-c.org <br>
                    help@crm-c.org</p>
                <br><br>
                <h3>Fax</h3>
                <p>+66 2 207 8613</p>
            </div>

            <div class="facebook-section">
                <div class="fb-page"
                    data-href="https://www.facebook.com/CrmCharityFoundation"
                    data-tabs="timeline"
                    data-width=""
                    data-height=""
                    data-small-header="false"
                    data-adapt-container-width="true"
                    data-hide-cover="false"
                    data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/CrmCharityFoundation" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/CrmCharityFoundation">CRM Charity Foundation</a>
                    </blockquote>
                </div>
                <br><br><br><br><br>
                <h3>CRM Charity Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.4948750029453!2d100.5444563!3d13.7490037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ede98752c03%3A0xc303723c5324de0d!2sCRM-C%20%3A%20CRM%20and%20Cloud%20Consulting%20Co.%2CLtd.%20%5B%20CRMC%20%5D%20Head%20Office!5e0!3m2!1sen!2sth!4v1735398854414!5m2!1sen!2sth" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <br><br><br><br><br>
                <a href="https://youtube.com/@crmcharity?si=pBDHUcxb44pQrS7e">
                    <h3>CRM Charity Youtube</h3>
                    <i class="fa fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/fix/footer.php"); ?>
    <!-- Footer -->

</body>

</html>
