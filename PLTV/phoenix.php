<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
$header=array(
    'Host: m.fengshows.com',
    'client-lang: zh-CN',
    'Connection: keep-alive',
    'fengshows-client: app(ios,5040617);iPhone13,4;15.1.1',
    'Accept: application/json',
    'User-Agent: FengWatch/5.4.6 (iPhone; iOS 15.1.1; Scale/3.00)',
    'Accept-Language: en-us',
    'token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiJjMGU2MTY0MC1jZjkzLTExZWQtODJkZS01ZjcxZjEzYTdlNDgiLCJuYW1lIjoi5rip5p-U55qE6ZuoIiwidmlwIjowLCJqdGkiOiJlLWZaT2hycEoiLCJyZWdpc3RyYXRpb25faWQiOiIxNDFmZTFkYTllNDc2NDk4MDNiIiwiaWF0IjoxNjkxNzY3MjA0LCJleHAiOjE2OTQzNTkyMDR9.tySLM_W-4POAI3SwG3CGn57T8ZM8fcYaRi-bOhqRXrQ',
    'Accept-Encoding: gzip, deflate, br',
  );
$json = array(
    array(
        "id" => "1",
        "name" => "凤凰中文",
        "logo" => "https://x0.ifengimg.com/cmpp/2021/0305/f0d776a8b34c97bsize7_w78_h78.png",
        //"live" => "https://playtimeshift-live.ifeng.com/timeshift/live/06OLEGEGM4G/timeshift.m3u8?txKbps=702&delay=300"//rtmp://playtv-live.ifeng.com/live/06OLEGEGM4G
        "live" => json_decode(curl('https://m.fengshows.com/api/v3/hub/live/auth-url?live_id=f7f48462-9b13-485b-8101-7b54716411ec&live_qa=FHD',$header))->data->live_url
        ),    
    array(
        "id" => "2",
        "name" => "凤凰资讯",
        "logo" => "https://x0.ifengimg.com/cmpp/2021/0305/a4e3c82a9cb0a7fsize10_w78_h78.png",
        //"live" => "https://playtimeshift-live.ifeng.com/timeshift/live/06OLEEWQKN4/timeshift.m3u8?txKbps=702&delay=300"//rtmp://playtv-live.ifeng.com/live/06OLEEWQKN4
        "live" => json_decode(curl('https://m.fengshows.com/api/v3/hub/live/auth-url?live_id=7c96b084-60e1-40a9-89c5-682b994fb680&live_qa=FHD',$header))->data->live_url
        )
        ,    
    array(
        "id" => "3",
        "name" => "凤凰香港",
        "logo" => "https://img0.baidu.com/it/u=3522686180,1864219391&fm=253&fmt=auto&app=138&f=JPEG?w=322&h=201",
        "live" => json_decode(curl('https://m.fengshows.com/api/v3/hub/live/auth-url?live_id=15e02d92-1698-416c-af2f-3e9a872b4d78&live_qa=FHD',$header))->data->live_url
        )
);
$json=json_encode($json);
$json=json_decode($json);
if ($type == 'txt') {
  // 密钥正确，将JSON转换为列表
echo '凤凰卫视,#genre#'.PHP_EOL;
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
    echo '#EXTINF:-1 tvg-id="'.$cid.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="凤凰卫视",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
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
    "title" =>"凤凰卫视",
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
        $sid=$quity->live;
        if($sid){
           $playurl=$sid;
           break;
        }
      }
  }
   //echo $playurl;
  header('Location:'.$playurl);

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
