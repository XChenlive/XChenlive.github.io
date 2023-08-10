<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$key="@_._@_@_._@_@_._@";
$url = isset($_GET['url'])?$_GET['url']:'';
$zhurl='https://everydaytv.top';
$header=array(
    'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 15_1_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Mobile/15E148 Safari/604.1',
  );
$ss=curl($url,$header);
preg_match('/<h1[^>]*>(.*?)<\/h1>/', $ss, $matches);
preg_match('/iframe src="(.*?)" width="(.*?)" height="(.*?)" style="(.*?)"/',$ss,$x);
$as=curl($zhurl.$x[1],$header);
preg_match('/var str=de\\("([^"]+)"\\)/', $as, $y);
preg_match('/replace\\(\\/(.*?)\\/g/', $as, $z);
$str = base64_decode(de(str_replace($z[1],'M',$y[1])));
if($str){
$liebiao=array(
            'Code'=>200,
            'ChannelName'=>$matches[1],
            'ChannelUrl'=>$str,
          );
}else{$liebiao=array(
            'Code'=>400,
            'message'=>'fail',
          );}    
    //header('Location:'.$str);
die(json_encode($liebiao, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
function de($str) {
$str = preg_replace("/~/", "A", $str);
$str = preg_replace("/:/", "B", $str);
$str = preg_replace("/-/", "C", $str);
$str = preg_replace("/@/", "D", $str);
$str = preg_replace("/#/", "F", $str);
$str = preg_replace("/%/", "G", $str);
$str = preg_replace("/'/", "H", $str);
$str = preg_replace("/&/", "J", $str);
$str = preg_replace("/\*/", "K", $str);
$str = preg_replace("/\?/", "L", $str);
$str = preg_replace("/;/", "N", $str);
$str = preg_replace("/!/", "S", $str);
$str = preg_replace("/_/", "V", $str);
$str = preg_replace("/\)/", "X", $str);
$str = preg_replace("/\(/", "Z", $str);
return $str;
}
function curl($url,$header,$data=null){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
if(!empty($data)){
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  }
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
