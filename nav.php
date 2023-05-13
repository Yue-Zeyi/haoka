   <style>
     html,
     body {
       margin: 0;
       padding: 0;
     }

     .sidebar {
       height: 50px;
       line-height: 50px;
     }

     .nav-item a {
       text-decoration: none;
       color: #222;
       display: block;
     }

     /*去除未被访问的a标签的下划线*/
     .nav-item a:link {
       text-decoration: none;
     }

     /*去除已经被访问过的a标签的下划线*/
     .nav-item a:visited {
       text-decoration: none;
     }

     /*去除鼠标悬停时的a标签的下划线*/
     .nav-item a:hover {
       text-decoration: none;
     }

     /*去除正在点击的a标签的下划线（鼠标按下，尚未松开）*/
     .nav-item a:active {
       text-decoration: none;
     }

     /*去除获得焦点的a标签的下划线（被鼠标点击过）*/
     .nav-item a:focus {
       text-decoration: none;
     }

     nav {
       display: flex;
       position: fixed;
       bottom: 0;
       z-index: 99;
       height: 50px;
       width: 100%;
       background: white;
       flex-shrink: 0;
       font-size: 12px;
     }

     nav .nav-item {
       display: flex;
       flex-direction: column;
       align-items: center;
       justify-content: center;
       width: 100%;
       color: #828282;
     }

     nav .nav-item.selected {
       color: #4078d4;
     }

     nav .nav-item .img {
       height: 24px;
       overflow: hidden;
       text-align: center;
     }

     nav .nav-item img {
       width: 24px;
       height: 24px;
       overflow: hidden;
     }
   </style>
   <div class="sidebar"></div>
   <nav>
     <div class="nav-item">
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
            $index = $rows[1];
            $yyssql = "select * from sort where uid=$uid ORDER BY sortid DESC LIMIT 1 ";
            $yysdata = mysqli_query($con, $yyssql);
            $yysresult = mysqli_fetch_row($yysdata);
            $yysid = $yysresult['0'];
        ?>
           <a href="kacenter.php?uid=<?php echo $uid ?>&yys=<?php echo $yysid ?>">
             <div class="img">
               <img src="img/sy.png">
             </div>
             <div class="text">首页</div>
           </a>
       <?php
          }
        }
        ?>
     </div>
     <div class="nav-item">
       <a href="kf.php?uid=<?php echo $uid ?>&yys=<?php echo $yysid ?>">
         <div class="img">
           <img src="img/zxkf.png">
         </div>
         <div class="text">在线客服</div>
       </a>
     </div>
     <div class="nav-item"><a href="dl.php?uid=<?php echo $uid ?>&yys=<?php echo $yysid ?>">
         <div class="img">
           <img src="img/gzgzh.png">
         </div>
         <div class="text">常见问题
         </div>
       </a>
     </div>

     <div class="nav-item">
       <a href="cx.php?uid=<?php echo $uid ?>&yys=<?php echo $yysid ?>">
         <div class="img">
           <img src="img/cxzx.png">
         </div>
         <div class="text">订单查询
         </div>
       </a>
     </div>
   </nav>