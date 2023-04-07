<!DOCTYPE html>
<html lang="en">

<head>
  <title>号卡中心</title>
  <!-- meta信息，可维护 -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta content="telephone=no" name="format-detection" />
  <!-- ====必须设置 Start==== -->
  <!-- 页面编码 -->
  <meta charset="UTF-8" />
  <!--
        http-equiv常见还有其它如下等（合理使用可增加 SEO 收录）。
        Content-Language : 设置网页语言
        Refresh : 指定时间刷新页面
        set-cookie : 设定页面 cookie 过期时间
        last-modified : 页面最后生成时间
        expires : 设置 cache 过期时间
        cache-control : 设置文档的缓存机制
        ...
        -->
  <!-- 缓存与过期时间设置 -->
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="x-dns-prefetch-control" content="on">
  <meta http-equiv="Expires" content="0">
  <!-- dns预加载（SEO优化） -->
  <link rel="dns-prefetch" href="//css.cdn.com" />
  <link rel="dns-prefetch" href="//js.cdn.com" />
  <!-- 宽度默认100%全屏宽度，禁止手指缩放，初始缩放值1.0 -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <!-- ====必须设置 End==== -->
  <!-- ====根据使用配置Start==== -->
  <meta content="yes" name="apple-mobile-web-app-capable">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <!-- 不自动识别手机号,邮箱地址 -->
  <meta name="format-detection" content="telephone=no,email=no">
  <!-- 页面关键字优化 -->
  <meta name="keywords" content="H5页面通用配置">
  <!-- 页面标签icon配置 -->
  <link rel="icon" href="//icon.img.com/favicon.ico" type="image/x-icon">
  <!-- 一些国内webkit内核浏览器默认使用极速模式 -->
  <meta name="renderer" content="webkit">
  <!-- 避免IE使用兼容模式 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
  <meta name="HandheldFriendly" content="true">
  <!-- 微软的老式浏览器 -->
  <meta name="MobileOptimized" content="320">
  <!-- uc强制竖屏 -->
  <meta name="screen-orientation" content="portrait">
  <!-- QQ强制竖屏 -->
  <meta name="x5-orientation" content="portrait">
  <!-- UC强制全屏 -->
  <meta name="full-screen" content="yes">
  <!-- QQ强制全屏 -->
  <meta name="x5-fullscreen" content="true">
  <!-- UC应用模式 -->
  <meta name="browsermode" content="application">
  <!-- QQ应用模式 -->
  <meta name="x5-page-mode" content="app">
  <!-- windows phone 点击无高光 -->
  <meta name="msapplication-tap-highlight" content="no">
  <!-- apple-touch-icon：在webapp下，指定放置主屏幕上 icon 文件路径 -->
  <link rel="apple-touch-icon" href="touch-icon-iphone.png">
  <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">
  <!-- apple-touch-startup-image：在 webapp 下，设置启动时候的界面 -->
  <link rel="apple-touch-startup-image" href="/startup.png" />
  <!-- ====根据使用配置End==== -->
  <!-- ====几乎用不到 Start ==== -->
  <!--禁用IE8兼容模式（IE8兼容模式使用的是IE7的渲染方式）-->
  <meta http-equiv="X-UA-Compatible" content="IE=8" />
  <!--//设置内核为IE8，这里改变时，下面会自动改变-->
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
  <!--//设置渲染文档模式为IE8-->
  <!--使用IE8兼容模式-->
  <meta http-equiv="X-UA-Compatible" content="IE=7" />
  <!--//设置内核为IE7，这里改变时，下面会自动改变-->
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
  <!--//设置渲染文档模式为IE7-->
  <!-- 从左向右依次查询使用内核，左侧优先级高 -->
  <meta http-equiv="X-UA-Compatible" content="IE=11;IE=10;IE=9; IE=8;" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11;IE=EmulateIE10;IE=EmulateIE9;IE=EmulateIE8" />
  <!--chrome -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <style type="text/css">
    /*初始化设置*/
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      list-style: none;
      text-decoration: none;
      /*告诉浏览器最终展示的布局容器设置的边框和内边距的值是包含在width内的-即width和height等于真实大小*/
    }

    html,
    body {
      width: 100%;
      height: 100%;
    }

    .footer {
      /*随着滑动固定底部*/
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      /*设置底部菜单固定高度*/
      height: 60px;
      background-color: white;

    }

    .content {
      background-color: white;
      padding: 0;
      margin: 0;

    }

    .sidebar {
      height: 60px;
      line-height: 60px;
    }

    .footer ul {
      /*只给父容器添加了display: flex;属性，就可以让容器内部打破原有文档流模式，展现为弹性布局*/
      display: -webkit-flex;
      display: flex;
      text-align: center;
      width: 100%;

    }

    .footer ul li {
      width: 100%;
      /*浏览器的百分之百*/


    }

    /*a标签也设置填充宽高*/
    .footer ul li a {
      display: block;
      width: 100%;
      height: 100%;
      padding-top: 5px;
    }

    .footer ul li i,
    span {
      display: block;
      line-height: 30px;
      height: 30px;
    }
  </style>
