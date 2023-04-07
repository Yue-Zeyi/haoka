        <?php
        $id = $_POST["id"];
        $user = $_POST['user'];
        $pwd = $_POST['password'];
        include_once("../../untils/conn.php");
        if ($con) {
          mysqli_query($con, "set names utf8");
          $data = $con->query("UPDATE admin  SET user ='" . $user . "',password='" . $pwd . "'where id=" . $id);
          if ($data > 0) {
            echo "<script>alert('修改信息成功');window.location.replace(document.referrer)</script> ";
          } else {
            echo ("<script>alert('修改失败');window.location.replace(document.referrer)</script>");
          }
        }
        $con->close();
        ?>