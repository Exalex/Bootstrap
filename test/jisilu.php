<?php
$servername = "localhost";
$username = "root";
$password = "006134";
$conn = new mysqli($servername, $username, $password, "spider");
$conn->query("set names utf8");

$sql = "SELECT newsurl,newstitle,news FROM jisilu where id=(select max(id) from jisilu)";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>排版样式</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!--导航栏-->
<!--<nav class="navbar navbar-default navbar-fixed-top">-->
<!--<div class="container">-->
<!--<div class="navbar-header">-->
<!--<a href="#" class="navbar-brand logo" >-->
<!--<img src="img/logo.png" alt="企训网">-->
<!--</a>-->
<!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">-->
<!--<span class="icon-bar"></span>-->
<!--<span class="icon-bar"></span>-->
<!--<span class="icon-bar"></span>-->
<!--</button>-->
<!--</div>-->
<!--<div class="collapse navbar-collapse" id="navbar-collapse">-->
<!--<ul class="nav navbar-nav navbar-right">-->
<!--<li><a href="index.html" class="glyphicon glyphicon-home"> 首页</a></li>-->
<!--<li><a href="information.html" class="glyphicon glyphicon-list"> 资讯</a></li>-->
<!--<li><a href="case.html" class="glyphicon glyphicon-fire"> 案例</a></li>-->
<!--<li class="active"><a href="about.html" class="glyphicon glyphicon-question-sign"> 关于</a></li>-->
<!--</ul>-->
<!--</div>-->
<!--</div>-->
<!--</nav>-->

<!--大标题-->
<div class="jumbotron">
    <div class="container">
        <hgroup>
            <h1>
                集思录
            </h1>
            <h4>今日热门话题...</h4>
        </hgroup>
    </div>
</div>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-4 column">
            <h3>
                <?php
                echo $row['newstitle'];
                ?>
            </h3>
            <p style="line-height: 30px;border-style: groove;padding: 8px">
                <?php
                $news = $row['news'];
                $news2 = str_replace("-","<br/>",$news);
                $news3 = substr($news2,6);
                echo $news3;
                ?>
            </p>
            <p>
                <a target="_blank" href=<?php echo $row['newsurl']; ?>  style="font-size: 15px;color: #5bc0de;" >
                    看全文
                </a>
            </p>
        </div>
    </div>
</div>


<!--首页底部-->
<!--<footer id="footer">-->
<!--    <div class="container">-->
<!--        <p>金融矩阵 版权所有</p>-->
<!--        <p>沪ICP 备1234 @ 2009-2016</p>-->
<!--    </div>-->
<!--</footer>-->

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--jQuery脚本-->
<script type="text/javascript">


</script>

</body>
</html>