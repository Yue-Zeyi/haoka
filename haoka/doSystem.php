
  <?php
  $kefu = $_POST["kefu"];
  $qrcode = $_POST['qrcode'];
  $kfwx = $_POST['kfwx'];
  $ontime = $_POST['ontime'];
  include_once("../untils/conn.php");
  if ($con) {
    mysqli_query($con, "set names utf8");
    $data = $con->query("UPDATE kefu  SET qrcode ='" . $qrcode . "',kfwx='" . $kfwx . "'where kefu=" . $kefu);
    if ($data > 0) {
      echo "<script>alert('修改信息成功');window.location.replace(document.referrer)</script> ";
    } else {
      echo ("<script>alert('修改失败');window.location.replace(document.referrer)</script>");
    }
  }
  $con->close();
  ?>