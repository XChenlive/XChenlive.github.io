<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
//$json=json_decode(curl('https://www.tdm.com.mo/api/v1.0/program-list/Channel?type=tv'))->data;
//die(json_encode($json, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
$txt='澳視澳門,https://live4.tdm.com.mo/ch1/ch1.live/playlist.m3u8
澳視葡文,https://live4.tdm.com.mo/ch1/ch2.live/playlist.m3u8
澳門資訊,https://live4.tdm.com.mo/ch5/info_ch5.live/playlist.m3u8
澳門體育,https://live4.tdm.com.mo/ch4/sport_ch4.live/playlist.m3u8
澳門綜藝,https://live4.tdm.com.mo/ch6/hd_ch6.live/playlist.m3u8
澳門衛星頻道,https://live4.tdm.com.mo/ch3/ch3.live/playlist.m3u8';
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
echo '澳门频道,#genre#'.PHP_EOL;
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
    echo '#EXTINF:-1 tvg-id="'.$cid.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="澳门频道",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
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
    "title" =>"澳门频道",
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

   //header('Content-Type:application/vnd.apple.mpegurl');
if(empty($_GET['key'])){ 
$data=curl($playurl);
$host= dirname($playurl).'/';
preg_match('/RESOLUTION=1280x720\n?(.*)/',$data,$match);
$m3u8=curl($host.$match[1]);
$arryCount = preg_match_all('/(.*?.ts)/i', $m3u8, $arryList);
	for($i = 0; $i < $arryCount; $i++) {
$m3u8 = str_replace($arryList[0][$i],'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.'&key='.$host.$arryList[0][$i], $m3u8);
	}
echo $m3u8;
  //header('Location:'.$playurl);
}else{
header('Content-Type:video/mp2t');
    $ts=curl($_GET['key']);
	print($ts);
    //$ts=Mcrypt::decode($_GET['key'],$key);
    //header('Location:'.$ts);
}
}} 
function curl($url) {
    $curl = curl_init();
    //1.初始化，创建一个新cURL资源
    $UserAgent = $_SERVER['HTTP_USER_AGENT'];
    curl_setopt($curl, CURLOPT_URL, $url);
    //2.设置URL curl_setopt($ch, CURLOPT_URL, "http://www.lampbrother.net/");
    // 设置超时限制防止死循环
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    //在发起连接前等待的时间，如果设置为0，则无限等待。
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //设定是否显示头信息
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    //启用时会将服务器服务器返回的"Location: "放在header中递归的返回给服务器,设置可以302跳转
    //curl_setopt($curl, CURLOPT_REFERER, "https://www.gstv.com.cn/");
    //构造来路
    curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
    curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
    //gzip压缩内容
    $data = curl_exec($curl);
    // 抓取URL并把它传递给浏览器
    curl_close($curl);
    return $data;
}
