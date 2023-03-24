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
    <?php
    include_once("../untils/conn.php");
    mysqli_query($con, "set names utf8");
    if ($con) {
      if ($db) {
        $sql1 = "SELECT COUNT(*) FROM list WHERE yys='中国电信';";
        $sql2 = "SELECT COUNT(*) FROM list WHERE yys='中国联通';";
        $sql3 = "SELECT COUNT(*) FROM list WHERE yys='中国移动';";
        $data1 = mysqli_query($con, $sql1);
        $data2 = mysqli_query($con, $sql2);
        $data3 = mysqli_query($con, $sql3);
        $zgdx = mysqli_fetch_array($data1)[0];
        $zglt = mysqli_fetch_array($data2)[0];
        $zgyd = mysqli_fetch_array($data3)[0];
      }
    }
    ?>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="other/avatar.jpg" width="30" height="30" alt="">
        号卡推广管理平台
      </a>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="user.php" id="navbarDropdown" data-toggle="dropdown">
            个人中心
          </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid vh-100">
      <div class="row h-100">
        <div class="col-2 bg-white border-right nav-left p-0">
          <div class="row text-center mt-3 px-5">
            <a href="add.php" class="btn btn-primary rounded-0 col">添加产品</a>
          </div>
          <div class="list-group list-group-flush border-top border-bottom mt-3 text-center">
            <li class="list-group-item list-group-item-action">
              <a href="index.php" class="text-decoration-none text-secondary">
                <i class="iconfont icon-home pr-1"></i>管理首页
              </a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="list.php" class="text-decoration-none text-secondary">
                <i class="iconfont icon-neirongguanli pr-1"></i>产品管理
              </a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="system.php" class="text-decoration-none text-secondary">
                <i class="iconfont icon-zhanghuguanli pr-1"></i>系统管理
              </a>
            </li>
          </div>
        </div>
        <div class="col-10">
          <div class="p-3 border mb-3 bg-white d-flex justify-content-between">
            <h4>欢迎使用号卡推广管理平台！
            </h4>
            <a href="loginout.php" class="text-dark text-decoration-none"><i class="iconfont icon-tuichu pr-1"></i>退出</a>
          </div>
          <div class="card-deck">
            <div class="card text-center">
              <div class="card-header bg-success text-white">抽空写！</div>
            </div>
          </div>
        </div>
      </div>
    </div>


</body>
<script src="js/public.js"></script>
<?php
  } else {
    echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
  }
?>

</html>