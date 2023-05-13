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
      $uid = $_GET['uid'];
      $data = mysqli_query($con, "select * from user where uid=" . $uid);
      $rows = mysqli_fetch_row($data);
      ?>
      <div class="card">
        <div class="card-header bg-primary">
          <h4>用户信息修改</h4>
        </div>
        <div class="card-body">
          <form class="form-horizontal" action="controller/doUlist.php" method="POST">
            <div class="form-group">
              <label for="title" class="col-xs-12">账号：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="username" placeholder="请输入产品名称" value="<?php echo $rows[1] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-xs-12">密码：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="password" placeholder="请输入产品简短介绍" value="<?php echo $rows[2] ?>" required>

              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-xs-12">姓名：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="name" placeholder="套餐时长,建议四个字" value="<?php echo $rows[3] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-xs-12">手机号：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="phone" placeholder="请输入号卡归属地" value="<?php echo $rows[4] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <input type="hidden" name="uid" value="<?php echo $uid ?>">
              <div class="offset-2 col-xs-12">
                <button class="btn btn-success" type="submit" value="添加">确认修改</button>
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


    </div>
  </main>
  <!--End 页面主要内容-->
  <?php require_once('common/footer.php'); ?>
<?php
} else {
  echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
}
