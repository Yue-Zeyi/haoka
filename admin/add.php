<?php
session_start();
if (isset($_SESSION["username"])) {
?>
    <?php require_once('common/header.php'); ?>
    <!--页面主要内容-->
    <main class="lyear-layout-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4>添加产品</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="controller/tianjia.php" method="POST">
                        <div class="form-group">
                            <label class="col-xs-12">名称：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="name" placeholder="请输入产品名称" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">介绍：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="jieshao" placeholder="请输入产品简短介绍" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">时长：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="ltime" placeholder="套餐时长,建议四个字" required>
                            </div>
                        </div>
                        <div class="form-group">
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
                                    <label class="col-xs-12">运营商：</label>
                                    <div class="col-xs-12">
                                        <select name="yys" id="yys" class="form-control">
                                            <?php
                                            while ($sortrow = mysqli_fetch_array($sortdata)) {
                                            ?>
                                                <option value="<?php echo $sortrow["yys"] ?>" name="<?php echo $sortrow["yys"] ?>"><?php echo $sortrow["yys"] ?></option>
                                            <?php
                                            }

                                            ?>
                                        </select>

                                    </div>

                            <?php
                                }
                            }

                            ?>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">归属地：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="gsd" placeholder="请输入号卡归属地" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">选号方式：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="xuanhao" placeholder="请输入选号方式（激活选号/选号下单/随机号码）" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">包邮方式：</label>
                            <div class="col-xs-12">
                                <input type="text" class="form-control" name="baoyou" placeholder="可输入全国免费包邮/京东物流等" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">主图链接：</label>
                            <div class="col-xs-12">
                                <input type="url" class="form-control" name="zhutu" placeholder="主图URL地址" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">下单链接：</label>
                            <div class="col-xs-12">
                                <input type="url" class="form-control" name="link" placeholder="请输入下单地址" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12">排序：</label>
                            <div class="col-xs-12">
                                <input type="number" class="form-control" name="xuhao" placeholder="填写数字，数值越大越靠前" required>

                            </div>
                        </div>
                        <!--                                     <div class="form-group">
                                        <label for="content" class="col-xs-12">是否上架：</label>
                                        <div class="col-form-label">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="hot" name='hot'
                                                    value='1'>
                                                <label class="custom-control-label" for="hot"></label>
                                            </div>
                                        </div>
                                    </div> -->
                        <div class="form-group">
                            <div class="offset-2 col-xs-12">
                                <button class="btn btn-success" type="submit" value="添加">添加</button>
                                <button class="btn btn-danger ml-3" type="reset" value="重置">重置</button>
                            </div>
                        </div>
                    </form>
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
?>