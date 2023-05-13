  <?php
  $qrcode = $_POST['qrcode'];
  $kfwx = $_POST['kfwx'];
  $ontime = $_POST['ontime'];
  $ggtitle = $_POST['ggtitle'];
  $shuoming = $_POST['shuoming'];
  $chaxun = $_POST['chaxun'];
  $bannera = $_POST['bannera'];
  $bannerb = $_POST['bannerb'];
  $uid = $_POST['uid'];
  include_once("../../untils/conn.php");
  if ($con) {
    mysqli_query($con, "set names utf8");
    $sqlfalg = "select * from kefu where uid=$uid";
    $kefudata = mysqli_query($con, $sqlfalg);
    $result = mysqli_num_rows($kefudata);
    if ($result < 1) {
      $data = mysqli_query($con, "insert into kefu(qrcode,kfwx,ontime,ggtitle,shuoming,chaxun,uid,bannera,bannerb) values('$qrcode','$kfwx','$ontime','$ggtitle','$shuoming','$chaxun','$uid','$bannera','$bannerb')");
      if ($data) {
        echo ("<script>alert('信息配置成功')</script>");
        echo ("<script>window.location.href='../system.php'</script>");
      } else {
        echo ("<script>alert('信息配置失败，请检查！');window.location.replace(document.referrer)</script>");
      }
    } else {
      $data = $con->query("UPDATE kefu  SET qrcode ='" . $qrcode . "',kfwx='" . $kfwx . "',ontime='" . $ontime . "',ggtitle='" . $ggtitle . "',shuoming='" . $shuoming . "',chaxun='" . $chaxun . "',bannera='" . $bannera . "',bannerb='" . $bannerb . "'where uid=" . $uid);
      if ($data > 0) {
        echo "<script>alert('信息配置成功');window.location.href='../system.php'</script> ";
      } else {
        echo ("<script>alert('信息配置失败，请检查');window.location.replace(document.referrer)</script>");
      }
    }
  }
  $con->close();
  ?>
