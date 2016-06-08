<?php
require "imgHandle.php";
$servername = "localhost";
$username = "root";
$password = "006134";
$conn = new mysqli($servername, $username, $password, "spider");
$conn->query("set names utf8");

$sql = "SELECT newsurl,newstitle,news FROM jisilu where id=(select max(id) from jisilu)";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sql2 = "SELECT title1,url1,src1,title2,url2,src2,title3,url3,src3,title4,url4,src4,title_red1,title_red2,title_red3,title_red4,title_black1,title_black2,title_black3,title_black4 FROM smzdm where id=(select max(id) from smzdm)";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$src1 = $row2['src1'];
$src2 = $row2['src2'];
$src3 = $row2['src3'];
$src4 = $row2['src4'];
if ($src1 & $src2 & $src3 & $src4){
    $path1 = creatPath($src1);
    $path2 = creatPath($src2);
    $path3 = creatPath($src3);
    $path4 = creatPath($src4);
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>排版样式</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                信息聚合器
            </h1>
            <h4>订阅主题...</h4>
        </hgroup>
    </div>
</div>
<div class="container">
    <div class="row clearfix">
        <!--      集思录-->

        <!--        什么值得买-->
        <div class="col-md-12 " style="float:right;margin-top: 20px;">
            <div class="col-md-4 ">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url1']?>"><img src="<?php echo $path1?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title1']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red1']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black1']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url2']?>"><img src="<?php echo $path2?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title2']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red2']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black2']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4"style="float: right">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url3']?>"><img src="<?php echo $path3?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title3']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red3']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black3']?></p>
                    </div>
                </div>
            </div>
            <div  class="col-md-4" style="float: right">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url4']?>"><img src="<?php echo $path4?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title4']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red4']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black4']?></p>
                    </div>
                </div>
            </div>
            <div  class="col-md-4" style="float: right">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url4']?>"><img src="<?php echo $path4?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title4']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red4']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black4']?></p>
                    </div>
                </div>
            </div>
            <div  class="col-md-4" style="float: right">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url4']?>"><img src="<?php echo $path4?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title4']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red4']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black4']?></p>
                    </div>
                </div>
            </div>
            <div  class="col-md-4" style="float: right">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url4']?>"><img src="<?php echo $path4?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title4']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red4']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black4']?></p>
                    </div>
                </div>
            </div><div  class="col-md-4" style="float: right">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url4']?>"><img src="<?php echo $path4?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title4']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red4']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black4']?></p>
                    </div>
                </div>
            </div><div  class="col-md-4" style="float: right">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url4']?>"><img src="<?php echo $path4?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title4']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red4']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black4']?></p>
                    </div>
                </div>
            </div>
            <div  class="col-md-4" style="float: right">
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-bookmark" style="color: rgb(255, 140, 60);"> 优惠精选</span>
                    <a target="_blank" href="<?php echo $row2['url4']?>"><img src="<?php echo $path4?>" alt=""></a>
                    <div class="caption">
                        <h4><?php echo $row2['title4']?></h4>
                        <span style="color: red;"><?php echo $row2['title_red4']?></span>
                        <p style="border-top: solid 1px lightgray;font-family: 'Microsoft JhengHei Light';margin-top: 6px;padding-top: 6px"><?php echo $row2['title_black4']?></p>
                    </div>
                </div>
            </div>



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
<script src="js/bootstrap.min.js"></script>
<!--jQuery脚本-->
<script type="text/javascript">


</script>

</body>
</html>