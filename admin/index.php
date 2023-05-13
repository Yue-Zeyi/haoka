<?php
session_start();
if (isset($_SESSION["username"])) {
?>
    <?php require_once('common/header.php'); ?>
    <!--页面主要内容-->
    <main class="lyear-layout-content">
        <div class="container-fluid">
            <div class="row">
                <?php
                include_once("../untils/conn.php");
                mysqli_query($con, "set names utf8");
                if ($con) {
                    if ($db) {
                        //获取数据总行数
                        $sortsql = "select count(*) from sort";
                        $sortdata = mysqli_query($con, $sortsql);
                        $sortresult = mysqli_fetch_row($sortdata);
                        $listsql = "select count(*) from list";
                        $listdata = mysqli_query($con, $listsql);
                        $listresult = mysqli_fetch_row($listdata);
                        $usersql = "select count(*) from user";
                        $userdata = mysqli_query($con, $usersql);
                        $userresult = mysqli_fetch_row($userdata);
                        $sql = "select * from list  limit 0,8";
                        $data = mysqli_query($con, $sql);
                    }
                }
                ?>
                <div class="col-sm-4 col-lg-4">
                    <div class="card bg-primary">
                        <div class="card-body clearfix">
                            <div class="pull-right">
                                <p class="h4 text-white m-t-0">产品分类</p>
                                <p class="h3 text-white m-b-0">共 <?php echo $sortresult[0] ?> 个</p>
                            </div>
                            <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-cube fa-1-5x"></i></span> </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4">
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

                <div class="col-sm-4 col-lg-4">
                    <div class="card bg-success">
                        <div class="card-body clearfix">
                            <div class="pull-right">
                                <p class="h4  text-white m-t-0">用户数量</p>
                                <p class="h3 text-white m-b-0"> <a href="https://github.com/Yue-Zeyi/haoka" style="text-decoration: none;color: white;" target="_blank">共 <?php echo $userresult[0] ?> 个</a> </p>
                            </div>
                            <div class="pull-left"> <span class="img-avatar img-avatar-48 bg-translucent"><i class="mdi mdi-account fa-1-5x"></i></span> </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>服务器信息</h4>
                            <!-- .card-actions -->
                        </div>
                        <div class="card-body">
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">PHP版本：</sapn>PHP <?php echo PHP_VERSION ?>
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">数据库版本：</sapn> MySql <?php
                                                                                                    include_once("../untils/conn.php");
                                                                                                    mysqli_query($con, "set names utf8");
                                                                                                    if (mysqli_connect_errno($con)) {
                                                                                                        echo "数据库连接失败: " . mysqli_connect_error();
                                                                                                    }
                                                                                                    echo mysqli_get_server_info($con);
                                                                                                    mysqli_close($con);
                                                                                                    ?>
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">系统环境：</sapn><?php echo PHP_OS ?>+<?php echo $_SERVER['SERVER_SOFTWARE'] ?>
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">服务器地址：</sapn><?php echo $_SERVER['SERVER_NAME'] . ' [ ' . gethostbyname($_SERVER['SERVER_NAME']) . ' ]' ?>
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">服务器剩余空间：</sapn><?php echo round((disk_free_space(".") / (1024 * 1024)), 2) . 'M' ?>
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">当前服务器时间：</sapn><?php echo date("Y年n月j日 H:i:s") ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>系统版本信息</h4>
                            <!-- .card-actions -->
                        </div>
                        <div class="card-body">
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">系统名称：</sapn>号卡推广管理系统
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">当前版本：</sapn><a href="https://github.com/Yue-Zeyi/haoka" style="text-decoration: none;color: #4d5259;" target="_blank">V1.5.2 | standard</a>
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">框架支持：</sapn>Light Year Admin
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">开发支持：</sapn><a href="http://www.yuezeyi.com/" target="_blank" style="text-decoration: none;color: #4d5259;">岳泽以</a>
                                <!-- 请保留版权，谢谢！ -->
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">网站目录：</sapn><?php echo $_SERVER["DOCUMENT_ROOT"] ?>
                            </p>
                            <p>
                                <sapn style="color: #2b2b2b; font-weight: 700;">本地时间：</sapn><?php echo gmdate("Y年n月j日 H:i:s", time() + 8 * 3600) ?>
                            </p>
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