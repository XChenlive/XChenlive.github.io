<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
$txt='測試01,https://sc2022.stream-link.org/tv2306.php?id=c01
測試02,https://sc2022.stream-link.org/tv2306.php?id=c02
翡翠台,https://sc2022.stream-link.org/tv2306.php?id=h01
翡翠台,https://sc2022.stream-link.org/tv2306.php?id=h02
J2台,https://sc2022.stream-link.org/tv2306.php?id=h03
無綫新聞台,https://sc2022.stream-link.org/tv2306.php?id=h04
無綫財經·體育·資訊台,https://sc2022.stream-link.org/tv2306.php?id=h05
無綫新聞台,https://sc2022.stream-link.org/tv2306.php?id=h06
無綫財經·體育·資訊台,https://sc2022.stream-link.org/tv2306.php?id=h07
TVB華語劇台,https://sc2022.stream-link.org/tv2306.php?id=h22
TVB星河台,https://sc2022.stream-link.org/tv2306.php?id=h23
TVB經典劇台,https://sc2022.stream-link.org/tv2306.php?id=h24
Now新聞台,https://sc2022.stream-link.org/tv2306.php?id=h08
港台电视31,https://sc2022.stream-link.org/tv2306.php?id=h09
港台电视32,https://sc2022.stream-link.org/tv2306.php?id=h10
港台电视33,https://sc2022.stream-link.org/tv2306.php?id=h11
中央新聞台,https://sc2022.stream-link.org/tv2306.php?id=h12
香港國際財經台(第一聲道),https://sc2022.stream-link.org/tv2306.php?id=h13
香港國際財經台(第二聲道),https://sc2022.stream-link.org/tv2306.php?id=h14
香港開電視(第一聲道),https://sc2022.stream-link.org/tv2306.php?id=h15
香港開電視(第二聲道),https://sc2022.stream-link.org/tv2306.php?id=h16
香港開電視資訊台,https://sc2022.stream-link.org/tv2306.php?id=h17
鳳凰衛視資訊台,https://sc2022.stream-link.org/tv2306.php?id=h18
鳳凰衛視中文台,https://sc2022.stream-link.org/tv2306.php?id=h19
鳳凰衛視香港台,https://sc2022.stream-link.org/tv2306.php?id=h20
澳門蓮花衛視,https://sc2022.stream-link.org/tv2306.php?id=h21
五星體育,https://sc2022.stream-link.org/tv2306.php?id=e90
緯來體育,https://sc2022.stream-link.org/tv2306.php?id=e91
北京體育休閒,https://sc2022.stream-link.org/tv2306.php?id=e92
ABC News Australia,https://sc2022.stream-link.org/tv2306.php?id=e01
ABC News Live,https://sc2022.stream-link.org/tv2306.php?id=e02
ANN News,https://sc2022.stream-link.org/tv2306.php?id=e03
Asianet News,https://sc2022.stream-link.org/tv2306.php?id=e04
BBC News,https://sc2022.stream-link.org/tv2306.php?id=e05
Bloomberg,https://sc2022.stream-link.org/tv2306.php?id=e06
CBN News,https://sc2022.stream-link.org/tv2306.php?id=e07
CBS News,https://sc2022.stream-link.org/tv2306.php?id=e08
CNA News,https://sc2022.stream-link.org/tv2306.php?id=e09
CNN Live,https://sc2022.stream-link.org/tv2306.php?id=e11
DW News,https://sc2022.stream-link.org/tv2306.php?id=e12
EURO News,https://sc2022.stream-link.org/tv2306.php?id=e13
Fox Live,https://sc2022.stream-link.org/tv2306.php?id=e14
France 24 English,https://sc2022.stream-link.org/tv2306.php?id=e15
GB News,https://sc2022.stream-link.org/tv2306.php?id=e16
Haber Turk,https://sc2022.stream-link.org/tv2306.php?id=e17
NBC News,https://sc2022.stream-link.org/tv2306.php?id=e18
NHK World Japan,https://sc2022.stream-link.org/tv2306.php?id=e19
SKY News,https://sc2022.stream-link.org/tv2306.php?id=e20
CNBC Marathon,https://sc2022.stream-link.org/tv2306.php?id=e10
Radio Ticino,https://sc2022.stream-link.org/tv2306.php?id=e21
Smithsonian Channel,https://sc2022.stream-link.org/tv2306.php?id=e22
Love Nature,https://sc2022.stream-link.org/tv2306.php?id=e23
Lego,https://sc2022.stream-link.org/tv2306.php?id=e24
東森新聞,https://sc2022.stream-link.org/tv2306.php?id=t01
東森財經新聞,https://sc2022.stream-link.org/tv2306.php?id=t02
中天新聞,https://sc2022.stream-link.org/tv2306.php?id=t03
華視新聞,https://sc2022.stream-link.org/tv2306.php?id=t05
中視新聞,https://sc2022.stream-link.org/tv2306.php?id=t06
民視新聞,https://sc2022.stream-link.org/tv2306.php?id=t07
寰宇國際新聞,https://sc2022.stream-link.org/tv2306.php?id=t08
寰宇台灣新聞,https://sc2022.stream-link.org/tv2306.php?id=t09
三立財經新聞,https://sc2022.stream-link.org/tv2306.php?id=t10
三立新聞,https://sc2022.stream-link.org/tv2306.php?id=t11
三立新聞+,https://sc2022.stream-link.org/tv2306.php?id=t12
台視新聞,https://sc2022.stream-link.org/tv2306.php?id=t13
TVBS新聞,https://sc2022.stream-link.org/tv2306.php?id=t14
TVBS財經,https://sc2022.stream-link.org/tv2306.php?id=t15
TVBS歡樂台,https://sc2022.stream-link.org/tv2306.php?id=t16
華視,https://sc2022.stream-link.org/tv2306.php?id=t04
三立台灣,https://sc2022.stream-link.org/tv2306.php?id=t25
三立都會,https://sc2022.stream-link.org/tv2306.php?id=t26
天才衝衝衝,https://sc2022.stream-link.org/tv2306.php?id=t27
中天亞洲台,https://sc2022.stream-link.org/tv2306.php?id=t17
TVBS亞洲台,https://sc2022.stream-link.org/tv2306.php?id=t18
民視HD,https://sc2022.stream-link.org/tv2306.php?id=t19
民視第一台,https://sc2022.stream-link.org/tv2306.php?id=t20
民視台灣台,https://sc2022.stream-link.org/tv2306.php?id=t21
民視綜藝台,https://sc2022.stream-link.org/tv2306.php?id=t22
民視影劇台,https://sc2022.stream-link.org/tv2306.php?id=t23
民視旅遊台,https://sc2022.stream-link.org/tv2306.php?id=t24
東森yoyo,https://sc2022.stream-link.org/tv2306.php?id=t28';
$rows = explode("\n", $txt);
$json = [];

