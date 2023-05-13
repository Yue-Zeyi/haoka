    <?php
    include_once("../../untils/conn.php");
    mysqli_query($con, "set names utf8");
    $name = $_POST['username'];
    $pwd = $_POST['password'];
    $sql = "select username,password,uid from user where username='$name' AND password='$pwd';";
    $result = mysqli_query($con, $sql);
    $row =  mysqli_fetch_row($result);
    if ($row) {
        session_start();
        $_SESSION["uid"] = $row[2];
        echo "<script>alert('登录成功');location.href='../index.php';</script>";
    } else {

        echo "<script>alert('用户名或密码错误，请重新输入');history.go(-1);</script>";
    }
    ?>