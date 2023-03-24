<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <title>号卡推广管理平台</title>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/lg.css">
</head>

<body>
    <div id="formContainer" class="dwo">
        <div class="formLeft">
            <img src="other/avatar.jpg">
        </div>
        <div class="formRight">
            <!-- Login form -->
            <form id="login" action="logincheck.php" method="post">
                <header>
                    <h1>号卡管理系统</h1>
                    <p>后台登录</p>
                </header>
                <section>
                    <label>
                        <p for="username">用户名</p>
                        <input type="text" placeholder="请输入账号" name="username" id="username">
                        <div class="border"></div>
                    </label>
                    <label>
                        <p>密码</p>
                        <input type="password" name="password" id="pwd" placeholder="请输入密码 ">
                        <div class="border"></div>
                    </label>
                    <button type="submit" class="submit" value="登录">登 录</button>
                </section>
            </form>
        </div>
    </div>
    <script src="https://cdn.staticfile.org/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/script-ym.js"></script>
</body>

</html>