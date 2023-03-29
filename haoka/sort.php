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

    <?php require_once('head.php'); ?>
    <div class="col-10">
      <div class="p-3 border mb-3 bg-white d-flex justify-content-between">
        <h4>运营商类目管理
        </h4>
        <a href="loginout.php" class="text-dark text-decoration-none"><i class="iconfont icon-tuichu pr-1"></i>退出</a>
      </div>
      <div class="row mt-3">
        <div class="col">
          <div class="card">
            <div class="card-header bg-primary text-white d-flex justify-content-between">
              <h6 class="mb-0 align-self-center">类目列表</h6>
            </div>
            <div class="card-body">
              <form name="form1" id="form1" method="post" action="doSort.php">
                <table class="table table-striped text-center ">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>名称</th>
                      <th>别名</th>
                      <th>排序</th>
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
                        ?> <tr>
                            <td><?php echo $sortrow["id"] ?></td>
                            <td><?php echo $sortrow["yys"] ?></td>
                            <td><?php echo $sortrow["yysabbr"] ?></td>
                            <td><?php echo $sortrow["sortid"] ?></td>
                            <td style="width:150px;">
                              <a href=upSort.php?id=<?php echo $sortrow['id'] ?> class="btn btn-success btn-sm">修改</a>
                              <a href="deSort.php?id=<?php echo $sortrow['id'] ?>" onclick=" return del()" class="btn btn-danger btn-sm">删除</a>
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

<?php
  } else {
    echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
  }
?>

</html>