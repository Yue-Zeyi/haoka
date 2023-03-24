<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>号卡管理系统</title>
</head>

<body>
  <table width="900" border="1" align="center">
    <tr>
      <td>
        <?php
        $id = $_POST["id"];
        $user = $_POST['user'];
        $pwd = $_POST['password'];
        include_once("../untils/conn.php");
        if ($con) {
          mysqli_query($con, "set names utf8");
          $data = $con->query("UPDATE admin  SET user ='" . $user . "',password='" . $pwd . "'where id=" . $id);
          if ($data > 0) {
            echo "<script>alert('修改信息成功');location.href='user.php'</script> ";
          } else {
            echo ("<script>alert('修改失败');</script>");
          }
        }
        $con->close();
        ?>
      </td>

    </tr>

  </table>
</body>

</html>