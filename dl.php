<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maxi-mum-scale=1.0,user-scalable=no" name="viewport" />
  <!--样式文件-->
  <link rel="stylesheet" href="static/css/common.css">
  <link rel="stylesheet" href="static/css/bootstrap4.min.css">
  <script src="static/js/jquery.slim.min.js"></script>
  <script src="static/js/bootstrap4.bundle.min.js"></script>
  <title>常见问题 - 号卡中心</title>
  <style>
    .card {
      border-radius: 0rem;
    }

    .card-header {
      padding: 0.5rem 0.25rem;
      background-color: #fff;
    }

    .card-body {
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 0.75rem;
    }

    .card button {
      color: black;
      font-size: 14px;
    }




    .apply_da {
      width: 17.5%;
      float: left;
      text-align: center;
      margin-right: 3%;
    }

    .liucheng {
      margin-bottom: 10px;
      background: -webkit-linear-gradient(left, #54a1f7, #4262F4) no-repeat;
      border-radius: 50px;
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      width: 50px;
      height: 50px;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
    }

    .apply_da img {
      width: 25px;
    }

    .apply_dc {
      width: 100%;
      font-size: 12px;
      color: #666;
      text-align: center;
      line-height: 18px;
      margin-top: 0px;
    }
  </style>
</head>
<?php
include_once("untils/conn.php");
$uid = $_GET['uid'];
$sql = "select * from kefu where uid=$uid ";
$data = mysqli_query($con, $sql);
$result = mysqli_fetch_row($data);
?>

<body>
  <div id="kf_beizhu">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingooo">
          <h4 class="mb-0" style="text-align: center; padding-top:10px;padding-bottom:10px;color: #000;font-weight: 500;">
            常见问题
          </h4>
        </div>
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                1.办理的卡是正规手机卡吗？
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              本平台的所有产品均为官方授权运营商正规卡，您可以拨打人工客服或者登录线上营业厅均可查询！
              <!-- <code>.show</code> class. -->
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2.办理的卡不想用了如何注销？
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              2019年1月1日起工信部已经支持号卡异地销户，如需要办理销户直接拨打运营商对应官方客服电话或在线上营业厅(官方APP)申请销户即可。
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                3.套餐会不会出现乱扣费的情况？
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              本平台办理的产品均为运营商正规卡，套餐及资费以申请时的套餐详情为准，账单详细均可通过官方渠道查询。
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                4.办理的卡如何激活使用，方便吗？
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              网上办卡与线下营业厅办卡无异，收到卡后需要订单申请本人按照快递包裹内内激活说明书几分钟便可激活，若说明书丢失，请联系客服获取激活方式，部分产品为运营商工作人员上门配送现场激活！
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                5.办理的卡可以选择号码和归属地吗？
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              因优惠政策，大部分卡归属地随机，不可选号，有特殊标注的，可选号下单或激活时进入号码池挑选心仪号码。
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFivi">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFivi" aria-expanded="false" aria-controls="collapseFivi">
                6.收到卡不想要或者想改收货地址信息？
              </button>
            </h2>
          </div>
          <div id="collapseFivi" class="collapse" aria-labelledby="headingFivi" data-parent="#accordionExample">
            <div class="card-body">
              收到卡后可以告诉快递人员拒收或者收货不激活，号卡十五天内不激活会自动失效并不会对你造成任何影响。订单生成后订单信息无法更改，如想更改收货信息可以关注物流信息，主动和快递员联系。
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                7.申请办卡有年龄限制或其他要求限制吗？
              </button>
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
              办卡需年满16周岁且低于60周岁（以身份证年龄为准），部分办卡年龄为满16周岁且低于50周岁（以身份证年龄为准）。申请办卡人和激活用卡人身份信息必须保持一致，且承诺绝不会把卡用于任何有关黄赌毒、诈骗团伙等违法行为！
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 底部导航 -->
  <?php require_once('nav.php'); ?>
  <!-- 底部导航 -->
</body>




</html>