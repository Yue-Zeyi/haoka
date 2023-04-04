<html>

<head>
    <meta name="wechat-enable-text-zoom-em" content="true">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="color-scheme" content="light dark">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="https://res.wx.qq.com/a/wx_fed/assets/res/NTI4MWU5.ico">
    <!--样式文件-->
    <link rel="stylesheet" href="other/common.css">
    <link rel="stylesheet" href="other/bootstrap.min.css">
</head>
<div id="zhanwei"></div>
<title>号卡服务客服</title>


<body>
    <?php
    include_once("untils/conn.php");
    $sql = "select * from kefu where kefu='kefu'";
    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_row($data);
    ?>
    <div id="kf_safety">
        <div class="icon"></div>
        <div class="text">二维码已通过安全验证</div>
    </div>
    <div id="kf_beizhu">
        <p style="color:#f00;text-align:center;">在线时间</p><?php echo $result[3] ?>
    </div>
    <p id="scanTips">请长按下方关注公众号</p>
    <div id="kfzm_qrcode"><img src="<?php echo $result[1] ?>" /></div>
    <p id="wxnum">客服微信号：<span class="message"><?php echo $result[2] ?></span></p>
    <div id="kf_online_true"><a href="#" class="btnEl" style="color:white;"> 当前客服在线，点击联系！</a> </div>
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