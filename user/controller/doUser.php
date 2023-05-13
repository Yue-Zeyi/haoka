        <?php
        $uid = $_POST["uid"];
        $usname = $_POST['username'];
        $psword = $_POST['password'];
        $uname = $_POST['name'];
        $phone = $_POST['phone'];
        include_once("../../untils/conn.php");
        if ($con) {
          mysqli_query($con, "set names utf8");
          $data = $con->query("UPDATE user SET username ='" . $usname . "',password='" . $psword . "',name='" . $uname . "',phone='" . $phone . "'where uid=" . $uid);
          if ($data > 0) {
            echo "<script>alert('修改信息成功');window.location.replace(document.referrer)</script> ";
          } else {
            echo ("<script>alert('修改失败');window.location.replace(document.referrer)</script>");
          }
        }
        $con->close();
        ?>