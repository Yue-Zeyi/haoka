<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>号卡中心</title>
  <link rel="stylesheet" href="static/css/bootstrap4.min.css">
</head>
<style>
  html,
  body {
    margin: 0;
    padding: 0;
    background: #f2f2f2;
    -webkit-tap-highlight-color: transparent;
  }
</style>

<body>
  <?php
  include_once("untils/conn.php");
  mysqli_query($con, "set names utf8");
  $uid = $_GET['uid'];
  $yysid = $_GET['yys'];
  if ($yysid == null) {
    $yssql = "select * from sort where uid=$uid ORDER BY sortid DESC LIMIT 1 ";
    $ysdata = mysqli_query($con, $yssql);
    $ysresult = mysqli_fetch_row($ysdata);
    $yysid = $ysresult['0'];
  } ?>
  <iframe id="mainFrame" src="ka.php?uid=<?php echo $uid ?>&yys=<?php echo $yysid ?>" style="border-width: 0px;width: 100vw;height: 92vh; overflow: hidden;margin-bottom: 0px;">
  </iframe>
  <!-- 底部导航 -->
  <?php require_once('nav.php'); ?>
  <!-- 底部导航 -->
</body>
<script src="https://cdn.bootcss.com/sweetalert/2.1.0/sweetalert.min.js">
</script>
<script>
  <?php
  include_once("untils/conn.php");
  $sql = "select * from kefu where uid=$uid";
  $data = mysqli_query($con, $sql);
  $result = mysqli_fetch_row($data);
  $php_jstitle =  $result['3'];
  $php_jstext =  $result['4'];
  echo "var jstitle='$php_jstitle';";
  echo "var jstext='$php_jstext';";
  ?>

  if (-1 === document.cookie.indexOf('returning=true')) {

    // run only if cookie not found (-1 means not found)

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
    document.cookie = 'returning=true'; // set cookie
  }
</script>


</html>