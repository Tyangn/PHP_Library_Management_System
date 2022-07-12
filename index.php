<?php
session_start();
if(isset($_SESSION['userid']))
{
    unset($_SESSION['userid']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png/jpg" href="imgs/logo.png">
    <title>图书馆登录</title>
    <style>
        body{
            background-image:url("imgs/loginBG.jpg");
            display: flex;
            justify-content: center;
        }
        .a{
            position:relative;
            top: 100px;
            width: 1100px;
            height: 550px;
            box-shadow: 0 5px 15px rgba(0,0,0,.8);
            display: flex;
        }
        .b{
            width: 800px;
            height: 550px;
            background-image: url("201515-158211451517f1.jpg");
            background-size: cover;
        }
        .c{
            width: 300px;
            height: 550px;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .d{
            width: 250px;
            height: 500px;
        }
        .d h1{
            font: 900 30px '';
        }
        .e{
            width: 230px;
            margin: 20px 0;
            outline: none;
            border: 0;
            padding: 10px;
            border-bottom: 3px solid rgb(80,80,170);
            font: 900 16px '';
        }
        .f{
            float: right;
            margin: 10px 0;
        }
        .g{
            position: absolute;
            margin: 20px;
            bottom: 40px;
            display: block;
            width: 200px;
            height: 60px;
            font: 900 30px '';
            text-decoration: none;
            line-height: 50px;
            border-radius: 30px;
            background-image: linear-gradient(to left,
            #9c88ff,#3cadeb);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="a">
        <div class="b"></div>
        <div class="c">
            <div class="d">
                <h1>图书馆登录</h1>
                <form action="login_check.php" method="POST" role="form">
                <input type="text" class="e" name="account" placeholder="请输入读者证号或管理员账号">
                <input type="password" class="e" name="pass" placeholder="请输入密码">
                <input type="text" class="e" name="capt" placeholder="请输入验证码" style="width:120px">
                <img id="captcha_img" src="captcha.php" style="width:100px;height:50px" onclick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()">
                <input class="g" type="submit" value="登录">
            </form>
            </div>
        </div>
    </div>
</body>
</html>