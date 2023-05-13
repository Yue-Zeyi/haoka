<?php
session_start();
if (isset($_SESSION["username"])) {
?>
  <?php require_once('common/header.php'); ?>
  <!--页面主要内容-->
  <main class="lyear-layout-content">
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary">
            <h4>新增用户</h4>
          </div>
          <div class="card-body">
            <form action="controller/tianjiaUser.php" method="POST">
              <div class="input-group m-b-10">
                <label class="input-group-addon" id="basic-addon1">账号</label>
                <input type="text" class="form-control" name="username" placeholder="请输入账号" required>
              </div>
              <div class="input-group m-b-10">
                <span class="input-group-addon" id="basic-addon1">密码</span>
                <input type="text" class="form-control" name="password" placeholder="请输入密码" required>
              </div>
              <div class="input-group m-b-10">
                <span class="input-group-addon" id="basic-addon1">姓名</span>
                <input type="text" class="form-control" name="uname" placeholder="请输入姓名" required>
              </div>
              <div class="input-group m-b-10">
                <span class="input-group-addon" id="basic-addon1">手机号</span>
                <input type="number" class="form-control" name="phone" placeholder="请输入用户手机号" required>
              </div>
              <div class="form-row mt-3">
                <div class="offset-2">
                  <button class="btn btn-success" type="submit" value="添加">立即添加</button>
                  <button class="btn btn-danger" type="reset" value="重置">信息重置</button>
                </div>
              </div>
            </form>
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