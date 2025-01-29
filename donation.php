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

    <title>Donate</title>
</head>

<body>
    <!-- header -->
    <?php include(ROOT_PATH . "/app/fix/header.php"); ?>
    <!-- header -->

    <div class="content-wrap">
        <div class="content">
            <h1>Support Our Cause</h1>
            <h2>Your contributions help us make a difference. Please consider donating to support our initiatives.</h2>
            <br><br>

            <div class="donation-methods">
                <div class="donation-column1">
                    <h2>Donate with Cash &nbsp;<i class="fa-solid fa-hand-holding-dollar"></i></h2>
                    <p>To donate cash to the CRM Charity Foundation, you can visit their office at:</p>
                    <p><b>
                            CRM Charity Foundation<br>
                            1054/8 Petchaburi Road,<br>
                            Makasan Subdistrict,<br>
                            Ratchathewi District,<br>
                            Bangkok 10400
                        </b></p>
                </div>
                <div class="donation-column2">
                    <h2>Bank Transfer&nbsp;&nbsp;<i class="fa-solid fa-money-check-dollar"></i></h2>
                    <p><b>Account Name:</b> &nbsp;&nbsp; CRM Charity Foundation<br>
                        <b>Account Number:</b> &nbsp;&nbsp; 981-0-95490-5<br>
                        <b>Bank:</b> &nbsp;&nbsp; Krung Thai Bank (Savings), KPI Tower Branch
                    </p>
                    <p>Please attach proof of deposit/transfer, your full ​name, and address <br>to <b>karittha@crm-c.org</b> or send it ​back to <b>"CRAM Charity Foundation"</b> <br> at 1054/8 ​Petchaburi Road,<br>Makasan Subdistrict,<br>Ratchathewi ​District, Bangkok 10400</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/fix/footer.php"); ?>
    <!-- Footer -->

</body>

</html>