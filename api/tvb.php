<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
$header=array(
    'CLIENT-IP: 127.0.0.1',
    'X-FORWARDED-FOR: 127.0.0.1',
  );
$json = array(
    //array('id'=>'1','name'=>'TVB-翡翠台','liveid'=>'I-J'),
    //array('id'=>'2','name'=>'TVB-J2','liveid'=>'I-J2'),
    array('id'=>'3','name'=>'無線新聞台','liveid'=>'C'),
    array('id'=>'4','name'=>'無線新聞台·海外版','liveid'=>'I-NEWS'),
    array('id'=>'5','name'=>'無線財經體育資訊台','liveid'=>'I-FINA'),
    array('id'=>'6','name'=>'事件直播頻道1','liveid'=>'NEVT1'),
    array('id'=>'7','name'=>'事件直播頻道2','liveid'=>'NEVT2'),
/*
    .php?id=0 翡翠台
    .php?id=1 J2
    .php?id=2 無線新聞台
    .php?id=3 無線新聞台576P
    .php?id=4 無線新聞台·海外版
    .php?id=5 無線新聞台·海外版360P
    .php?id=6 無線財經體育資訊台·海外版
    .php?id=7 無線財經體育資訊台·海外版360P
    .php?id=8 事件直播頻道1
    .php?id=9 事件直播頻道1 360P
    .php?id=10 事件直播頻道2
    .php?id=11 事件直播頻道2 360P
*/
);
$json=json_encode($json);
$json=json_decode($json);
if ($type == 'txt') {
  // 密钥正确，将JSON转换为列表
echo '香港TVB,#genre#'.PHP_EOL;
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
    echo '#EXTINF:-1 tvg-id="'.$cid.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="香港TVB",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
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
    "title" =>"香港TVB",
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
  $playm3u8=json_decode(curl('https://inews-api.tvb.com/news/checkout/live/hd/ott_'.$playurl.'_h264?profile=safari',$header))->content->url->hd;
  //$playm3u8 = preg_replace('/&p=(.*?)$/','',$playm3u8);
  header('Location:'.$playm3u8);
  //echo curl('https://inews-api.tvb.com/news/checkout/live/hd/ott_'.$playurl.'_h264?profile=safari',$header);
}} 

function curl($url,$header,$data=null){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
if(!empty($data)){
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  }
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
