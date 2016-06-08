<?php
/*
*@通过curl方式获取指定的图片到本地
*@ 完整的图片地址
*@ 要存储的文件名
*/
function getImg($url = "", $filename = "")
{
    //去除URL连接上面可能的引号
    //$url = preg_replace( '/(?:^['"]+|['"/]+$)/', '', $url );
    $hander = curl_init();
    $fp = fopen($filename,'wb');
    curl_setopt($hander,CURLOPT_URL,$url);
    curl_setopt($hander,CURLOPT_FILE,$fp);
    curl_setopt($hander,CURLOPT_HEADER,0);
    curl_setopt($hander,CURLOPT_FOLLOWLOCATION,1);
    //curl_setopt($hander,CURLOPT_RETURNTRANSFER,false);//以数据流的方式返回数据,当为false是直接显示出来
    curl_setopt($hander,CURLOPT_TIMEOUT,60);
    curl_exec($hander);
    curl_close($hander);
    fclose($fp);
    Return true;
}

function creatPath($src1=''){
    
    $path = "imgtep/".substr($src1, -20);
    
    getImg($src1,$path);

    return $path;
}
