<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);
require_once("../config.php");
?>

<!DOCTYPE html>
<html lang="th">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="HBD">
<meta name="author" content="">

<title>HBD</title>

<link rel='shortcut icon' href='<?php echo ROOT; ?>favicon.ico' type='image/x-icon' />
<link rel="icon" href="<?php echo ROOT; ?>favicon.ico" type="image/x-icon">

<!-- Bootstrap core CSS -->
<link href="<?php echo ROOT; ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="<?php echo ROOT; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="styles/index.css" rel="stylesheet" type="text/css">

<!-- Bootstrap core JavaScript -->
<script src="<?php echo ROOT; ?>lib/jquery/jquery-1.11.3.min.js"></script>
<script src="<?php echo ROOT; ?>bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>สุขสันต์วันเกิดนะต้น</h2>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <p>
                    <b>มีความสุขมากๆนะ</b> สัปดาห์ที่แล้ว x ไปเดินหาการ์ดวันเกิด แต่ไม่มีแบบที่มีเสียงเพลงเลย x อยากได้การ์ดแบบมีเสียงเพลง HDB แต่พนักงานบอกไม่มี มีแต่แบบธรรมดา &#x2639; แถมราคาก็แพง x เลยคิดว่ากะอีแค่การ์ดแค่เนียะตั้ง 170 บาท ทำเวปเอง เขียน Javascript เองยังจะสวยกว่าเลย สุดท้ายเลยลงเอยแบบทำ page HBD ให้ <b>ดึใจละซิ</b> เห็นเคยบ่นว่าทำไมแฟนไม่เคยเขียนโปรแกรมทำ web บอกรักไรทำนองนี้ด้วย ปีนี้ก็ขอให้ได้อะไรสมใจหวังนะ ถ้าเป็นไปได้เรียนจบปีนี้ได้ก็จะดีนะ <b class="emo">&#9786;</b>
                </p>
                <p>
                    <b>ปล.</b> จะบอกว่า page นี้มีความลับซ่อนอยู่เหมือนกันนะ ถ้าต้นหาเจอจะได้ของขวัญวันเกิดแต่ถ้าหาไม่เจอก็อดไปนะ <b>ส่วนคำใบก็</b> ไม่มีนะ ฮ่าๆๆ
                </p>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-2 col-xs-1"></div>
            <div class="col-md-8 col-xs-10">
                <div class="shuffle__image-container">
                    <img id="image-1" class="show" src="images/1.jpg"></img>
                <?php
                for ($i = 2; $i < 21; $i++) {
                    echo '<img id="image-'.$i.'" src="images/'.$i.'.jpg"></img>';
                } 
                ?>
                </div>
            </div>
            <div class="col-md-2 col-xs-1"></div>
        </div>
    </div>
    <!--audio controls loop autoplay>
        <source src="audios/hbd.mp3" type="audio/mpeg">
    </audio-->
</body>

</html>
<div class="modal fade" id="showGift" tabindex="-1" role="dialog" aria-labelledby="showGiftLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">หาเจอจนได้นะ &#9786;</h4>
            </div>
            <div class="modal-body">
                ยินดีด้วย ได้สิทธิซื้อของ 1 อย่าง
            </div>
        </div>
    </div>
</div>
<script src="scripts/index.js" type="text/javascript"></script>