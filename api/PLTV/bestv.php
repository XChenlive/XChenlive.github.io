<?php
error_reporting(0);
header('Content-type: text/plain; charset=UTF-8');
date_default_timezone_set("Asia/Shanghai");
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
$playseek = $_GET["playseek"];
$time=explode("-",$playseek);
$starttime=$time[0];
$endtime=$time[1];
$txt='CCTV16-4K,cctv16hd4k_15000000
CCTV-4K,cctv4k_15000000
欢笑剧场4k,hxjc4k_15000000
CCTV1综合,cctv1hd8m_8000000
CCTV2财经,cctv2hd8m_8000000
CCTV3综艺,cctv38m_8000000
CCTV4中文国际,cctv4hd8m_8000000
CCTV5体育,cctv58m_8000000
CCTV5+体育赛事,cctv5phd8m_8000000
CCTV6电影,cctv6hd8m_8000000
CCTV7国防军事,cctv7hd8m_8000000
CCTV8电视剧,cctv8hd8m_8000000
CCTV9纪录,cctv9hd8m_8000000
CCTV10科教,cctv10hd8m_8000000
CCTV11戏曲,cctv11hd8m_8000000
CCTV12社会与法,cctv12hd8m_8000000
CCTV13新闻,cctv13xwhd8m_8000000
CCTV14少儿,cctvsehd8m_8000000
CCTV15音乐,cctv15hd8m_8000000
CCTV16奥林匹克,cctv16hd8m_8000000
CCTV17农业农村,cctv17hd8m_8000000
江苏卫视,jswshd8m_8000000
广西卫视,gxwshd8m_8000000
四川卫视,scwshd_8000000
湖南卫视,hunanwshd8m_8000000
浙江卫视,zjwshd8m_8000000
东方卫视,dfwshd8m_8000000
北京卫视,bjwshd8m_8000000
天津卫视,tjwshd8m_8000000
辽宁卫视,lnwshd8m_8000000
安徽卫视,ahwshd8m_8000000
黑龙江卫视,hljwshd8m_8000000
广东卫视,gdwshd8m_8000000
深圳卫视,szwshd8m_8000000
湖北卫视,hubeiws8m_8000000
吉林卫视,jlwshd8m_8000000
山东卫视,sdws8m_8000000
江西卫视,jxws8m_8000000
河南卫视,hnwshd8m_8000000
河北卫视,hbwshd8m_8000000
甘肃卫视,gswshd8m_8000000
重庆卫视,cqws8m_8000000
东南卫视,dnwshd8m_8000000
云南卫视,ynwshd8m_8000000
贵州卫视,gzwshd8m_8000000
海南卫视,hainanwshd8m_8000000
欢笑剧场,hxjc8m_8000000
劲爆体育,jbtyhd8m_8000000
快乐垂钓,klcd8m_8000000
金鹰纪实,jyjs8m_8000000
戏曲精选,xqjx8m_8000000
上海第一财经,dycjhd8m_8000000
上视新闻,xwzhhd8m_8000000
上海都市,dshd8m_8000000
上海纪实,jspdhd_4000000
东方影视,dfyshd8m_8000000
五星体育,wxtyhd8m_8000000
上视外语,icshd8m_8000000
七彩戏剧,qcxjhd8m_8000000
上海教育,setvhd_8000000
全纪实,qjshd8m_8000000
生活时尚,shss8m_8000000
新视觉,xsjhd8m_8000000
游戏风云,yxfy8m_8000000
热门综艺,rmzy8m_8000000
超级体育,qcsj8m_8000000
健康养生,jkys8m_8000000
百变课堂,bbkt8m_8000000
看天下精选,ktxjx8m_8000000
华语影院,hyyy8m_8000000
电竞天堂,djtt8m_8000000
青春动漫,qcdm8m_8000000
宝宝动画,bbdh8m_8000000
星光影院,xgyy8m_8000000
谍战剧场,dzjc8m_8000000
全球大片,qqdp8m_8000000
热门剧场,rmjc8m_8000000
陶瓷高清,taocihd_8000000
中国教育-1,zgjy1t8m_8000000
中国教育-4,zgjy4hd8m_8000000
卡酷少儿,kkse8m_8000000
纪实科教,dajs8m_8000000
茶频道,cpdhdavs8m_8000000
足球高清,zqpd8m_8000000
炫动卡通,hhxd8m_8000000
东方财经,dfcjhd8m_8000000
都市剧场,dsjc8m_8000000
动漫秀场,dmxc8m_8000000
法治天地,fztd8m_8000000
金色学堂,jingsepd8m_8000000
魅力足球,mlyyhd8m_8000000
上海浦东,hhse_2500000
三沙卫视,sswshd8m_8000000
CETV2,cetv2_2500000
CGTN标清,ottcctvnews_1300000
CGTN高清,cctvnews_2500000
福建新闻,fjxwhd8m_8000000
福建综合,fjzhhd4m_4000000
福建电视剧,fjdsjhd4m_4000000
福建体育,fjtyhd4m_4000000
福建公共,fjgghd4m_4000000
福建旅游,fjlyhd4m_4000000
福建少儿,fjsehd4m_4000000
福建经济,fjjjshhd4m_4000000
海峡卫视,hxwshd4m_4000000';
$rows = explode("\n", $txt);
$json = [];

