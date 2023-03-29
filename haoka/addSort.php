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

  <?php require_once('head.php'); ?>
  <div class="col-10">
    <div class="p-3 border mb-3 bg-white d-flex justify-content-between">
      <h4>添加运营商类目
      </h4>
      <a href="loginout.php" class="text-dark text-decoration-none"><i class="iconfont icon-tuichu pr-1"></i>退出</a>
    </div>
    <div class="row mt-3">
      <div class="col">
        <div class="card">
          <div class="card-header bg-primary text-white d-flex justify-content-between">
            <h6 class="mb-0 align-self-center">添加类目</h6>
          </div>
          <div class="card-body">
            <form action="tianjiaSort.php" method="POST">
              <div class="form-row">
                <label for="title" class="col-2 text-center col-form-label">名称：</label>
                <input type="text" class="col-8 form-control" name="yys" placeholder="请输入运营商名称" required>
                <span class="col-2 col-form-label text-danger">* 必填项</span>
              </div>
              <div class="form-row mt-3">
                <label for="title" class="col-2 text-center col-form-label">缩写：</label>
                <input type="text" class="col-8 form-control" name="yysabbr" placeholder="请输入运营商英文缩写" required>
                <span class="col-2 col-form-label text-danger">* 必填项</span>
              </div>
              <div class="form-row mt-3">
                <label for="title" class="col-2 text-center col-form-label">序号：</label>
                <input type="text" class="col-8 form-control" name="sortid" placeholder="填写数字，数值越大越靠前" required>
                <span class="col-2 col-form-label text-danger">* 必填项</span>
              </div>
              <div class="form-row mt-3">
                <div class="offset-2">
                  <button class="btn btn-success" type="submit" value="添加">添加</button>
                  <button class="btn btn-danger ml-3" type="reset" value="重置">重置</button>
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