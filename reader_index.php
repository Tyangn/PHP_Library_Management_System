<?php
session_start();
$userid=$_SESSION['userid'];
include ('mysqli_connect.php');

$sql="select name from reader_card where reader_id={$userid}";
$res=mysqli_query($dbc,$sql);
$result=mysqli_fetch_array($res);
date_default_timezone_set("PRC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png/jpg" href="imgs/logo.png">
    <link rel="stylesheet" href="top.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <title>用户首页</title>
    <style>
        body{
            background: url("300046-106.jpg") no-repeat;
            background-size:cover;
            color: antiquewhite;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <script src="cav.js"></script>
    <script src="mouseLine.js"></script>
    <div style="height: 70px;background-color: rgba(255,255,255,0.85);left: 0.5%;right: 0.5%;position:fixed;top: 10px;z-index: 9999;min-width: 800px;width: auto 0;border-radius: 20px;min-width:1400px">
        <div class="span-content">
            <span class="titleSpan titleSpanHover" style="left: 2%;transform: translate(-2%,0);">
                <a href="reader_index.php" class="topP">主页</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 8%;transform: translate(-8%,0);">
                <a href="reader_querybook.php" class="topP">图书查询</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 14%;transform: translate(-14%,0);">
                <a href="reader_borrow.php" class="topP">我的借阅</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 20%;transform: translate(-20%,0);">
                <a href="reader_info.php" class="topP">个人信息</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 26%;transform: translate(-26%,0);">
                <a href="reader_repass.php" class="topP">密码修改</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 32%;transform: translate(-32%,0);">
                <a href="reader_feedback.php" class="topP">客服反馈</a>
            </span>
            <div style="position:absolute;color: chocolate;line-height: 70px;right: 40%;font-size: 18px;"><?php echo $result['name'];  ?>同学，您好</div>
            <div style="position:absolute;color: chocolate;line-height: 70px;right: 30%;font-size: 17px;transform: translate(30%,0);">您目前共借阅<?php
                $sqla="select count(*) a from lend_list where reader_id={$userid} and back_date is NULL;";
                $resa=mysqli_query($dbc,$sqla);
                $resulta=mysqli_fetch_array($resa);
                echo $resulta['a'];
                ?>本书</div>
            <div style="position:absolute;color: chocolate;line-height: 70px;right: 12%;font-size: 17px;transform: translate(12%,0);">
                <?php
                $sqlb="select DATE_ADD(lend_date,INTERVAL 1 MONTH) AS yhrq from lend_list where reader_id={$userid} and back_date is NULL;";
                $counta=0;
                $resb=mysqli_query($dbc,$sqlb);
                foreach ($resb as $row){
                    if(strtotime(date("y-m-d"))>strtotime($row['yhrq'])) $counta++;
                };
                if($counta==0) echo "您当前没有超期且未归还的书";
                else echo "有{$counta}本书已超期，请您及时归还";
                ?></div>
            <span class="titleSpan titleSpanHover1" style="right: 2%;transform: translate(2%,0);">
                <a class="topP1" href="index.php">退出</a>
            </span>
        </div>
    </div>
    <div id="mycarousel" class="carousel slide data-ride='carousel'" style="margin-top: 100px;margin-left: 0.5%;margin-right: 0.5%;position: relative;width: auto 0;min-width: 1600px;">
        <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
            <li data-target="#mycarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="max-height: 750px; border-radius: 20px;">
            <div class="carousel-item active" style="border-radius: 20px;">
                <img src="imgs/store001.jpg" class="d-block w-100" alt="index1" style="border-radius: 20px;height: 750px;" />
                <div class="carousel-caption">
                </div>
            </div>
            <div class="carousel-item" style="border-radius: 20px;height: 800px;">
                <img src="imgs/store002.jpg" class="d-block w-100" alt="index2" style="border-radius: 20px;height: 750px;" />
                <div class="carousel-caption">
                </div>
            </div>
            <div class="carousel-item" style="border-radius: 20px;">
                <img src="imgs/store003.png" class="d-block w-100" alt="index3" style="border-radius: 20px;height: 750px;" />
                <div class="carousel-caption">
                </div>
            </div>
            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <?php
        $sql1="select * from today where type='1'";
        $res1=mysqli_query($dbc,$sql1);
        $r1=mysqli_fetch_array($res1);
        ?>
    <div style="position:relative;margin-left:1%;margin-right:1%;height:600px;border-radius: 10px;margin-top: 50px;">
        <div style="width:100px;height:400px;position: absolute;font-size: 65px;color: coral;left: 15%;top: 50%;transform: translate(-20%,-50%);font-family: 隶书;">今<br>日<br>好<br>书</div>
        <img src="<?php echo $r1['img'];?>" style="border-radius: 20px;position:absolute;width:600px;height:600px;display: block;right: 0;transform: translate(0,0);">
        <div style="position:absolute;height:500px;width:550px;left:45%;top: 60%;transform: translate(-50%,-50%);">
            <div style="font-size:40px;text-align:center;font-family: 华文行楷;color: saddlebrown;"><?php echo $r1['title'];?></div>
            <div style="text-align:center;color:black;">
        <?php echo $r1['content'];?></div>
        </div>
    </div>
    <?php
        $sql2="select * from today where type='2'";
        $res2=mysqli_query($dbc,$sql2);
        $r2=mysqli_fetch_array($res2);
        ?>
    <div style="position:relative;margin-left:1%;margin-right:1%;height:600px;border-radius: 10px;margin-top: 50px;">
        <div style="width:100px;height:400px;position: absolute;font-size: 65px;color: coral;right: 12%;top: 50%;transform: translate(20%,-50%);font-family: 隶书;">书<br>馆<br>活<br>动</div>
        <img src="<?php echo $r2['img'];?>" style="border-radius: 20px;position:absolute;width:800px;height:600px;display: block;left: 0;transform: translate(0,0);">
        <div style="position:absolute;height:500px;width:550px;right:37%;top: 60%;transform: translate(50%,-50%);">
            <div style="font-size:40px;text-align:center;font-family: 华文行楷;color:#767187"><?php echo $r2['title'];?></div>
            <div style="text-align:left;color:black;margin-top: 20px;"><?php echo $r2['content'];?></div>
        </div>
    </div>


    <div id="map_address" style="position:relative;margin-left:1%;margin-right:1%;height:600px;border-radius: 10px;margin-top: 50px;"></div>
  <script type="text/javascript" src="https://api.map.baidu.com/api?v=1.3"></script>
  <!-- <script>
       var baidu_Point = new BMap.Point(经度,纬度);
       var marker = new BMap.Marker(baidu_Point);
       var pos_info = "<h5>地点名</h5>"
                           +"<p style='font-size:12px;'>详细地址</p>"
      var infoWindow = new BMap.InfoWindow(pos_info);
      var map = new BMap.Map("map_address");
      map.centerAndZoom(baidu_Point, 20);
      map.addOverlay(marker);
      map.openInfoWindow(infoWindow,baidu_Point);
      map.addControl(new BMap.NavigationControl());
      map.setCurrentCity("当前城市");
      map.enableScrollWheelZoom(true);
  </script> -->

    <div style="position:relative;margin-left:1%;margin-right: 1%;height: 70px;margin-top: 50px;">
        <div style="font-size:18px;position: absolute;left: 1%;">温馨提示：借阅图书后请保持图书完整，若有损坏或丢失，本图书馆有权追究法律责任，爱护书籍，人人有责</div>
        <div style="font-size:15px;position: absolute;right:1%">校图书馆，版权所有</div>
    </div>
</body>
</html>