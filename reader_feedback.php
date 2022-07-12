<?php
session_start();
$userid=$_SESSION['userid'];
include ('mysqli_connect.php');

$sql="select name from reader_card where reader_id={$userid}";
$res=mysqli_query($dbc,$sql);
$result=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户反馈</title>
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
            line-height: 120px;
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
            line-height: 60px;
        }
 
        .login-wrapper a{
            text-decoration-line: none;
            color: #fbc2eb;
        }
        label{
            font-size: 18px;
        }
        textarea{
            resize: none;
            border-radius: 5px;
        }
        textarea:focus{
            border:solid 2px darkgoldenrod;
            outline: none;
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

    <div class="login-wrapper" style="margin-top:25%;margin-left: 50%;height: 700px;width: 450px;transform: translate(-50%,-50%);">
    <div class="header">问题与反馈</div>
    <form class="form-wrapper" action="reader_feedback.php" method="POST">
        <label style="top:20px ;">请输入反馈内容，我们将尽快与您联系<textarea cols="60" rows="20" name="backs"></textarea></label>
        <input class="btn" style="height:50px;line-height: 50px;outline: none;border:none;border-radius: 25px;margin-top: 10px;font-size: 17px;" type="submit" value="发送">
        <input class="btn" style="height:50px;line-height: 50px;outline: none;border:none;margin-top: 20px;border-radius: 25px;font-size: 17px;" type="reset">
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $content=$_POST["backs"];
    if($content==null||$content=="")
    {
        echo "<script>alert('反馈内容不能为空！')</script>";
        echo "<script>window.location.href='reader_feedback.php'</script>";
    }
    else{
        $sql="insert into feedback values('{$userid}','{$content}','0')";
        $res=mysqli_query($dbc,$sql);
        if($res==1)
        {
            echo "<script>alert('已成功发送！')</script>";
            echo "<script>window.location.href='reader_index.php'</script>";
        }
        else{
            echo "<script>alert('发送失败，请重新输入！');</script>";
        }
    }
}
?>
</body>
</html>