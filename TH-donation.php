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

    <title>Donate</title>
</head>

<body>
    <!-- header -->
    <?php include(ROOT_PATH . "/app/fix/TH-header.php"); ?>
    <!-- header -->

    <div class="content-wrap">
        <div class="content">
            <h1>สมทบทุน</h1>
            <h2>ท่านสามารถบริจาคเงินให้โครงการต่างๆ ของมูลนิธิได้ โดยวิธีดังต่อไปนี้</h2>
            <br><br>

            <div class="donation-methods">
                <div class="donation-column1">
                    <h2>บริจาคด้วยเงินสด &nbsp;<i class="fa-solid fa-hand-holding-dollar"></i></h2>
                    <p>สามารถมาบริจาคได้ด้วยตนเองได้ที่มูลนิธิ​ซีอาร์เอ็ม ชาริตี้</p>
                    <p><b>
                            ซีอาร์เอ็ม ชาริตี้<br>
                            เลขที่ 1054/8 ถนน เพชรบุรีตัดใหม่,<br>
                            แขวงมักกะสัน เขตราชเทวี<br>
                            กรุงเทพฯ 10400
                        </b></p>
                </div>
                <div class="donation-column2">
                    <h2>โอนผ่านธนาคาร&nbsp;&nbsp;<i class="fa-solid fa-money-check-dollar"></i></h2>
                    <p><b>ชื่อบัญชี:</b> &nbsp;&nbsp; CRM Charity Foundation<br>
                        <b>เลขที่บัญชี:</b> &nbsp;&nbsp; 981-0-95490-5<br>
                        <b>Bank:</b> &nbsp;&nbsp; ธนาคารกรุงไทย ออมทรัพย์ สาขาอาคารเคพีไอ ทาวเวอร์
                    </p>
                    <p>( กรุณาแนบหลักฐานการ ฝาก/โอนเงิน ชื่อสกุล และที่อยู่ ส่งมา​ที่ <b>karittha@crm-c.org</b>
                        <br>หรือส่งกลับมาที่ <b>"มูลนิธิซีอาร์เอ็ม ชาริตี้" เลขที่ 1054/8 ถนน ​เพชรบุรีตัดใหม่ แขวงมักกะสัน เขตราชเทวี กรุงเทพฯ 10400)</b></p>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/fix/TH-footer.php"); ?>
    <!-- Footer -->

</body>

</html>
