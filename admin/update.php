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
            $data = mysqli_query($con, "select * from list where id=" . $id);
            $rows = mysqli_fetch_row($data);
            ?>
            <div class="card">
                <div class="card-header bg-primary">
                    <h4>添加产品</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="controller/doUpdate.php" method="POST">
                        <div class="form-group">
                            <label for="title" class="col-xs-12">名称：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="name" placeholder="请输入产品名称" value="<?php echo $rows[1] ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-12">介绍：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="jieshao" placeholder="请输入产品简短介绍" value="<?php echo $rows[2] ?>" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-12">时长：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="ltime" placeholder="套餐时长,建议四个字" value="<?php echo $rows[4] ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">运营商：</label>
                            <div class="col-xs-12">
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
                                        <select name="yys" id="yys" class="form-control">
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
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-12">归属地：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="gsd" placeholder="请输入号卡归属地" value="<?php echo $rows[8] ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-12">选号方式：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="xuanhao" placeholder="请输入选号方式（激活选号/选号下单/随机号码）" value="<?php echo $rows[9] ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-12">快递方式：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="baoyou" placeholder="可输入全国免费包邮/京东物流等" value="<?php echo $rows[10] ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-12">主图链接：</label>
                            <div class="col-xs-12">
                                <input type="url" class="form-control" name="zhutu" placeholder="主图URL地址" value="<?php echo $rows[3] ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-12">下单链接：</label>
                            <div class="col-xs-12">
                                <input type="url" class="form-control" name="link" value="<?php echo $rows[7] ?>" placeholder="请输入下单地址" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-12">排序：</label>
                            <div class="col-xs-12">
                                <input type="number" class="form-control" name="xuhao" value="<?php echo $rows[6] ?>" placeholder="填写数字，数值越大越靠前" required>
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
