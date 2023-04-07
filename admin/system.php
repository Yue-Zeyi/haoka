<?php
session_start();
if (isset($_SESSION["username"])) {
?>
  <?php require_once('common/header.php'); ?>
  <!--页面主要内容-->
  <main class="lyear-layout-content">
    <div class="container-fluid">
      <?php
      include_once("../untils/conn.php");
      $kefu = 'kefu';
      $sql = "select * from kefu where kefu='kefu'";
      $data = mysqli_query($con, $sql);
      $result = mysqli_fetch_row($data);
      ?>
      <div class="card">
        <div class="card-header bg-primary">
          <h4>信息配置</h4>
        </div>
        <div class="card-body">
          <form class="form-horizontal" action="controller/doSystem.php" method="POST">
            <div class="form-group">
              <label for="title" class="col-xs-12">二维码：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="qrcode" placeholder="请输入客服/公众号二维码链接" value="<?php echo $result[1] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-xs-12">微信号：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="kfwx" placeholder="请输入联系微信号" value="<?php echo $result[2] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-xs-12">在线时间：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="ontime" placeholder="请输入客服在线时间介绍" value="<?php echo $result[3] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-xs-12">公告题目：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="ggtitle" placeholder="请输入弹窗公告题目" value="<?php echo $result[4] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-xs-12">公告内容：</label>
              <div class="col-xs-12">
                <textarea class="form-control" id="example-textarea-input" name="shuoming" placeholder="请输入弹窗公告内\\n换行" required> <?php echo $result[5] ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-xs-12">订单查询：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="chaxun" placeholder="请输入订单查询链接" value="<?php echo $result[6] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <input type="hidden" name="kefu" value="<?php echo $kefu ?>">
              <div class="offset-2 col-xs-12">
                <button class="btn btn-success" type="submit" value="添加">确认修改</button>
                <!-- <button class="btn btn-danger ml-3" type="reset" value="重置">返回</button> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  <!--End 页面主要内容-->
  <?php require_once('common/footer.php'); ?>
<?php
} else {
  echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
}
