<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>号卡推广管理平台</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1658828_vud4w73neg.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <?php
    session_start();
    if (isset($_SESSION["username"])) {
    ?>
        <?php require_once('head.php'); ?>
        <div class="col-10">
            <div class="p-3 border mb-3 bg-white d-flex justify-content-between">
                <h4>欢迎使用号卡推广管理平台！
                </h4>
                <a href="loginout.php" class="text-dark text-decoration-none"><i class="iconfont icon-tuichu pr-1"></i>退出</a>
            </div>
            <div class="card-deck">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">程序名称</div>
                    <div class="card-body">
                        号卡推广管理系统
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-info text-white">当前版本</div>
                    <div class="card-body">
                        1.2.0 | Standard
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">环境支持</div>
                    <div class="card-body">
                        PHP≥70+Mysql5.7
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">GitHub</div>
                    <div class="card-body">
                        <a href="https://github.com/Yue-Zeyi/haoka">点击进入</a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">系统说明 (使用建议)</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1.所有图片链接均可以使用图床获取URL来填写！</li>
                                <li class="list-group-item">2.添加产品前先添加类目，修改类目后需修改产品！</li>
                                <li class="list-group-item">3.前台产品排列顺序依据排序数字，数字越大越靠前！</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">使用须知 (用户协议)</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">1.本程序禁止用于诈骗等任何违法违规活动！</li>
                                <li class="list-group-item">2.使用本程序发布的信息必须保证真实可靠！</li>
                                <li class="list-group-item">3.使用本程序产生所有利益纠纷与作者无关！</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="https://www.hualigs.cn/" class="btn btn-primary" target="_blank">云图床(可用于获取图片链接)</a>
                            <a href="https://cli.im/url" class="btn btn-success" target="_blank">草料网址二维码（网址转换成二维码）</a>
                            <a href="https://www.yuezeyi.com/541.html" class="btn btn-info" target="_blank">程序更新记录（最快使用最新版）</a>
                            <a href="https://www.yuezeyi.com/" class="btn btn-dark" target="_blank">岳泽以个人博客（来个点击支持一下）</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

<?php
    } else {
        echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
    }
?>

</html>