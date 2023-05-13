<?php
session_start();
if (isset($_SESSION["uid"])) {
?>
  <style>
    .dataTables_info {
      visibility: hidden;
      display: none;
    }

    .dataTables_filter {
      visibility: hidden;
      display: none;
    }

    .dataTables_length,
    .dataTables_info,
    .dataTables_paginate {
      float: left;
      /* 将分页选项和页码向左浮动 */
    }

    .paginate_button {
      margin-right: 5px;
    }

    .dataTables_paginate {
      float: right;
      margin-left: 10px;
      /* 增加一些左侧间距 */
    }

    /* 修改分页按钮的颜色和字体大小 */
    .dataTables_paginate .paginate_button {
      color: #333;
      font-size: 16px;
      padding-left: 5px;
      padding-right: 5px;
    }

    /* 修改当前页按钮的背景色 */
    .dataTables_paginate .paginate_button.current {
      background-color: #33cabb;
      color: #fff;
    }


    /* 改变下拉框背景色、边框和圆角 */
    .dataTables_length select {
      background-color: #ffffff;
      border: 1px solid #cccccc;
      border-radius: 4px;
    }

    /* 去掉下拉箭头 */
    .dataTables_length select::-ms-expand {
      display: none;
    }

    .dataTables_length select::-webkit-scrollbar {
      width: 12px;
    }

    .dataTables_length select::-webkit-scrollbar-thumb {
      background-color: #cccccc;
      border-radius: 10px;
    }

    .dataTables_length select::-webkit-scrollbar-track {
      background-color: #f5f5f5;
      border-radius: 10px;
    }
  </style>
  <?php require_once('common/header.php'); ?>
  <!--页面主要内容-->
  <main class="lyear-layout-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-toolbar clearfix">
              <div class="input-group pull-right search-bar">
                <span class="input-group-addon" id="basic-addon1">搜索</span>
                <input type="text" class="form-control" id="search-input" placeholder="请输入搜索内容">
              </div>
              <div class="toolbar-btn-action">
                <a class="btn btn-primary m-r-5" href="add.php"><i class="mdi mdi-plus"></i> 新增产品</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form name="form1" id="form1" method="post" action="controller/deleteall.php">
                  <table class="table table-bordered" id="my-table">
                    <?php
                    include_once("../untils/conn.php");
                    mysqli_query($con, "set names utf8");
                    $uid = $_SESSION["uid"];
                    if ($con) {
                      if ($db) {
                        $get_sql = "select * from list where uid=$uid ";
                        //得到数据显示
                        $data = mysqli_query($con, $get_sql);
                    ?>
                        <thead>
                          <tr>
                            <th>ID</th>
                            <!-- <th>名称</th> -->
                            <th>介绍</th>
                            <th>主图</th>
                            <th>运营商</th>
                            <th>时长</th>
                            <th>包邮</th>
                            <th>归属地</th>
                            <th>排序</th>
                            <th>上架</th>
                            <!-- <th>下单地址</th> -->
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
                              <!-- <td style="width:10%;"><?php echo $row["jieshao"] ?> -->
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
                              <!-- 上下架按钮 -->
                              <td>
                                <label class="lyear-switch switch-solid switch-primary">
                                  <input rel="<?php echo $row["id"] ?>" onclick="sta(<?php echo $row['id'] ?>)" type="checkbox" <?php echo $row["status"] == 1 ? 'checked' : ' ' ?>>
                                  <span></span>
                                </label>
                              </td>
                              <!-- <td><?php echo $row["link"] ?></td> -->
                              <td style="width:15%;">
                                <a href=update.php?id=<?php echo $row['id'] ?>&&uid=<?php echo $uid ?> class="btn btn-success btn-sm">修改</a>
                                <a href="controller/delete.php?id=<?php echo $row['id'] ?>" onclick=" return del()" class="btn btn-danger btn-sm">删除</a>
                              </td>
                            </tr>
                      <?php
                          }
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
  </main>
  <script script src="https://cdn.staticfile.org/jquery/3.6.4/jquery.min.js">
  </script>
  <script>
    // 点击按钮，发送ajax请求，显示数据到页面
    function sta(id) {
      console.log(id);
      $.get('controller/switch.php', {
        id: id,
      })
    };
  </script>
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
  <script>
    $(document).ready(function() {
      $('#ttfoot').append($('.dataTables_paginate'));
      $('#my-table').each(function() {
        var table = $(this);
        var footer = table.find('tfoot');

        if (table.find('tbody tr').length > 10) {
          footer.show();
          table.find('.dataTables_paginate').appendTo(footer);
        } else {
          footer.hide();
        }
      });
      // 初始化Datatables
      var table = $('#my-table').DataTable({
        "paging": true, // 开启分页
        "ordering": true, // 开启排序
        "searching": true, // 开启搜索
        "pagingType": "first_last_numbers", // 使用完整分页样式
        "dom": '<"top"i>rt<"bottom"flp>',
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Chinese.json"
        },

      });
      // 监听输入框的键盘事件，每次按键都动态更新表格以显示匹配的结果
      $('#search-input').keyup(function() {
        table.search($(this).val()).draw();
      });
    });
  </script>
  <!--End 页面主要内容-->
  <?php require_once('common/footer.php'); ?>
<?php
} else {
  echo "<script>alert('您尚未登录，没有权限访问该页面');location.href='login.php';</script>";
}
