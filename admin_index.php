<?php
session_start();
$userid=$_SESSION['userid'];
include ('mysqli_connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员首页</title>
    <link rel="icon" type="image/png/jpg" href="imgs/logo.png">
    <link rel="stylesheet" href="top.css">
    <style>
        body{
            background: url("imgs/adminBG.jpg") no-repeat;
            background-size:cover;
            color: rgb(223, 167, 94);
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<script src="cav.js"></script>
    <script src="mouseLine.js"></script>
    <div style="height: 70px;background-color: rgba(255,255,255,0.85);left: 0.5%;right: 0.5%;position:fixed;top: 10px;z-index: 9999;min-width: 800px;width: auto 0;border-radius: 20px;">
        <div class="span-content">
            <span class="titleSpan titleSpanHover" style="left: 2%;transform: translate(-2%,0);">
                <a href="admin_index.php" class="topP">主页</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 8%;transform: translate(-8%,0);">
                <a href="admin_book.php" class="topP">全部图书</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 14%;transform: translate(-14%,0);">
                <a href="admin_book_add.php" class="topP">增加图书</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 20%;transform: translate(-20%,0);">
                <a href="admin_reader.php" class="topP">全部读者</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 26%;transform: translate(-26%,0);">
                <a href="admin_reader_add.php" class="topP">增加读者</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 32%;transform: translate(-32%,0);">
                <a href="admin_borrow_info.php" class="topP">借还管理</a>
            </span>
            <span class="titleSpan titleSpanHover" style="left: 38%;transform: translate(-38%,0);">
                <a href="admin_feedback.php" class="topP">用户反馈</a>
            </span>
            <div style="position:absolute;color: chocolate;line-height: 70px;right: 40%;font-size: 18px;"><?php echo $userid;  ?>号管理员，您好</div>
            <div style="position:absolute;color: chocolate;line-height: 70px;right: 26%;font-size: 17px;transform: translate(26%,0);">本图书馆当前共有图书<?php
                $sql="select count(*) a from book_info;";
                $res=mysqli_query($dbc,$sql);
                $result=mysqli_fetch_array($res);
                echo "{$result['a']}本";
            ?></div>
            <div style="position:absolute;color: chocolate;line-height: 70px;right: 12%;font-size: 17px;transform: translate(12%,0);">
            共有读者<?php
                $sqla="select count(*) b from reader_card;";
                $resa=mysqli_query($dbc,$sqla);
                $resulta=mysqli_fetch_array($resa);
                echo "{$resulta['b']}位";
                ?></div>
            <span class="titleSpan titleSpanHover1" style="right: 2%;transform: translate(2%,0);">
                <a class="topP1" href="index.php">退出</a>
            </span>
        </div>
    </div>
    <?php
    date_default_timezone_set("PRC");
    $ip=$_SERVER["REMOTE_ADDR"];
    ?>
    <?php
        $sqlb="select count(*) m from feedback where read_status=0";
        $resb=mysqli_query($dbc,$sqlb);
        $resultb=mysqli_fetch_array($resb);
    ?>
    <div style="width:400px;height:500px;position: absolute;left: 0.5%;margin-top:5%;background-color: rgba(255,255,255,0.6);border-radius: 20px;">
        <div style="position:absolute;left:50%;transform: translate(-50%,0);top: 20px;font-size: 25px;color:cornflowerblue;">系 统 信 息</div>
        <div style="position:absolute;left:10%;top:80px;color: black;font-size: 18px;">当前时间：<?php echo date("Y-m-d H时"); ?></div>
        <div style="position:absolute;left:10%;top:145px;color: black;font-size: 18px;">登&nbsp;&nbsp;录&nbsp;&nbsp;IP：<?php echo $ip; ?></div>
        <div style="position:absolute;left:10%;top:215px;color: black;font-size: 18px;">连接状态：<?php
        if($userid==null||$userid==""){echo "<strong><font color=\"red\">异常</font></strong>";}
        else {echo "<font color=\"green\">正常</font>";};
        ?></div>
        <div style="position:absolute;left:10%;top:290px;color: black;font-size: 18px;">待办事项：
    <?php
         if($resultb['m']==0)
         {
             echo "无";
         }
         else echo "<font color=\"red\">{$resultb['m']}个</font>";
    ?>
        <?php
        $sql1="select * from today where type='1'";
        $res1=mysqli_query($dbc,$sql1);
        $r1=mysqli_fetch_array($res1);
        ?>
            <?php
        $sql2="select * from today where type='2'";
        $res2=mysqli_query($dbc,$sql2);
        $r2=mysqli_fetch_array($res2);
        ?>
    
    </div>
        <a href="admin_index.php" style="position:absolute;left:10%;top:365px;color: red;font-size: 18px;text-decoration: none;">点此刷新系统信息</a>
    </div>
    <div style="position: absolute;height:500px;margin-top:5%;background-color: rgba(255,255,255,0.6);border-radius: 20px;right:0.5%;width:1400px">
        <div style="position:absolute;left:50%;transform: translate(-50%,0);top: 20px;font-size: 25px;color:cornflowerblue;">图 书 馆 状 态</div>
        <div style="position:absolute;left:25%;transform: translate(-25%,0);font-size: 23px;color: coral;top: 50px;">今 日 好 书</div>
        <div style="position:absolute;left:24%;transform: translate(-24%,0);font-size: 23px;color:saddlebrown;top: 90px;font-family: 等线;"><?php echo $r1['title'];?></div>
        <div style="position:absolute;height: 350px;width: 350px;margin-top: 120px;left: 14%;">
        <img src="<?php echo $r1['img'];?>" style="display:block;" onclick="window.location.href='changeAct.php?type=1'"></div>
        <div style="position:absolute;right:21%;transform: translate(21%,0);font-size: 23px;color: coral;top: 50px;">书 馆 活 动</div>
        <div style="position:absolute;right:17%;transform: translate(17%,0);font-size: 23px;color:saddlebrown;top: 90px;font-family: 等线;"><?php echo $r2['title'];?></div>
        <div style="position:absolute;height: 350px;width: 500px;margin-top: 120px;right: 6%;">
        <img src="<?php echo $r2['img'];?>" style="display: block;width: 100%;height: 100%;" onclick="window.location.href='changeAct.php?type=2'"></div>
    </div>
    <div style="position:absolute;left: 0.5%;right: 0.5%;height: 260px;margin-top:640px;background-color: rgba(192,192,192,0.7);border-radius: 20px;">
        <div style="position:absolute;left:50%;transform: translate(-50%,0);top: 20px;font-size: 25px;color:cornflowerblue;">管 理 员 准 则</div>
        <div style="position:absolute;color: black;font-size: 18px;left: 2%;top:80px">
            （1） 自觉学习业务知识，不断提高自身业务水平，熟悉掌握本岗位的操作技能，遵守规则，努力做好图书管理的工作任务<br>
            （2） 以读者服务工作为重点，坚持以“读者至上、服务第一、文明礼貌、热情周到”为原则<br>
            （3） 加强与读者交流，为读者提供咨询服务，尽力为其排忧解难<br>
            （4） 保持室内外环境清洁，为读者创造理想的读书环境，营造良好的学习氛围<br>
            （5） 做好室内的安全、防火、防盗等工作，正确使用和保管好各种设备设施，做好设施的保养和清洁工作，确保图书馆的正常运作<br>
            （6） 办理好读者的借书的登记及有关手续，妥善处理超期、遗失、损坏图书、偷书等违约事宜
        </div>
    </div>
</body>
</html>
<?php
if($userid==null||$userid==""){
    echo "<script>alert('您尚未登录，必须登录！')</script>;<script>window.location='index.php';</script>";
}
?>