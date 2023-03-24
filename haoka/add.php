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
    //session_start();
    //if(isset($_SESSION["username"])){
    //
    ?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="other/avatar.jpg" width="30" height="30" alt="">
            号卡推广管理后台
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" href="user.php" id="navbarDropdown" data-toggle="dropdown">
                    个人中心
                </a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-2 bg-white border-right nav-left p-0">
                <div class="row text-center mt-3 px-5">
                    <a href="add.php" class="btn btn-primary rounded-0 col">添加产品</a>
                </div>
                <div class="list-group list-group-flush border-top border-bottom mt-3 text-center">
                    <li class="list-group-item list-group-item-action">
                        <a href="index.php" class="text-decoration-none text-secondary">
                            <i class="iconfont icon-home pr-1"></i>管理首页
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="list.php" class="text-decoration-none text-secondary">
                            <i class="iconfont icon-neirongguanli pr-1"></i>产品管理
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="system.php" class="text-decoration-none text-secondary">
                            <i class="iconfont icon-zhanghuguanli pr-1"></i>系统管理
                        </a>
                    </li>
                </div>
            </div>
            <div class="col-10">
                <div class="p-3 border mb-3 bg-white d-flex justify-content-between">
                    <h4>添加号卡产品
                    </h4>
                    <a href="loginout.php" class="text-dark text-decoration-none"><i class="iconfont icon-tuichu pr-1"></i>退出</a>
                </div>
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
                                        <label for="category_id" class="col-2 text-center col-form-label">运营商：</label>
                                        <select name="yys" id="category_id" class="col-8 form-control">
                                            <option value="中国电信" name="yys">中国电信</option>
                                            <option value="中国联通" name="yys">中国联通</option>
                                            <option value="中国移动">中国移动</option>
                                        </select>
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
<script src="js/public.js"></script>

</html>