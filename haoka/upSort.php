<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>添加产品</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1658828_vud4w73neg.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">

  <?php
  include_once("../untils/conn.php");
  $id = $_GET['id'];
  $data = mysqli_query($con, "select * from sort where id=" . $id);
  $rows = mysqli_fetch_row($data);
  ?>
  <?php require_once('head.php'); ?>
  <div class="col-10">
    <div class="p-3 border mb-3 bg-white">
      <h4 class="mb-0">产品类目修改</h4>
    </div>
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="card-header bg-primary text-white d-flex justify-content-between">
            <h6 class="mb-0 align-self-center">修改类目</h6>
          </div>
          <div class="card-body">
            <form action="doSort.php" method="POST">
              <div class="form-row">
                <label for="title" class="col-2 text-center col-form-label">名称：</label>
                <input type="text" class="col-8 form-control" name="yys" placeholder="请输入运营商名称" value="<?php echo $rows[1] ?>" required>
                <span class="col-2 col-form-label text-danger">* 必填项</span>
              </div>
              <div class="form-row mt-3">
                <label for="title" class="col-2 text-center col-form-label">缩写：</label>
                <input type="text" class="col-8 form-control" name="yysabbr" placeholder="请输入运营商英文缩写" value="<?php echo $rows[2] ?>" required>
                <span class=" col-2 col-form-label text-danger">* 必填项</span>
              </div>
              <div class="form-row mt-3">
                <label for="title" class="col-2 text-center col-form-label">序号：</label>
                <input type="text" class="col-8 form-control" name="sortid" placeholder="填写数字，数值越大越靠前" value="<?php echo $rows[3] ?>" required>
                <span class=" col-2 col-form-label text-danger">* 必填项</span>
              </div>
              <div class="form-row mt-3">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="offset-2">
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


</body>


</html>