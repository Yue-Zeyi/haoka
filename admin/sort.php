<?php
session_start();
if (isset($_SESSION["username"])) {
?>
  <?php require_once('common/header.php'); ?>
  <!--页面主要内容-->
  <main class="lyear-layout-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-toolbar clearfix">
              <form class="pull-right search-bar" method="get" action="#!" role="form">
                <div class="input-group">
                  <div class="input-group-btn">
                    <input type="hidden" name="search_field" id="search-field" value="title">
                    <button class="btn btn-default dropdown-toggle" id="search-btn" data-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                      标题 <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li> <a tabindex="-1" href="javascript:void(0)" data-field="title">标题</a> </li>
                      <li> <a tabindex="-1" href="javascript:void(0)" data-field="cat_name">栏目</a> </li>
                    </ul>
                  </div>
                  <input type="text" class="form-control" value="" name="keyword" placeholder="请输入名称">
                </div>
              </form>
              <div class="toolbar-btn-action">
                <a class="btn btn-primary m-r-5" href="addSort.php"><i class="mdi mdi-plus"></i> 新增类目</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form name="form1" id="form1" method="post" action="controller/doSort.php">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>编号</th>
                        <th>名称</th>
                        <th>别名</th>
                        <th>序号</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include_once("../untils/conn.php");
                      mysqli_query($con, "set names utf8");
                      $yysname = $_GET['yys'];
                      if ($con) {
                        //选择数据库
                        if ($db) {
                          $id = $_GET['id'];
                          //获取数据总行数
                          $sql = "select * from list  where yys='$yysname' ORDER BY xuhao DESC";
                          $sortsql = "select * from sort";
                          $data = mysqli_query($con, $sql);
                          $sortdata = mysqli_query($con, $sortsql);
                      ?>
                          <?php
                          while ($sortrow = mysqli_fetch_array($sortdata)) {
                          ?>
                            <tr>
                              <td><?php echo $sortrow["id"] ?></td>
                              <td><?php echo $sortrow["yys"] ?></td>
                              <td><?php echo $sortrow["yysabbr"] ?></td>
                              <td><?php echo $sortrow["sortid"] ?></td>
                              <td>

                                <a class="btn btn-success btn-sm" href=upSort.php?id=<?php echo $sortrow['id'] ?>>修改</a>
                                <a class="btn btn-danger btn-sm" href="controller/deSort.php?id=<?php echo $sortrow['id'] ?>" onclick=" return del()">删除</a>

                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
      <script language="javascript">
        //删除弹出确认框
        function del() {
          if (confirm("确认删除吗？")) {
            return true;
          } else {
            return false;
          }
        }

        function chek() {
          var leng = this.form1.chk.length;
          if (leng == undefined) {
            leng = 1;
            if (!form1.chk.checked)
              document.chk.checked = true;
            else
              document.form1.chk.checked = false;
          } else {
            for (var i = 0; i < leng; i++) {
              if (!form1.chk[i].checked)
                document.form1.chk[i].checked = true;
              else
                document.form1.chk[i].checked = false;
            }
          }
          return false;
        }
      </script>
    </div>
  </main>
  <!--End 页面主要内容-->
  <?php require_once('common/footer.php'); ?>
<?php
} else {
  echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
}
?>