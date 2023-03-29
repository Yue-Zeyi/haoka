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
    $data = mysqli_query($con, "select * from list where id=" . $id);
    $rows = mysqli_fetch_row($data);
    ?>
    <?php require_once('head.php'); ?>
    <div class="col-10">
        <div class="p-3 border mb-3 bg-white">
            <h4 class="mb-0">产品修改</h4>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between">
                        <h6 class="mb-0 align-self-center">产品修改</h6>
                    </div>
                    <div class="card-body">
                        <form action="doUpdate.php" method="POST">
                            <div class="form-row">
                                <label for="title" class="col-2 text-center col-form-label">名称：</label>
                                <input type="text" class="col-8 form-control" name="name" placeholder="请输入产品名称" value="<?php echo $rows[1] ?>" required>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <label for="title" class="col-2 text-center col-form-label">介绍：</label>
                                <input type="text" class="col-8 form-control" name="jieshao" placeholder="请输入产品简短介绍" value="<?php echo $rows[2] ?>" required>
                                <span class=" col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <label for="title" class="col-2 text-center col-form-label">时长：</label>
                                <input type="text" class="col-8 form-control" name="ltime" placeholder="套餐时长,建议四个字" value="<?php echo $rows[4] ?>" required>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <label for="category_id" class="col-2 text-center col-form-label">运营商：</label>
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
                                        <select name="yys" id="category_id" class="col-8 form-control">
                                            <?php
                                            while ($sortrow = mysqli_fetch_array($sortdata)) {
                                            ?>
                                                <option value="<?php echo $sortrow["yys"] ?>" name="yys" <?php echo $rows[5] == $sortrow["yys"]  ? 'selected' : '' ?>><?php echo $sortrow["yys"] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>
                                <?php
                                    }
                                }

                                ?>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>

                            </div>
                            <div class="form-row mt-3">
                                <label for="title" class="col-2 text-center col-form-label">主图链接：</label>
                                <input type="text" class="col-8 form-control" name="zhutu" placeholder="主图URL地址" value="<?php echo $rows[3] ?>" required>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <label for="title" class="col-2 text-center col-form-label">下单链接：</label>
                                <input type="text" class="col-8 form-control" name="link" value="<?php echo $rows[7] ?>" placeholder="请输入下单地址" required>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <label for="title" class="col-2 text-center col-form-label">排序：</label>
                                <input type="text" class="col-8 form-control" name="xuhao" value="<?php echo $rows[6] ?>" placeholder="填写数字，数值越大越靠前" required>
                                <span class="col-2 col-form-label text-danger">* 必填项</span>
                            </div>
                            <div class="form-row mt-3">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <div class="offset-2">
                                    <button class="btn btn-success" type="submit" value="添加">确认修改</button>
                                    <!-- <button class="btn btn-danger ml-3" type="reset" value="重置">返回</button> -->
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