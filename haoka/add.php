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

        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <h6 class="mb-0 align-self-center">添加产品</h6>
                    </div>
                    <div class="card-body">
                        <form action="tianjia.php" method="POST">
                            <div class="form-row">
                                <label for="title" class="col-2 text-center col-form-label">名称：</label>
                                <input type="text" class="col-8 form-control" name="name" placeholder="请输入产品名称" required>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <label for="title" class="col-2 text-center col-form-label">介绍：</label>
                                <input type="text" class="col-8 form-control" name="jieshao" placeholder="请输入产品简短介绍" required>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <label for="title" class="col-2 text-center col-form-label">时长：</label>
                                <input type="text" class="col-8 form-control" name="ltime" placeholder="套餐时长,建议四个字" required>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <?php
                                include_once("../untils/conn.php");
                                mysqli_query($con, "set names utf8");
                                if ($con) {
                                    //选择数据库
                                    if ($db) {
                                        //获取数据总行数
                                        $sortsql = "select * from sort";
                                        $sortdata = mysqli_query($con, $sortsql);
                                ?>
                                        <label for="category_id" class="col-2 text-center col-form-label">运营商：</label>
                                        <select name="yys" id="category_id" class="col-8 form-control">
                                            <?php
                                            while ($sortrow = mysqli_fetch_array($sortdata)) {
                                            ?>
                                                <option value="<?php echo $sortrow["yys"] ?>" name="<?php echo $sortrow["yys"] ?>"><?php echo $sortrow["yys"] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                        <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                    <?php
                                    }
                                }

                    ?>
                    <div class="form-row mt-3">
                        <label for="title" class="col-2 text-center col-form-label">归属地：</label>
                        <input type="text" class="col-8 form-control" name="gsd" placeholder="请输入号卡归属地" required>
                        <span class="col-2 col-form-label text-danger">* 必填项</span>
                    </div>
                    <div class="form-row mt-3">
                        <label for="title" class="col-2 text-center col-form-label">选号方式：</label>
                        <input type="text" class="col-8 form-control" name="xuanhao" placeholder="请输入选号方式（激活选号/选号下单/随机号码）" required>
                        <span class="col-2 col-form-label text-danger">* 必填项</span>
                    </div>
                    <div class="form-row mt-3">
                        <label for="title" class="col-2 text-center col-form-label">包邮方式：</label>
                        <input type="text" class="col-8 form-control" name="baoyou" placeholder="可输入全国免费包邮/京东物流等" required>
                        <span class="col-2 col-form-label text-danger">* 必填项</span>
                    </div>
                    <div class="form-row mt-3">
                        <label for="title" class="col-2 text-center col-form-label">主图链接：</label>
                        <input type="text" class="col-8 form-control" name="zhutu" placeholder="主图URL地址" required>
                        <span class="col-2 col-form-label text-danger">* 必填项</span>
                    </div>
                    <div class="form-row mt-3">
                        <label for="title" class="col-2 text-center col-form-label">下单链接：</label>
                        <input type="text" class="col-8 form-control" name="link" placeholder="请输入下单地址" required>
                        <span class="col-2 col-form-label text-danger">* 必填项</span>
                    </div>
                    <div class="form-row mt-3">
                        <label for="title" class="col-2 text-center col-form-label">排序：</label>
                        <input type="text" class="col-8 form-control" name="xuhao" placeholder="填写数字，数值越大越靠前" required>
                        <span class="col-2 col-form-label text-danger">* 必填项</span>
                    </div>
                    <!--                                     <div class="form-row mt-3">
                                        <label for="content" class="col-2 text-center col-form-label">是否上架：</label>
                                        <div class="col-8 col-form-label">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="hot" name='hot'
                                                    value='1'>
                                                <label class="custom-control-label" for="hot"></label>
                                            </div>
                                        </div>
                                    </div> -->
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