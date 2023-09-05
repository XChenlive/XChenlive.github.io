<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
$return_type=1;
$url_array=array(
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2135&tmpId=2067&page=1',//一起看电影
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2135&tmpId=4061&page=1',//tvb
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2135&tmpId=4183&page=1',//搞笑
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2135&tmpId=4201&page=1',//古装
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2135&tmpId=2079&page=1',//电视剧
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2135&tmpId=1011&page=1',//综艺
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2135&tmpId=5461&page=1',//科技
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=1663&tmpId=116&page=1',//星秀舞蹈
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=1663&tmpId=1341&page=1',//颜值
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=1663&tmpId=27&page=1',//新秀
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=1663&tmpId=3595&page=1',//女团
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=1663&tmpId=115&page=1',//好声音
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=1663&tmpId=5847&page=1',//FM
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2168&tmpId=3487&page=1',//颜值热舞
    'https://live.cdn.huya.com/livelist/game/tagLivelist?gameId=2168&tmpId=5411&page=1',//官推
);
// 初始化curl multi handler
 $res=curl($url_array);
 //$json=array_merge_recursive($res[0],$res[1],$res[2],$res[3],$res[4],$res[5],$res[6],$res[7],$res[8],$res[9],$res[10],$res[11],$res[12],$res[13],$res[14]);
$json = array();
for($i = 0; $i <= 14; $i++)
       {
        $json=array_merge_recursive($json, $res[$i]);
}
 //var_dump($res[1]);
 //var_dump($json);
 //echo json_encode($json, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
