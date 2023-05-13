<?php
session_start();
if (isset($_SESSION["uid"])) {
?>
    <?php require_once('common/header.php'); ?>
    <!--页面主要内容-->
    <main class="lyear-layout-content">
        <div class="container-fluid">
            <div class="row">
                <?php
                include_once("../untils/conn.php");
                mysqli_query($con, "set names utf8");
                $uid = $_SESSION['uid'];
                if ($con) {
                    if ($db) {
                        //获取数据总行数
                        $sortsql = "select count(*) from sort where uid=$uid";
                        $sortdata = mysqli_query($con, $sortsql);
                        $sortresult = mysqli_fetch_row($sortdata);
                        $listsql = "select count(*) from list where uid=$uid";
                        $listdata = mysqli_query($con, $listsql);
                        $listresult = mysqli_fetch_row($listdata);
                        $sql = "select * from list where uid=$uid limit 0,8";
                        $data = mysqli_query($con, $sql);
                        $yyssql = "select * from sort where uid=$uid ORDER BY sortid DESC LIMIT 1 ";
                        $yysdata = mysqli_query($con, $yyssql);
                        $yysresult = mysqli_fetch_row($yysdata);
                        $yysid = $yysresult['0'];
                    }
                }
                ?>

                <div class="col-sm-12 col-lg-12">
                    <div class="card bg-purple">
                        <div class="card-body clearfix">
                            <div class="pull-left">
                                <p class="h2  text-white m-t-0">站点访问地址</p>
                                <p class="text-white m-b-0"><a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/kacenter.php?uid=<?php echo $uid ?>&yys=<?php echo $yysid ?>" style="color:white;text-decoration: underline;font-weight: 500;" target="_blank"> http://<?php echo $_SERVER['HTTP_HOST'] ?>/kacenter.php?uid=<?php echo $uid ?>&yys=<?php echo $yysid ?> </a></p>
                            </div>
                            <div class="pull-right">

                                <p class="text-white m-b-0"><span class="h4 text-white m-t-0"> 站点二维码入口： </span><img style="width: 80px;" src="https://api.pwmqr.com/qrcode/create/?url=http://<?php echo $_SERVER['HTTP_HOST'] ?>/kacenter.php?uid=<?php echo $uid ?>&yys=<?php echo $yysid ?>" alt=""></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="card bg-success">
                        <div class="card-body clearfix">
                            <div class="pull-right">
                                <p class="h4 text-white m-t-0">产品分类</p>
                                <p class="h3 text-white m-b-0">共 <?php echo $sortresult[0] ?> 个</p>
                            </div>
                            <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-cube fa-1-5x"></i></span> </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="card bg-danger">
                        <div class="card-body clearfix">
                            <div class="pull-right">
                                <p class="h4  text-white m-t-0">产品数量</p>
                                <p class="h3 text-white m-b-0">共 <?php echo $listresult[0] ?> 个</p>
                            </div>
                            <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-apps fa-1-5x"></i></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>产品列表</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>产品名称</th>
                                            <th>包邮方式</th>
                                            <th>优惠时长</th>
                                            <th>产品分类</th>
                                            <th>产品标签</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row["id"] ?></td>
                                                <td><?php echo $row["name"] ?></td>
                                                <td><?php echo $row["baoyou"] ?></td>
                                                <td><?php echo $row["ltime"] ?></td>
                                                <td><?php echo $row["yys"] ?></td>
                                                <td>
                                                    <?php echo $row["gsd"] ?>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
?>