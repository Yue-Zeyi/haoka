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
    $kefu = 'kefu';
    $sql = "select * from kefu where kefu='kefu'";
    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_row($data);
    ?>
    <?php require_once('head.php'); ?>
    <div class="col-10">
      <div class="p-3 border mb-3 bg-white d-flex justify-content-between">
        <h4>其他信息配置
        </h4>
        <a href="loginout.php" class="text-dark text-decoration-none"><i class="iconfont icon-tuichu pr-1"></i>退出</a>
      </div>
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-header bg-primary text-white d-flex justify-content-between">
              <h6 class="mb-0 align-self-center">信息修改</h6>
            </div>
            <div class="card-body">
              <form action="doSystem.php" method="POST">
                <div class="form-row">
                  <label for="title" class="col-2 text-center col-form-label">二维码：</label>
                  <input type="text" class="col-8 form-control" name="qrcode" placeholder="请输入客服/公众号二维码链接" value="<?php echo $result[1] ?>" required>
                  <span class="col-2 col-form-label text-danger">* 必填项</span>
                </div>
                <div class="form-row mt-3">
                  <label for="title" class="col-2 text-center col-form-label">微信号：</label>
                  <input type="text" class="col-8 form-control" name="kfwx" placeholder="请输入联系微信号" value="<?php echo $result[2] ?>" required>
                  <span class=" col-2 col-form-label text-danger">* 必填项</span>
                </div>
                <div class="form-row mt-3">
                  <label for="title" class="col-2 text-center col-form-label">在线时间：</label>
                  <input type="text" class="col-8 form-control" name="ontime" placeholder="请输入客服在线时间介绍" value="<?php echo $result[3] ?>" required>
                  <span class=" col-2 col-form-label text-danger">* 必填项</span>
                </div>
                <div class="form-row mt-3">
                  <label for="title" class="col-2 text-center col-form-label">公告题目：</label>
                  <input type="text" class="col-8 form-control" name="ggtitle" placeholder="请输入弹窗公告题目" value="<?php echo $result[4] ?>" required>
                  <span class=" col-2 col-form-label text-danger">* 必填项</span>
                </div>
                <div class="form-row mt-3">
                  <label for="title" class="col-2 text-center col-form-label">公告内容：</label>
                  <input type="textarea" class="col-8 form-control" name="shuoming" placeholder="请输入弹窗公告内\\n换行" value="<?php echo $result[5] ?>" required>
                  <span class=" col-2 col-form-label text-danger">* 必填项</span>
                </div>
                <div class="form-row mt-3">
                  <label for="title" class="col-2 text-center col-form-label">订单查询：</label>
                  <input type="text" class="col-8 form-control" name="chaxun" placeholder="请输入订单查询链接" value="<?php echo $result[6] ?>" required>
                  <span class=" col-2 col-form-label text-danger">* 必填项</span>
                </div>
                <div class="form-row mt-3">
                  <input type="hidden" name="kefu" value="<?php echo $kefu ?>">
                  <div class="offset-2">
                    <button class="btn btn-success" type="submit" value="添加">确认修改</button>
                    <!-- <button class="btn btn-danger ml-3" type="reset" value="重置">返回</button> -->
                  </div>
                </div>
              </form>
            </div>
          </div>
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