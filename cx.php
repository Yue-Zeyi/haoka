<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title>查询中心 - 号卡中心</title>
  <link rel="stylesheet" href="static/css/bootstrap4.min.css">
</head>
<?php
include_once("untils/conn.php");
$uid = $_GET['uid'];
$sql = "select * from kefu where uid=$uid ";
$data = mysqli_query($con, $sql);
$result = mysqli_fetch_row($data);
?>
<style>
  .card-columns .card {
    margin-bottom: 0.5rem;
  }
</style>

<body>
  <div class="card-body">
    <div class="card-columns">
      <div class="card bg-dark text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <p>本平台已办理订单综合查询</p>
          <footer>
            <a href="<?php echo $result[5] ?>" type="button" class="btn btn-light btn-sm">点击进入查询</a>
          </footer>
        </blockquote>
      </div>
    </div>
    <div class="card-columns">
      <div class="card bg-info text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <p>中国电信号卡订单官方查询</p>
          <footer>
            <a href="https://pms.189.cn/cljy-web/static/xshkzzfw/xshkzzfw_index.html" type="button" class="btn btn-light btn-sm">点击进入查询</a>
          </footer>
        </blockquote>
      </div>
    </div>
    <div class="card-columns">
      <div class="card bg-primary text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <p>中国移动号卡订单官方查询</p>
          <footer>
            <a href="https://dev.coc.10086.cn/coc/web/coc2020/cardqueryorder/" type="button" class="btn btn-light btn-sm">点击进入查询</a>
          </footer>
        </blockquote>
      </div>
    </div>
    <div class="card-columns">
      <div class="card bg-danger text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <p>中国联通号卡订单官方查询</p>
          <footer>
            <a href="https://m.10010.com/myorder/" type="button" class="btn btn-light btn-sm">号卡订单查询</a>
            <a href="https://epay.10010.com/upp/obppWebroot/html/arrearsSelect.html" type="button" class="btn btn-light btn-sm">号码欠费查询</a>
          </footer>
        </blockquote>
      </div>
    </div>
    <div class="card-columns">
      <div class="card bg-success text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <p>国务院查询名下已办手机卡</p>
          <footer>
            <a href="https://getsimnum.caict.ac.cn/m/#/" type="button" class="btn btn-light btn-sm">点击进入查询</a>
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
  <!-- 底部导航 -->
  <?php require_once('nav.php'); ?>
  <!-- 底部导航 -->
</body>

</html>