if ($type == 'txt') {
echo '虎牙直播,#genre#'.PHP_EOL;
foreach ($json as $quity) {
        $cid= $quity->profileRoom;
        if(empty($quity->roomName)){
            $name=$quity->nick;
        }else{
            $name=$quity->roomName;
        }
        $logo=$quity->avatar180;
    echo $name.',http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
  }
} elseif ($type == 'm3u') {
echo '#EXTM3U'.PHP_EOL;
foreach ($json as $quity) {
        $cid= $quity->profileRoom;
        if(empty($quity->roomName)){
            $name=$quity->nick;
        }else{
            $name=$quity->roomName;
        }
        $logo=$quity->avatar180;
    echo '#EXTINF:-1 tvg-id="'.$cid.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="虎牙直播",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
  }
} elseif($type == 'json') {
  // 密钥错误，输出错误提示
  foreach ($json as $quity) {
        $cid= $quity->profileRoom;
        if(empty($quity->roomName)){
            $name=$quity->nick;
        }else{
            $name=$quity->roomName;
        }
        $logo=$quity->avatar180;
    $liebiao1[]=array(
            'name'=>$name,
    'url'=>'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.'',
          );
  }
  $liebiao2=array(
    "AppStore" =>"http://".$_SERVER['HTTP_HOST']."/",
    "CreateBy" =>"庸俗的时光",
    "title" =>"虎牙直播",
    "UpDate" =>"2022-09-14 14:02:33",
    "data" =>(
        $liebiao1
    )
);
          die(json_encode($liebiao2, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}else {if(empty($id)){
die ('If you need to access txt, please add type=txt'.PHP_EOL.'Example:http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=txt'.PHP_EOL.'If you need to access json, please add type=json'.PHP_EOL.'Example:http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=json'.PHP_EOL.'Enjoy using');
}else{
    foreach ($json as $quity) {
        $cid= $quity->profileRoom;
        if(empty($quity->roomName)){
            $name=$quity->nick;
        }else{
            $name=$quity->roomName;
        }
        $logo=$quity->avatar180;
      if($quity->profileRoom==$id){
        //$sid=zcurl('http://47.108.187.198:8899/huya/gg.php?id='.$quity->profileRoom);
        $sid=$quity->profileRoom;
        if($sid){
           //$playurl='http://aldirect.corp-hls.huya.com/src/'.$sid.'.m3u8?wsiphost=ipdbme';
           $playurl=$sid;
           break;
        }
      }
  }
$uid = json_decode(get_content("https://udblgn.huya.com/web/anonymousLogin", "uid"), true)["data"]["uid"];
$roomurl = "https://m.huya.com/" . $playurl;
$res = get_content($roomurl, "mobile");
$reg = "/\<script\> window.HNF_GLOBAL_INIT = (.*) \<\/script\>/i";
preg_match($reg, $res, $realres);
$realdata = json_decode($realres[1], true);
$realurl = format($realdata, $uid);
//echo json_encode($realurl, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
 $mediaurl = $realurl["flv"]['hwcdn'];
 header('Location:'.$mediaurl);
}}
function curl($url_array)
{
	if (!is_array($url_array)) {
		return false;
	}
	//$defaults = [];
	//$wait_usec = intval($wait_usec);
	//$data = array();
	$handle = array();
	$running = 0;
	$mh = curl_multi_init();
	$i = 0;
	foreach ($url_array as $url) {
		$ch = curl_init();
		//curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		//curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept-Encoding" => "gzip, deflate, br", "Connection" => "keep-alive", "Host" => "webcast3-normal-c-hl.amemv.com", "Content-Type" => "application/json;charset=utf-8"]);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		//curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 7);
		$protocol = substr($url, 0, 5);
		if ('https' == $protocol) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		}
		curl_multi_add_handle($mh, $ch);
		$handle[$i++] = $ch;
	}
	do {
		curl_multi_exec($mh, $running);
		/*if ($wait_usec > 0) {
			usleep($wait_usec);
		}*/
	} while ($running > 0);

	foreach ($handle as $i => $ch) {
		$content = curl_multi_getcontent($ch);
		$data[$i] = (curl_errno($ch) == 0) ? $content : false;
		//if( $return_type == '1'){
			$data[$i] = json_decode($data[$i])->data->datas;
	//}
	}
	foreach ($handle as $ch) {
		curl_multi_remove_handle($mh, $ch);
	}
	curl_multi_close($mh);

	return $data;
	//return json_decode($data)->data->datas;
} 
function get_content($apiurl, $flag)
{
    if ($flag == "mobile") {
        $headers = array(
            'Content-Type: application/x-www-form-urlencoded',
            'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1'
        );
    } else {
        $arr = [
            "appId" => 5002,
            "byPass" => 3,
            "context" => "",
            "version" => "2.4",
            "data" => new stdClass(),
        ];
        $postData = json_encode($arr);
        $headers = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($postData),
            'upgrade-insecure-requests: 1',
            'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36'
        );
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
    if ($flag == "uid") {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    }
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

function get_uuid()
{
    $now = intval(microtime(true) * 1000);
    $rand = rand(0, 1000) | 0;
    return intval(($now % 10000000000 * 1000 + $rand) % 4294967295);
}

function process_anticode($anticode, $uid, $streamname)
{
    parse_str($anticode, $q);
    $q["ver"] = "1";
    $q["sv"] = "2110211124";
    $q["seqid"] = strval(intval($uid) + intval(microtime(true) * 1000));
    $q["uid"] = strval($uid);
    $q["uuid"] = strval(get_uuid());
    $ss = md5("{$q["seqid"]}|{$q["ctype"]}|{$q["t"]}");
    $q["fm"] = base64_decode($q["fm"]);
    $q["fm"] = str_replace(["$0", "$1", "$2", "$3"], [$q["uid"], $streamname, $ss, $q["wsTime"]], $q["fm"]);
    $q["wsSecret"] = md5($q["fm"]);
    unset($q["fm"]);
    if (array_key_exists("txyp", $q)) {
        unset($q["txyp"]);
    }
    return http_build_query($q);
}

function format($livearr, $uid)
{
    $stream_info = ['flv' => [], 'hls' => []];
    $cdn_type = ['HY' => 'hycdn', 'AL' => 'alicdn', 'TX' => 'txcdn', 'HW' => 'hwcdn', 'HS' => 'hscdn', 'WS' => 'wscdn'];
    foreach ($livearr["roomInfo"]["tLiveInfo"]["tLiveStreamInfo"]["vStreamInfo"]["value"] as $s) {
        if ($s["sFlvUrl"]) {
            $stream_info["flv"][$cdn_type[$s["sCdnType"]]] = $s["sFlvUrl"] . '/' . $s["sStreamName"] . '.' . $s["sFlvUrlSuffix"] . '?' . process_anticode($s["sFlvAntiCode"], $uid, $s["sStreamName"]);
        }
        if ($s["sHlsUrl"]) {
            $stream_info["hls"][$cdn_type[$s["sCdnType"]]] = $s["sHlsUrl"] . '/' . $s["sStreamName"] . '.' . $s["sHlsUrlSuffix"] . '?' . process_anticode($s["sHlsAntiCode"], $uid, $s["sStreamName"]);
        }
    }
    return $stream_info;
}
