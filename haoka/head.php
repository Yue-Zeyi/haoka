<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="other/avatar.jpg" width="30" height="30" alt="">
    号卡推广管理平台
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
        <a href="addSort.php" class="btn btn-primary rounded-0 col">添加类目</a>
      </div>
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
          <a href="sort.php" class="text-decoration-none text-secondary">
            <i class="iconfont icon-neirongguanli pr-1"></i>类目管理
          </a>
        </li>
        <li class="list-group-item list-group-item-action">
          <a href="list.php" class="text-decoration-none text-secondary">
            <i class="iconfont icon-neirongguanli pr-1"></i>产品管理
          </a>
        </li>
        <li class="list-group-item list-group-item-action">
          <a href="system.php" class="text-decoration-none text-secondary">
            <i class="iconfont icon-zhanghuguanli pr-1"></i>客服配置
          </a>
        </li>
      </div>
    </div>