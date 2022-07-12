<?php
session_start();
$userid=$_SESSION['userid'];
include ('mysqli_connect.php');

$sql="select name from reader_card where reader_id={$userid}";
$res=mysqli_query($dbc,$sql);
$result=mysqli_fetch_array($res);
$sqlb="select * from reader_info where reader_id={$userid} ;";
$resb=mysqli_query($dbc,$sqlb);
$resultb=mysqli_fetch_array($resb);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的信息</title>
    <link rel="icon" type="image/png/jpg" href="imgs/logo.png">
    <link rel="stylesheet" href="top.css">
    <style>
        body{
            background: url("300046-106.jpg") no-repeat;
            background-size:cover;
            color: rgb(223, 167, 94);
            background-attachment: fixed;
        }
        .login-wrapper {
            background-color: #fff;
            position: absolute;
            border-radius: 15px;
            padding: 0 50px;
            box-shadow: 2px 2px 10px 0 rgba(0, 0, 0, 0.5);
        }
 
        .login-wrapper .header {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            line-height: 200px;
        }
 
        .login-wrapper .form-wrapper .input-item{
            display: block;
            width: 100%;
            margin-bottom: 20px;
            border: 0;
            padding: 10px;
            border-bottom: 1px solid rgb(128,125,125);
            font-size: 15px;
            outline: none;
        }
 
        .login-wrapper .form-wrapper .input-item::placeholder{
            text-transform: uppercase;
        }
        .login-wrapper .form-wrapper .btn {
            text-align: center;
            padding: 5px;
            background-image: linear-gradient(to right,#a6c1ee, #fbc2eb);
            color: #fff;
            width: 100%;
            margin-top: 40px;
            font-weight: bold;
        }
 
        .login-wrapper{
            text-align: center;
            line-height: 80px;
        }
 
        .login-wrapper a{
            text-decoration-line: none;
            color: #fbc2eb;
        }
        img:hover{
            transform: scale(1.2);
            transition: all 0.8s;
        }
        img{
            transition: all 0.8s;
        }
    </style>
</head>
<body>
<script src="cav.js"></script>
    <script src="mouseLine.js"></script>
    <div style="height: 70px;background-color: rgba(255,255,255,0.85);left: 0.5%;right: 0.5%;position:fixed;top: 10px;z-index: 9999;min-width: 800px;width: auto 0;border-radius: 20px;">
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
            <div style="position:absolute;color: chocolate;line-height: 70px;right: 30%;font-size: 18px;"><?php echo $result['name'];  ?>同学，您好</div>
            <span class="titleSpan titleSpanHover1" style="right: 2%;transform: translate(2%,0);">
                <a class="topP1" href="index.php">退出</a>
            </span>
        </div>
    </div>
<div class="login-wrapper" style="margin-top:25%;margin-left: 20%;height: 700px;width: 400px;transform: translate(-50%,-50%);">
    <div class="header">您的个人信息</div>
    <form class="form-wrapper" action="reader_info.php" method="POST">
        <input value="<?php echo $resultb['name']; ?>" name="name" type="text" placeholder="请输入姓名" class="input-item">
        <input value="<?php echo $resultb['birth']; ?>"  name="birth" type="text" placeholder="请输入生日" class="input-item">
        <input value="<?php echo $resultb['address']; ?>" name="address" type="text" placeholder="请输入地址" class="input-item">
        <input  value="<?php echo $resultb['telcode']; ?>" name="telcode" type="text" placeholder="请输入电话" class="input-item">
        <input value="男" name="sex" type="radio"
        <?php 
        if ($resultb['sex']=="男")echo "checked=\"checked\"";
         ?>>男
        <input value="女" name="sex" type="radio" style="margin-left:100px"
        <?php 
        if ($resultb['sex']=="女")echo "checked=\"checked\"";
         ?>>女
        <input class="btn" style="height:50px;line-height: 50px;outline: none;border:none;border-radius: 25px;margin-top: 10px;" type="submit">
        <input class="btn" style="height:50px;line-height: 50px;outline: none;border:none;margin-top: 20px;border-radius: 25px;" type="reset">
    </form>
</div>
<div style="position: absolute;height: 700px;width: 1000px;margin-top: 7%;right: 5%;">
    <div style="position:absolute;height:150px;width:900px;left:50%;top:10px;transform:translate(-50%,0)">
    <img src="imgs/reader_info_img1.jpg" style="display:block;width:100%;height:100%;border-radius: 15px;opacity: .75;"></div>
    <div style="position:absolute;height:150px;width:900px;left:50%;top:180px;transform:translate(-50%,0)">
    <img src="imgs/reader_info_img2.jpg" style="display:block;width:100%;height:100%;border-radius: 15px;"></div>
    <div style="position:absolute;height:150px;width:900px;left:50%;top:350px;transform:translate(-50%,0);display: flex;">
        <div style="width:550px;">
        <img src="imgs/reader_info_img3.jpg" style="display:block;width:100%;height:100%;border-radius:15px;opacity: .8;"></div>
        <div style="width:20px"></div>
        <div style="width:330px;">
        <img src="imgs/reader_info_img4.jpg" style="display:block;width:100%;height:100%;border-radius:15px"></div>
    </div>
    <div style="position:absolute;height:150px;width:900px;left:50%;top:520px;transform:translate(-50%,0)">
    <img src="imgs/reader_info_img5.jpg" style="display:block;width: 100%;height:100%;border-radius: 19px;"></div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nnam = $_POST["name"];
    $nsex = $_POST["sex"];
    $nbirth = $_POST["birth"];
    $nadd = $_POST["address"];
    $nint = $_POST["telcode"];
    $sqla="update reader_info set name='{$nnam}',sex='{$nsex}',birth='{$nbirth}',
address='{$nadd}',telcode='{$nint}' where reader_id={$userid};";
    $resa=mysqli_query($dbc,$sqla);
    $sqlc="update reader_card set name='{$nnam}' where reader_id={$userid};";
    $resc=mysqli_query($dbc,$sqlc);
    if($resa==1&&$resc==1)
    {
        echo "<script>alert('修改成功！')</script>";
        echo "<script>window.location.href='reader_info.php'</script>";
    }
    else
    {
        echo "<script>alert('修改失败！请重新输入！');</script>";
    }
}
?>
</body>
</html>