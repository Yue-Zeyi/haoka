<?php
session_start();
if (isset($_SESSION["uid"])) {
?>
  <?php require_once('common/header.php'); ?>
  <!--页面主要内容-->
  <main class="lyear-layout-content">
    <div class="container-fluid">

      <?php
      include_once("../untils/conn.php");
      $uid = $_SESSION["uid"];
      $sql = "select * from user where uid=$uid";
      $data = mysqli_query($con, $sql);
      $rows = mysqli_fetch_row($data);
      ?>

      <div class="card">
        <div class="card-header bg-primary">
          <h4>个人信息修改</h4>
        </div>
        <div class="card-body">
          <form action="controller/doUser.php" method="POST">
            <div class="input-group m-b-10">
              <label class="input-group-addon" id="basic-addon1">UID</label>
              <input type="text" class="form-control" name="uid" value="<?php echo $rows[0] ?>" readonly=" readonly" required>
            </div>
            <div class="input-group m-b-10">
              <label class="input-group-addon" id="basic-addon1">账号</label>
              <input type="text" class="form-control" name="username" value="<?php echo $rows['1'] ?>" readonly=" readonly" required>
            </div>
            <div class="input-group m-b-10">
              <label class="input-group-addon" id="basic-addon1">名称</label>
              <input type="text" class="form-control" name="name" placeholder="请输入新姓名" value="<?php echo $rows[3] ?>" required>
            </div>
            <div class="input-group m-b-10">
              <label class="input-group-addon" id="basic-addon1">手机</label>
              <input type="number" class="form-control" name="phone" placeholder="请输入新手机号" value="<?php echo $rows[4] ?>" required>
            </div>
            <div class="input-group m-b-10">
              <label class="input-group-addon" id="basic-addon1">密码</label>
              <input type="text" class="form-control" name="password" placeholder="请输入新密码" value="<?php echo $rows[2] ?>" required>
            </div>
            <div class="form-row mt-3">
              <div class="offset-2">
                <input type="hidden" name="uid" value="<?php echo $uid ?>">
                <button class="btn btn-success" type="submit">确认修改</button>
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
    </div>
  </main>
  <!--End 页面主要内容-->
  <?php require_once('common/footer.php'); ?>
<?php
} else {
  echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
}
?>