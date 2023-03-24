<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>添加产品-号卡推广管理平台</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1658828_vud4w73neg.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
  <?php
  session_start();
  if (isset($_SESSION["username"])) {
  ?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="other/avatar.jpg" width="30" height="30" alt="">
        号卡推广管理平台
      </a>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="user.php" id="navbarDropdown" data-toggle="dropdown">
            个人中心
          </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid vh-100">
      <div class="row h-100">
        <div class="col-2 bg-white border-right nav-left p-0">
          <div class="row text-center mt-3 px-5">
            <a href="add.php" class="btn btn-primary rounded-0 col">添加产品</a>
          </div>
          <div class="list-group list-group-flush border-top border-bottom mt-3 text-center">
            <li class="list-group-item list-group-item-action">
              <a href="index.php" class="text-decoration-none text-secondary">
                <i class="iconfont icon-home pr-1"></i>管理首页
              </a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="list.php" class="text-decoration-none text-secondary">
                <i class="iconfont icon-neirongguanli pr-1"></i>产品管理
              </a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="system.php" class="text-decoration-none text-secondary">
                <i class="iconfont icon-zhanghuguanli pr-1"></i>系统管理
              </a>
            </li>
          </div>
        </div>
        <div class="col-10">
          <div class="p-3 border mb-3 bg-white d-flex justify-content-between">
            <h4>号卡产品管理
            </h4>
            <a href="loginout.php" class="text-dark text-decoration-none"><i class="iconfont icon-tuichu pr-1"></i>退出</a>
          </div>
          <div class="row mt-3">
            <div class="col">
              <div class="card">
                <div class="card-header bg-primary text-white d-flex justify-content-between">
                  <h6 class="mb-0 align-self-center">产品列表</h6>
                </div>
                <div class="card-body">
                  <form name="form1" id="form1" method="post" action="deleteall.php">
                    <table class="table table-striped text-center ">
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
                              <th colspan="2">ID</th>
                              <th>名称</th>
                              <th>介绍</th>
                              <th>主图</th>
                              <th>运营商</th>
                              <th>时长</th>
                              <th>下单地址</th>
                              <th>操作</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($data)) {
                            ?>
                              <tr>
                                <td style="width:50px;">
                                  <input type="checkbox" name="chk[]" id="chk" value="<?php echo $row["id"]; ?>" /> <?php echo $row["id"] ?>
                                </td>
                                <td>
                                </td>
                                <td><?php echo $row["name"] ?>
                                </td>
                                <td><?php echo $row["jieshao"] ?>
                                </td>
                                <td><img src="<?php echo $row["zhutu"] ?>" alt="" style="width:60px;">
                                </td>
                                <td style="width:100px;"><?php echo $row["yys"] ?>
                                </td>
                                <td><?php echo $row["ltime"] ?>
                                </td>
                                <td><?php echo $row["link"] ?></td>
                                <td style="width:150px;">
                                  <a href=update.php?id=<?php echo $row['id'] ?> class="btn btn-success btn-sm">修改</a>
                                  <a href="delete.php?id=<?php echo $row['id'] ?>" onclick=" return del()" class="btn btn-danger btn-sm">删除</a>
                                </td>
                              </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="5"><a href="" class="btn btn-info btn-sm" onclick="return chek()">全选/取消</a> &nbsp;&nbsp;<input type="submit" onclick="return del();" class="btn btn-warning btn-sm" value="删除选择" /></td>
                              <td colspan="3">
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
                            ?></td>
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

</body>
<script src="js/public.js"></script>
<?php
  } else {
    echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
  }
?>

</html>