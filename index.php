<html lang="zh">

<head>
  <meta charset="utf-8">
  <!--<html style="filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
    -webkit-filter: grayscale(100%);">-->
  <title>号卡中心</title>
  <meta name="baidu-site-verification" content="code-MpNsmn1wYG" />
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">-->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="19元月租大流量卡">
  <meta name="description" content="移动电话卡,联通电话卡,电信电话卡">
  <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="favicon.ico" mce_href="favicon.ico" type="image/x-icon" />
  <style>
    .add-btn {
      position: fixed;
      right: 0px;
      text-decoration: none;
      cursor: pointer;
      text-align: center;
      border-radius: 50px 0px 0px 50px;
      display: inline-block;
      padding: 3px 9px;
      color: #fff;
    }

    .detail {
      top: 120px;
      background-color: #23c6c8;
      border-color: #23c6c8;
    }

    .query {
      top: 80px;
      background-color: #1ab394;
      border-color: #1ab394;
    }

    .gzh {
      top: 40px;
      background-color: #1ab394;
      border-color: #1ab394;
    }

    iframe::-webkit-scrollbar {
      width: 0px
    }
  </style>

</head>

<body style="width: 100vw;height: 0vh;margin: 0px;overflow:hidden;">
  <?php
  include_once("untils/conn.php");
  mysqli_query($con, "set names utf8");
  if ($con) {
    //选择数据库
    if ($db) {
      //获取数据总行数
      $sql = "select * from `sort` order by `sortid` desc limit 1";
      $data = mysqli_query($con, $sql);
      $rows = mysqli_fetch_row($data);
      $index = $rows[1]
  ?>
      <iframe id="mainFrame" src="ka.php?yys=<?php echo $index ?>" style="border-width: 0px;width: 100vw;height: 92vh;overflow:visible;">
      </iframe>
  <?php
    }
  }
  ?>
  <div class="footer row">
    <div class="col-xs-3 text-center tejia">
      <a onclick="index()">
        <p style="color: black;margin: 6 0 5px;">
          <img style="width: 24px;" src="img/sy.png">
        </p>
        <p style="color: black;">首页</p>
      </a>
    </div>

    <div class="col-xs-3 text-center shouye">
      <a onclick="zxkf()">
        <p style="color: #dc3c41;margin: 6 0 5px;">
          <img style="width: 24px;" src="img/zxkf.png">
        </p>
        <p style="color: black;">在线客服</p>
      </a>
    </div>

    <div class="col-xs-3 text-center shouye">
      <a onclick="gzgzh()">
        <p style="color: #dc3c41;margin: 6 0 5px;">
          <img style="width: 24px;" src="img/gzgzh.png">
        </p>
        <p style="color: black;">常见问题</p>
      </a>
    </div>

    <div class="col-xs-3 text-center queryOrder">
      <a onclick="cxzx()">
        <p style="color: black;margin: 6 0 5px;">
          <img style="width: 24px;" src="img/cxzx.png">
        </p>
        <p style="color: black;">查询中心</p>
      </a>
    </div>
  </div>
</body>
<script src="https://cdn.bootcss.com/sweetalert/2.1.0/sweetalert.min.js">
</script>
<script>
  <?php
  include_once("untils/conn.php");
  $sql = "select * from kefu where kefu='kefu'";
  $data = mysqli_query($con, $sql);
  $result = mysqli_fetch_row($data);
  $php_jstitle =  $result['4'];
  $php_jstext =  $result['5'];
  echo "var jstitle='$php_jstitle';";
  echo "var jstext='$php_jstext';";
  ?>
  swal(jstitle, '\n' + jstext, 'success');

  function AddFavorite(title, url) {
    try {

      window.external.addFavorite(url, title);

    } catch (e) {

      try {

        window.sidebar.addPanel(title, url, );

      } catch (e) {

        alert("抱歉，您所使用的浏览器无法完成此操作。");

      }

    }

  }
</script>

<script>
  function index() {
    parent.location.reload();
  }

  function zxkf() {
    document.getElementById("mainFrame").src = "kf.php";
  }

  function gzgzh() {
    document.getElementById("mainFrame").src = "dl.html";
  }

  function cxzx() {
    document.getElementById("mainFrame").src = "cx.php";
  }
</script>

</html>