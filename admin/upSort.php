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
      $id = $_GET['id'];
      $data = mysqli_query($con, "select * from sort where id=" . $id);
      $rows = mysqli_fetch_row($data);
      ?>

      <div class="card">
        <div class="card-header bg-primary">
          <h4>分类修改</h4>
        </div>
        <div class="card-body">
          <form class="form-horizontal" action="controller/doSort.php" method="POST">
            <div class="form-group">
              <label class="col-xs-12">名称：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="yys" placeholder="请输入运营商名称" value="<?php echo $rows[1] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-xs-12">缩写：</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="yysabbr" placeholder="请输入运营商英文缩写" value="<?php echo $rows[2] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-xs-12">序号：</label>
              <div class="col-xs-12">
                <input type="number" class="form-control" name="sortid" placeholder="填写数字，数值越大越靠前" value="<?php echo $rows[3] ?>" required>
              </div>
            </div>
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <div class="offset-2 col-xs-12">
                <button class="btn btn-success" type="submit" value="添加">确认修改</button>
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
?>