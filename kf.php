<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>在线客服 - 号卡中心</title>
    <link rel="stylesheet" href="static/css/common.css">
    <link rel="stylesheet" href="static/css/bootstrap4.min.css">
</head>

<div id="zhanwei"></div>

<body>
    <?php
    include_once("untils/conn.php");
    $uid = $_GET['uid'];
    $sql = "select * from kefu where uid=$uid ";
    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_row($data);
    ?>
    <div id="kf_safety">
        <div class="icon"></div>
        <div class="text">二维码已通过安全验证</div>
    </div>
    <div id="kf_beizhu">
        <p style="color:#f00;text-align:center;">在线时间</p><?php echo $result[2] ?>
    </div>
    <p id="scanTips">请长按下方关注公众号</p>
    <div id="kfzm_qrcode"><img src="<?php echo $result[0] ?>" /></div>
    <p id="wxnum">客服微信号：<span class="message"><?php echo $result[1] ?></span></p>
    <div id="kf_online_true"><a href="#" class="btnEl" style="color:white;"> 点击立即联系客服！</a> </div>
    <!-- 底部导航 -->
    <?php require_once('nav.php'); ?>
    <!-- 底部导航 -->
</body>
<script>
    const copyEl = document.querySelector('.message')
    const btnEl = document.querySelector('.btnEl')
    btnEl.addEventListener('click', () => {
        window.getSelection().selectAllChildren(copyEl)
        document.execCommand('Copy')
        alert('客服微信已复制，快去联系吧！')
    })
</script>

</html>