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
                <a class="btn btn-primary m-r-5" href="add.php"><i class="mdi mdi-plus"></i> 新增产品</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form name="form1" id="form1" method="post" action="controller/deleteall.php">
                  <table class="table table-bordered">
                    <?php
                    include_once("../untils/conn.php");
                    mysqli_query($con, "set names utf8");
                    if ($con) {
                      if ($db) {
                        //获取数据总行数
                        $sql = "select * from list";
                        $data = mysqli_query($con, $sql);
                        $maxrows = mysqli_num_rows($data);
                        //计算总页数
                        $page_size = 10;  //每页显示数
                        if ($maxrows % $page_size == 0) {
                          $maxpage = (int)($maxrows / $page_size);
                        } else {
                          $maxpage = (int)($maxrows / $page_size) + 1;
                        }
                        //获取当前页
                        if (isset($_GET['curpage'])) {
                          $page = $_GET['curpage'];
                        } else {
                          $page = 1;
                        }
                        //分段取出数据
                        $start = $page_size * ($page - 1);
                        $get_sql = "select * from list limit $start,$page_size";
                        //得到数据显示
                        $data = mysqli_query($con, $get_sql);
                    ?>
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>名称</th>
                            <th>介绍</th>
                            <th>主图</th>
                            <th>运营商</th>
                            <th>时长</th>
                            <th>包邮</th>
                            <th>归属地</th>
                            <th>排序</th>
                            <th>下单地址</th>
                            <th>操作</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          while ($row = mysqli_fetch_array($data)) {
                          ?>
                            <tr>
                              <td style="width:5%;">
                                <?php echo $row["id"] ?>
                              </td>
                              <td style="width:10%;"><?php echo $row["name"] ?>
                              </td>
                              <td style="width:10%;"><?php echo $row["jieshao"] ?>
                              </td>
                              <td style="width:10%;"><img src="<?php echo $row["zhutu"] ?>" alt="" style="width:60px;">
                              </td>
                              <td style="width:10%;"><?php echo $row["yys"] ?>
                              </td>
                              <td style="width:10%;"><?php echo $row["ltime"] ?>
                              </td>
                              <td style="width:10%;"><?php echo $row["baoyou"] ?>
                              </td>
                              <td style="width:7.5%;"><?php echo $row["gsd"] ?>
                              </td>
                              <td style="width:7.5%;"><?php echo $row["xuhao"] ?>
                              </td>
                              <!-- 上下架按钮 
                                <td>
                                  <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" value="1">
                                    <label class="custom-control-label"></label>
                                  </div>
                                </td> -->
                              <td><?php echo $row["link"] ?></td>
                              <td style="width:15%;">
                                <a href=update.php?id=<?php echo $row['id'] ?> class="btn btn-success btn-sm">修改</a>
                                <a href="controller/delete.php?id=<?php echo $row['id'] ?>" onclick=" return del()" class="btn btn-danger btn-sm">删除</a>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="12" style="text-align: right;">
                          <?php
                          echo "<p>共 $maxpage 页&nbsp;&nbsp;";
                          echo "每页 $page_size 项&nbsp;&nbsp;";
                          //设置上一页
                          if ($page > 1) {
                            $prepage = $page - 1;
                            echo "<a href='?curpage=$prepage'>上一页</a>&nbsp;&nbsp;";
                          }
                          //设置下一页
                          if ($page < $maxpage) {
                            $nextpage = $page + 1;
                            echo "<a href='?curpage=$nextpage'>下一页</a>&nbsp;&nbsp;";
                          }
                          echo "&nbsp;&nbsp;第 $page 页</p>";
                        }
                      }
                          ?>
                            </td>
                          </tr>
                        </tfoot>
                  </table>
                </form>
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
