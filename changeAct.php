<?php
session_start();
$userid=$_SESSION['userid'];
include ('mysqli_connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更改活动</title>
    <link rel="icon" type="image/png/jpg" href="imgs/logo.png">
    <link rel="stylesheet" href="top.css">
    <style>
        body{
            background: url("imgs/adminBG.jpg") no-repeat;
            background-size:cover;
            color: rgb(223, 167, 94);
            background-attachment: fixed;
        }
        textarea{
            resize: none;
            border-radius: 5px;
        }
        textarea:focus{
            border:solid 2px darkgoldenrod;
            outline: none;
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
            background-image: linear-gradient(to right,#B29283, #AA9FA7);
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
            <div style="position:absolute;color: chocolate;line-height: 70px;right: 23%;font-size: 18px;"><?php echo $userid;  ?>号管理员，您好</div>
            <span class="titleSpan titleSpanHover1" style="right: 2%;transform: translate(2%,0);">
                <a class="topP1" href="index.php">退出</a>
            </span>
        </div>
    </div>
    <?php
    $type=$_GET['type'];
    $sqla="select * from today where type='{$type}'";
    $resa=mysqli_query($dbc,$sqla);
    $re=mysqli_fetch_array($resa);
    ?>
    <div class="login-wrapper" style="margin-top:25%;margin-left: 50%;height: 750px;width: 400px;transform: translate(-50%,-50%);">
    <div class="header">修改活动</div>
    <form class="form-wrapper" action="changeAct.php?type=<?php echo $type;?>" method="POST">
        <input  name=img type="text" placeholder="请输入图片链接" class="input-item" value="<?php echo $re['img'];?>">
        <input  name="title" type="text" placeholder="请输入活动标题" class="input-item" value="<?php echo $re['title'];?>">
        <textarea cols="55" rows="20" name="content"><?php echo $re['content']?></textarea>
        <input class="btn" style="height:50px;line-height: 50px;outline: none;border:none;border-radius: 25px;margin-top: 10px;" type="submit" value="修改">
        <input class="btn" style="height:50px;line-height: 50px;outline: none;border:none;margin-top: 20px;border-radius: 25px;" type="reset">
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $t=$_GET['type'];
    $img=$_POST['img'];
    $content=$_POST['content'];
    $title=$_POST['title'];
    $sql="update today set img='{$img}',title='{$title}',content='{$content}' where type='{$t}'";
    $res=mysqli_query($dbc,$sql);
    if($res==1)
    {
        echo "<script>alert('修改成功！')</script>";
        echo "<script>window.location.href='admin_index.php'</script>";
    }
    else
    {
        echo "<script>alert('修改失败！请重新输入！');</script>";
    }
}
?>
</body>
</html>