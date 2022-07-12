<?php
session_start();
$userid=$_SESSION['userid'];
include ('mysqli_connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>全部书籍</title>
    <link rel="icon" type="image/png/jpg" href="imgs/logo.png">
    <link rel="stylesheet" href="top.css">
    <style>
        body{
            background: url("imgs/adminBG.jpg") no-repeat;
            background-size:cover;
            color: rgb(223, 167, 94);
            background-attachment: fixed;
        }
        table{
            width:1500px
        }
        table.hovertable {
            font-family: verdana,arial,sans-serif;
            font-size:11px;
            color:#333333;
            border-width: 1px;
            border-color: #999999;
            border-collapse: collapse;
            margin-left:50%;
            margin-top:20%;
            transform:translate(-50%,0);
            position:absolute;
        }
        table.hovertable th {
            background-color:#c3dde0;
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #a9c6c9;
        }
        table.hovertable tr {
            background-color:#d4e3e5;
        }
        table.hovertable td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #a9c6c9;
        }
        .inputLabel{
            border-radius: 30px;border-style: none;background-color: rgba(255,255,255,0.85);
        }
        .inputLabel:focus-within{
            border: solid 3px #66ccff;
        }
        .inputLabel::placeholder{
            text-align: center;color: black;outline: none;
        }
        .btn-default{
            background-color: rgba(252, 174, 119, 0.8);
        }
        .btn-default:hover{
            background-color: rgba(252, 124, 32, 0.8);
        }
        .btn-default:active{
            background-color: rgba(252, 174, 119, 0.8);
        }
        .textxg{
            color:blue
        }
        .textsc{
            color:red
        }
        .textjy{
            color: rgb(223, 167, 94);
        }
        .textgh{
            color: rgb(223, 167, 94);
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
<form  action="admin_book.php" method="POST" style="position:absolute;margin-left:50%;margin-top:10%;transform:translate(-50%,0)">
    <div id="query">
        <label ><input  name="bookquery" type="text" placeholder="请输入图书名或图书号" style="height:45px;width:350px;font-size: 16px;text-align: center;outline: none;" class="inputLabel">
        <input type="submit" value="查询" class="btn btn-default" style="height:45px;width:70px;border-radius:20px;outline:none;border:none;font-size: 15px;">
        <input type=button value="下载xls表格" class="btn btn-default" style="height:45px;width:100px;border-radius:20px;outline:none;border:none;font-size: 15px;" onclick="window.location.href='output.php'">
    </div>
</form>


<table  class='hovertable'>
    <tr>
        <th>图书号</th>
        <th>图书名</th>
        <th>作者</th>
        <th>出版社</th>
        <th>ISBN</th>
        <th>语言</th>
        <th>价格</th>
        <th>出版日期</th>
        <th>分类号</th>
        <th>分类名</th>
        <th>书架号</th>
        <th>状态</th>
        <th>修改</th>
        <th>删除</th>
        <th>借阅</th>
    </tr>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $gjc = $_POST["bookquery"];

        $sql="select book_id,name,author,publish,ISBN,introduction,language,price,pubdate,book_info.class_id,class_name,pressmark,state from book_info,class_info where book_info.class_id=class_info.class_id and ( name like '%{$gjc}%' or book_id like '%{$gjc}%')  ;";
    }
    else{
        $sql="select book_id,name,author,publish,ISBN,introduction,language,price,pubdate,book_info.class_id,class_name,pressmark,state from book_info,class_info where book_info.class_id=class_info.class_id ;";
    }
    $res=mysqli_query($dbc,$sql);
    foreach ($res as $row){
        echo "<tr onmouseover=\"this.style.backgroundColor='#ffff66';\" onmouseout=\"this.style.backgroundColor='#d4e3e5';\">";
        echo "<td>{$row['book_id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['author']}</td>";
        echo "<td>{$row['publish']}</td>";
        echo "<td>{$row['ISBN']}</td>";
        echo "<td>{$row['language']}</td>";
        echo "<td>{$row['price']}</td>";
        echo "<td>{$row['pubdate']}</td>";
        echo "<td>{$row['class_id']}</td>";
        echo "<td>{$row['class_name']}</td>";
        echo "<td>{$row['pressmark']}</td>";
         if($row['state']==1) echo "<td style=\"color:green\">在馆</td>"; else if($row['state']==0) echo "<td style=\"color:red\">已借出</td>";else  echo "<td>无状态信息</td>";
        echo "<td><a href='admin_book_edit.php?id={$row['book_id']}' class=\"textxg\" style=\"text-decoration: none;\">修改</a></td>";
        echo "<td><a href='admin_book_del.php?id={$row['book_id']}' class=\"textsc\" style=\"text-decoration: none;\">删除</a></td>";
        if($row['state']==1)echo "<td><a href='admin_book_jiechu.php?id={$row['book_id']}' class=\"textjy\" style=\"text-decoration: none;\">借阅</a></td>";
        if($row['state']==0)echo "<td><a href='admin_book_guihuan.php?id={$row['book_id']}' class=\"textgh\" style=\"text-decoration: none;\">归还</a></td>";
        echo "</tr>";
    };
    ?>
</table>
</body>
</html>