</head>

<body>

  <div class="content">
    <?php
    include_once("untils/conn.php");
    mysqli_query($con, "set names utf8");
    if ($con) {
      //选择数据库
      if ($db) {
        //获取数据总行数
        $sql = "select * from `sort` order by `sortid` desc limit 1";
        $data = mysqli_query($con, $sql);
        $rows = mysqli_fetch_row($data);
        $index = $rows[1]
    ?>
        <iframe id="mainFrame" src="ka.php?yys=<?php echo $index ?>" style="border-width: 0px;width: 100vw;height: 92vh;overflow:visible;">
        </iframe>
    <?php
      }
    }
    ?>
  </div>
  <div class="sidebar"></div>

  <div class="footer">
    <ul>
      <li>
        <a onclick="index()">
          <p>
            <img style="width: 24px;" src="img/sy.png">
          </p>
          <span style="color: black;">首页</span>
        </a>
      </li>
      <li><a onclick="zxkf()">
          <p>
            <img style="width: 24px;" src="img/zxkf.png">
          </p>
          <span style="color: black;">在线客服</span>
        </a>
      </li>
      <li> <a onclick="gzgzh()">
          <p>
            <img style="width: 24px;" src="img/gzgzh.png">
          </p>
          <span style="color: black;">常见问题</span>
        </a>
      </li>
      <li><a onclick="cxzx()">
          <p>
            <img style="width: 24px;" src="img/cxzx.png">
          </p>
          <span style="color: black;">查询中心</span>
        </a>
      </li>
    </ul>
  </div>
</body>
<script src="https://cdn.bootcss.com/sweetalert/2.1.0/sweetalert.min.js">
</script>
<script>
  <?php
  include_once("untils/conn.php");
  $sql = "select * from kefu where kefu='kefu'";
  $data = mysqli_query($con, $sql);
  $result = mysqli_fetch_row($data);
  $php_jstitle =  $result['4'];
  $php_jstext =  $result['5'];
  echo "var jstitle='$php_jstitle';";
  echo "var jstext='$php_jstext';";
  ?>
  swal(jstitle, '\n' + jstext, 'success');

  function AddFavorite(title, url) {
    try {

      window.external.addFavorite(url, title);

    } catch (e) {

      try {

        window.sidebar.addPanel(title, url, );

      } catch (e) {

        alert("抱歉，您所使用的浏览器无法完成此操作。");

      }

    }

  }
</script>

<script>
  function index() {
    parent.location.reload();
  }

  function zxkf() {
    document.getElementById("mainFrame").src = "kf.php";
  }

  function gzgzh() {
    document.getElementById("mainFrame").src = "dl.html";
  }

  function cxzx() {
    document.getElementById("mainFrame").src = "cx.php";
  }
</script>

</html>