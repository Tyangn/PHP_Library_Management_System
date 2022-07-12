<?php
session_start();
include ('mysqli_connect.php');
$userid=$_SESSION['userid'];

$sql="select name from reader_card where reader_id={$userid}";
$res=mysqli_query($dbc,$sql);
$result=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>密码修改</title>
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
    <div class="header">修改密码</div>
    <form class="form-wrapper" action="reader_repass.php" method="POST">
        <input name="pass1" type="password" placeholder="请输入新的密码" class="input-item">
        <input name="pass2" type="password" placeholder="请再次确认密码" class="input-item" style="margin-top:50px">
        <input class="btn" style="height:50px;line-height: 50px;outline: none;border:none;border-radius: 25px;margin-top: 80px;" type="submit">
        <input class="btn" style="height:50px;line-height: 50px;outline: none;border:none;margin-top: 20px;border-radius: 25px;" type="reset">
    </form>
</div>
<div style="position: absolute;height: 700px;width: 1000px;margin-top: 7%;right: 5%;">
    <div style="position:absolute;width:150px;height:600px;left: 10%;top: 50%;transform: translate(-10%,-50%);">
    <img src="imgs/reader_repass_img1.jpg" style="display:block;width:100%;height:100%;border-radius:20px"></div>
    <div style="position:absolute;width:150px;height:600px;left: 35%;top: 50%;transform: translate(-35%,-50%);">
    <img src="imgs/reader_repass_img2.jpg" style="display:block;width:100%;height:100%;border-radius:20px;opacity:.7;"></div>
    <div style="position:absolute;width:150px;height:600px;left: 60%;top: 50%;transform: translate(-60%,-50%);display:flex;flex-direction: column;">
        <div style="height:300px;width:100%">
        <img src="imgs/reader_repass_img3.jpg" style="display:block;width:100%;height:100%;border-radius:20px"></div>
        <div style="height:20px;width:100%"></div>
        <div style="height:280px;width:100%">
        <img src="imgs/reader_repass_img4.jpg" style="display:block;width:100%;height:100%;border-radius:20px;opacity:.7;"></div>
    </div>
    <div style="position:absolute;width:150px;height:600px;left: 85%;top: 50%;transform: translate(-85%,-50%);">
    <img src="imgs/reader_repass_img5.jpg" style="display:block;width:100%;height:100%;border-radius:20px"></div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $passa = $_POST["pass1"];
    $passb = $_POST["pass2"];
if($passa==$passb){
    $sql="update reader_card set passwd='{$passa}' where reader_id={$userid}";
    $res=mysqli_query($dbc,$sql);
    if($res==1)
    {
        echo "<script>alert('密码修改成功！请重新登陆！')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
else{
    echo "<script>alert('两次输入密码不同，请重新输入！')</script>";
}
}
?>
</body>
</html>