foreach ($rows as $index => $row) {
    $columns = explode(",", $row);
    $json[] = [
        "id" => str_pad($index+1, 3, '0', STR_PAD_LEFT),
        //"id" => $index+1,
        "name" => $columns[0],
        "liveid" => $columns[1]
    ];
}
//$stream = "http://219.151.31.38/liveplay-kk.rtxapp.com/live/program/live/{$array[0]}/{$array[1]}/";
//221.178.111.99
//221.178.111.104
//219.151.26.108
//219.151.136.13
//219.151.137.26//不跳台
$json=json_encode($json);
$json=json_decode($json);
if ($type == 'txt') {
  // 密钥正确，将JSON转换为列表
echo '百事可乐(可回看),#genre#'.PHP_EOL;
  // 输出列表
  foreach ($json as $quity) {
        $cid= $quity->id;
        $name=$quity->name;
        $logo=$quity->logo;
        //echo $name.','.$quity->liveid.PHP_EOL;
    echo $name.',http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
    //echo $name.',http://'.$_SERVER['HTTP_HOST'].'/PLTV/3/224/3221221'.$cid.'/index.m3u8'.PHP_EOL;
  }
} elseif ($type == 'm3u') {
  // 密钥正确，将JSON转换为列表
echo '#EXTM3U'.PHP_EOL;
  // 输出列表
  foreach ($json as $quity) {
        $cid= $quity->id;
        $name=$quity->name;
        $logo=$quity->logo;
    echo '#EXTINF:-1 tvg-id="'.$name.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="百事可乐(可回看)",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.'&/PLTV/hls.smil'.PHP_EOL;
    //echo '#EXTINF:-1 tvg-id="'.$name.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="百事可乐(可回看)",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].'/PLTV/3/224/3221221'.$cid.'/index.m3u8'.PHP_EOL;
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
    //'url'=>'http://'.$_SERVER['HTTP_HOST'].'/PLTV/3/224/3221221'.$cid.'/index.m3u8'
          );
  }
  $liebiao2=array(
    "AppStore" =>"http://".$_SERVER['HTTP_HOST']."/",
    "CreateBy" =>"庸俗的时光",
    "title" =>"百事可乐(可回看)",
    "UpDate" =>"2022-09-14 14:02:33",
    "data" =>(
        $liebiao1
    )
);
          die(json_encode($liebiao2, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
          //$jdata=json_encode($liebiao2, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
          //file_put_contents('5gyuntv.json',$jdata);
          //header('Location:'.'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/5gyuntv.json');
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
$ssid=explode('_',$playurl);

//$stream = 'http://dongfang5g-mobile-v51-live.bestvcdn.com.cn/EHAIGWQCEFRXP5TG6G54LST3J6LZ2V3PJFPV6WW4GZC4F7ZIBBSPLYUDDV46644WZXQ2QWJA5FGN252VZOYAKDDV7EUZSV3O44ATLVGAV53UMODSXFIXIVHR6I5J3GSGIEH3LI5IEJLZFGZUQE6M3ELKYORRIXB35JQRTSEVU33752V2RWFQ====/live/program/live/'.$ssid[0].'/'.$ssid[1].'/';
//$stream = 'http://dongfang5g-mobile-v51-live.bestvcdn.com.cn/37CCJ4A4BXVE5A7VOZC3OJVU3A4UGYI6GPC2MRVMPMEKAKHW24KNJQ72HNVTRXSK5AIO2YXJZQUH3WMFYNHI6HYTKEMVFRPKZZ4XIOJ2KMXVQC6CPNHM25AWYTQOZWYEBQJ6PJMQSM5UOIUETLZLXMY2OBCXDHG3ZRPAQ4EN26HAW7GAIXZQ====/live/program/live/'.$ssid[0].'/'.$ssid[1].'/';//5g
//$stream = 'http://fjnetv51.live.bestvcdn.com.cn/WSB4YCCRBYZWKMWBBXFDAT36OTJ42K6IG7TP5RIHNHXKBRHRWUCSD43ZXCQMILSDT2EJABEBC7M62SLFPOSPY7FWOQGVYNV4GIYJUXK2JB3R2IRU5MAMHBGPX3CVUJRN/live/program/live/'.$ssid[0].'/'.$ssid[1].'/';//福建
//http://58.222.53.42/fjnetv51.live.bestvcdn.com.cn/0/live/program/live/fjzhhd4m/4000000/mnf.m3u8
//$stream = 'http://111.31.123.78/liveplay-kk.rtxapp.com/live/program/live/'.$ssid[0].'/'.$ssid[1].'/';
$stream = 'http://ts-gitv-hb-yh.189smarthome.com/live/program/live/'.$ssid[0].'/'.$ssid[1].'/';
//http://live-gitv-nm-yh.189smarthome.com
//http://live-gitv-nx-yh.189smarthome.com
//http://live-gitv-sc-yh.189smarthome.com
//$stream = 'http://110.80.139.96/liveplay-kk.rtxapp.com/live/program/live/'.$ssid[0].'/'.$ssid[1].'/';
//$stream = 'http://shuhuohbbak.live51.bestvcdn.com.cn/live/program/live/'.$ssid[0].'/'.$ssid[1].'/';//ka
if($playseek){
$start_timestamp = strtotime($starttime)/10; // 起始时间戳  
$end_timestamp = strtotime($endtime)/10 - 1; // 结束时间戳  
$timestamp = $start_timestamp; // 初始时间戳  

  
$current = "#EXTM3U" . PHP_EOL;  
$current .= "#EXT-X-VERSION:3" . PHP_EOL;  
$current .= "#EXT-X-TARGETDURATION:10" . PHP_EOL;  
$current .= "#EXT-X-MEDIA-SEQUENCE:{$timestamp}" . PHP_EOL;  
  
while ($timestamp <= $end_timestamp) {  
    $timematch = $timestamp;  
    $timefirst = date('YmdH', strtotime($starttime));  
    $current .= "#EXTINF:10," . PHP_EOL;  
    $current .= $stream . $timefirst . "/" . $timestamp . ".ts" . PHP_EOL;
    $timestamp += 1; // 增加时间戳，以10秒为间隔  
}  
$current .= "#EXT-X-ENDLIST" . PHP_EOL;
header('Content-Type:application/vnd.apple.mpegurl');
echo $current;
    
}else{
//$timestamp = substr(time(), 0, 9) - 7;
$timestamp = intval((time()-50)/10);
$current = "#EXTM3U" . PHP_EOL;
$current .= "#EXT-X-VERSION:3" . PHP_EOL;
$current .= "#EXT-X-TARGETDURATION:10" . PHP_EOL;
$current .= "#EXT-X-MEDIA-SEQUENCE:{$timestamp}" . PHP_EOL;
for ($i = 0; $i < 3; $i++) {
    $timematch = $timestamp . '0';
    $timefirst = date('YmdH', $timematch);
    $current .= "#EXTINF:10," . PHP_EOL;
    $current .= $stream . $timefirst . "/" . $timestamp . ".ts" . PHP_EOL;
    $timestamp = $timestamp + 1;
}
//header("Content-Disposition: attachment; filename=playlist.m3u8");
/*if(empty($_GET['key'])){
    $arryList = array();
	$arryCount = preg_match_all('/.*?\.ts/', $current, $arryList);
			for($i = 0; $i < $arryCount; $i++) {
    $current = str_replace($arryList[0][$i],'?id='.$cid.'&key='.Mcrypt::encode($arryList[0][$i],$key), $current);
}
header('Content-Type:application/vnd.apple.mpegurl');
echo $current;
}else{
   
 $ts=Mcrypt::decode($_GET['key'],$key);
 header('Location:'.$ts);

 }*/
header('Content-Type:application/vnd.apple.mpegurl');
echo $current;}
}}
}
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
    //curl_setopt($curl, CURLOPT_REFERER, "https://tvzb-hw.ahtv.cn/");
    //构造来路
    curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
    curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
    //gzip压缩内容
    $data = curl_exec($curl);
    // 抓取URL并把它传递给浏览器
    curl_close($curl);
    return $data;
}

