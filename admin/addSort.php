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
            <h4>添加分类</h4>
          </div>
          <div class="card-body">
            <form action="controller/tianjiaSort.php" method="POST">
              <div class="input-group m-b-10">
                <label class="input-group-addon" for="yys" id="basic-addon1">名称</label>
                <input type="text" class="form-control" name="yys" placeholder="请输入运营商名称" required>
              </div>
              <div class="input-group m-b-10">
                <span class="input-group-addon" for="yysabbr" id="basic-addon1">缩写</span>
                <input type="text" class="form-control" name="yysabbr" placeholder="请输入运营商英文缩写" required>
              </div>
              <div class="input-group m-b-10">
                <span class="input-group-addon" for="sortid" id="basic-addon1">序号</span>
                <input type="number" class="form-control" name="sortid" placeholder="填写数字，数值越大越靠前" required>
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