foreach ($rows as $index => $row) {
    $columns = explode(",", $row);
    $json[] = [
        "id" => $index+1,
        "name" => $columns[0],
        "liveid" => $columns[1]
    ];
}
 $json=json_encode($json);
 $json=json_decode($json);
if ($type == 'txt') {
  // 密钥正确，将JSON转换为列表
echo '港澳直播2,#genre#'.PHP_EOL;
  // 输出列表
  foreach ($json as $quity) {
        $cid= $quity->id;
        $name=$quity->name;
        $logo=$quity->logo;
    echo $name.',http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
  }
} elseif ($type == 'm3u') {
  // 密钥正确，将JSON转换为列表
echo '#EXTM3U'.PHP_EOL;
  // 输出列表
  foreach ($json as $quity) {
        $cid= $quity->id;
        $name=$quity->name;
        $logo=$quity->logo;
    echo '#EXTINF:-1 tvg-id="'.$cid.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="港澳直播2",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
  }
} elseif($type == 'json') {
  // 密钥错误，输出错误提示
  foreach ($json as $quity) {
        $cid= $quity->id;
        $name=$quity->name;
        $logo=$quity->logo;
    $liebiao1[]=array(
            'name'=>$name,
    'url'=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.'',
          );
  }
  $liebiao2=array(
    "AppStore" =>"http://".$_SERVER['HTTP_HOST']."/",
    "CreateBy" =>"庸俗的时光",
    "title" =>"港澳直播2",
    "UpDate" =>"2022-09-14 14:02:33",
    "data" =>(
        $liebiao1
    )
);
          die(json_encode($liebiao2, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}else {if(empty($id)){
    //die ('m3u文本订阅:'.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=txt'.PHP_EOL.'JSON订阅'.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=json');
    die ('If you need to access txt, please add type=txt'.PHP_EOL.'Example:http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=txt'.PHP_EOL.'If you need to access json, please add type=json'.PHP_EOL.'Example:http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=json'.PHP_EOL.'Enjoy using');
}else{
    foreach ($json as $quity) {
        $cid= $quity->id;
        $name=$quity->name;
        $logo=$quity->logo;
      if($quity->id==$id){
        $sid=$quity->liveid;
        if($sid){
           $playurl=$sid;
           break;
        }
      }
  }

if(empty($playurl)){die('hello word');}else{
  $playm3u8=curl($playurl)['url'];
  header('Location:'.$playm3u8);
  }

}}
function curl($url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//若给定url自动跳转到新的url,有了下面参数可自动获取新url内容：302跳转
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//设置cURL允许执行的最长秒数。
curl_setopt($ch, CURLOPT_TIMEOUT, 2);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0');
curl_setopt($ch, CURLOPT_REFERER, $bsurl);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$content = curl_exec($ch);
//获取请求返回码，请求成功返回200
$code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
//echo $code . "\n\n";
$headers = curl_getinfo($ch);
curl_close($ch);

return $headers;
}