class Mcrypt{
	private static $default_key = 'a!takA:dlmcldEv,e';
	
	/**
	 * 字符加密，一次一密,可定时解密有效
	 * 
	 * @param string $string 原文
	 * @param string $key 密钥
	 * @param int $expiry 密文有效期,单位s,0 为永久有效
	 * @return string 加密后的内容
	 */
	public static function encode($string,$key = '', $expiry = 0){
		$ckeyLength = 4;
		$key = md5($key ? $key : self::$default_key); //解密密匙
		$keya = md5(substr($key, 0, 16));		 //做数据完整性验证  
		$keyb = md5(substr($key, 16, 16));		 //用于变化生成的密文 (初始化向量IV)
		$keyc = substr(md5(microtime()), - $ckeyLength);
		$cryptkey = $keya . md5($keya . $keyc);  
		$keyLength = strlen($cryptkey);
		$string = sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string . $keyb), 0, 16) . $string;
		$stringLength = strlen($string);
 
		$rndkey = array();	
		for($i = 0; $i <= 255; $i++) {	
			$rndkey[$i] = ord($cryptkey[$i % $keyLength]);
		}
 
		$box = range(0, 255);	
		// 打乱密匙簿，增加随机性
		for($j = $i = 0; $i < 256; $i++) {
			$j = ($j + $box[$i] + $rndkey[$i]) % 256;
			$tmp = $box[$i];
			$box[$i] = $box[$j];
			$box[$j] = $tmp;
		}	
		// 加解密，从密匙簿得出密匙进行异或，再转成字符
		$result = '';
		for($a = $j = $i = 0; $i < $stringLength; $i++) {
			$a = ($a + 1) % 256;
			$j = ($j + $box[$a]) % 256;
			$tmp = $box[$a];
			$box[$a] = $box[$j];
			$box[$j] = $tmp; 
			$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
		}
		$result = $keyc . str_replace('=', '', base64_encode($result));
		$result = str_replace(array('+', '/', '='),array('-', '_', '.'), $result);
		return $result;
	}
 
	/**
	 * 字符解密，一次一密,可定时解密有效
	 * 
	 * @param string $string 密文
	 * @param string $key 解密密钥
	 * @return string 解密后的内容
	 */
	public static function decode($string,$key = '')
	{
		$string = str_replace(array('-', '_', '.'),array('+', '/', '='), $string);
		$ckeyLength = 4;
		$key = md5($key ? $key : self::$default_key); //解密密匙
		$keya = md5(substr($key, 0, 16));		 //做数据完整性验证  
		$keyb = md5(substr($key, 16, 16));		 //用于变化生成的密文 (初始化向量IV)
		$keyc = substr($string, 0, $ckeyLength);
		$cryptkey = $keya . md5($keya . $keyc);  
		$keyLength = strlen($cryptkey);
		$string = base64_decode(substr($string, $ckeyLength));
		$stringLength = strlen($string);
 
		$rndkey = array();	
		for($i = 0; $i <= 255; $i++) {	
			$rndkey[$i] = ord($cryptkey[$i % $keyLength]);
		}
 
		$box = range(0, 255);
		// 打乱密匙簿，增加随机性
		for($j = $i = 0; $i < 256; $i++) {
			$j = ($j + $box[$i] + $rndkey[$i]) % 256;
			$tmp = $box[$i];
			$box[$i] = $box[$j];
			$box[$j] = $tmp;
		}
		// 加解密，从密匙簿得出密匙进行异或，再转成字符
		$result = '';
		for($a = $j = $i = 0; $i < $stringLength; $i++) {
			$a = ($a + 1) % 256;
			$j = ($j + $box[$a]) % 256;
			$tmp = $box[$a];
			$box[$a] = $box[$j];
			$box[$j] = $tmp; 
			$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
		}
		if ((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0)
		&& substr($result, 10, 16) == substr(md5(substr($result, 26) . $keyb), 0, 16)
		) {
			return substr($result, 26);
		} else {
			return '';
		} 
	}
}
function inter($str, $start, $end)
{
    $wd2 = '';
    if ($str && $start) {
        $arr = explode($start, $str);
        if (count($arr) > 1) {
            $wd = $arr[1];
            if ($end) {
                $arr2 = explode($end, $wd);
                if (count($arr2) > 1) {
                    $wd2 = $arr2[0];
                } else {
                    $wd2 = $wd;
                }
            } else {
                $wd2 = $wd;
            }
        }
    }
    return $wd2;
}
