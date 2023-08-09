<?php
error_reporting(0);
header('Content-type: text/plain; charset=UTF-8');
date_default_timezone_set("Asia/Shanghai");
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
$json=array(
    array('id'=>'1','name'=>'CCTV16-4K','liveid'=>'cctv16hd4k_15000000'),
    array('id'=>'2','name'=>'CCTV-4K','liveid'=>'cctv4k_15000000'),
    array('id'=>'3','name'=>'欢笑剧场4k','liveid'=>'hxjc4k_15000000'),
    array('id'=>'4','name'=>'CCTV1综合','liveid'=>'cctv1hd8m_8000000'),
    array('id'=>'5','name'=>'CCTV2财经','liveid'=>'cctv2hd8m_8000000'),
    array('id'=>'6','name'=>'CCTV3综艺','liveid'=>'cctv38m_8000000'),
    array('id'=>'7','name'=>'CCTV4国际','liveid'=>'cctv4hd8m_8000000'),
    array('id'=>'8','name'=>'CCTV5体育','liveid'=>'cctv58m_8000000'),
    array('id'=>'9','name'=>'CCTV5⁺体育','liveid'=>'cctv5phd8m_8000000'),
    array('id'=>'10','name'=>'CCTV6电影','liveid'=>'cctv6hd8m_8000000'),
    array('id'=>'11','name'=>'CCTV7军事','liveid'=>'cctv7hd8m_8000000'),
    array('id'=>'12','name'=>'CCTV8电视剧','liveid'=>'cctv8hd8m_8000000'),
    array('id'=>'13','name'=>'CCTV9纪录','liveid'=>'cctv9hd8m_8000000'),
    array('id'=>'14','name'=>'CCTV10科教','liveid'=>'cctv10hd8m_8000000'),
    array('id'=>'15','name'=>'CCTV11戏曲','liveid'=>'cctv11hd8m_8000000'),
    array('id'=>'16','name'=>'CCTV12社会与法','liveid'=>'cctv12hd8m_8000000'),
    array('id'=>'17','name'=>'CCTV13新闻','liveid'=>'cctv13xwhd8m_8000000'),
    array('id'=>'18','name'=>'CCTV14少儿','liveid'=>'cctvsehd8m_8000000'),
    array('id'=>'19','name'=>'CCTV15音乐','liveid'=>'cctv15hd8m_8000000'),
    array('id'=>'20','name'=>'CCTV16奥林匹克','liveid'=>'cctv16hd8m_8000000'),
    array('id'=>'21','name'=>'CCTV17农业农村','liveid'=>'cctv17hd8m_8000000'),
    array('id'=>'22','name'=>'江苏卫视HD','liveid'=>'jswshd8m_8000000'),
    array('id'=>'23','name'=>'广西卫视HD','liveid'=>'gxwshd8m_8000000'),
    array('id'=>'24','name'=>'四川卫视HD','liveid'=>'scwshd_8000000'),
    array('id'=>'25','name'=>'湖南卫视HD','liveid'=>'hunanwshd8m_8000000'),
    array('id'=>'26','name'=>'浙江卫视HD','liveid'=>'zjwshd8m_8000000'),
    array('id'=>'27','name'=>'东方卫视HD','liveid'=>'dfwshd8m_8000000'),
    array('id'=>'28','name'=>'北京卫视HD','liveid'=>'bjwshd8m_8000000'),
    array('id'=>'29','name'=>'天津卫视HD','liveid'=>'tjwshd8m_8000000'),
    array('id'=>'30','name'=>'辽宁卫视HD','liveid'=>'lnwshd8m_8000000'),
    array('id'=>'31','name'=>'安徽卫视HD','liveid'=>'ahwshd8m_8000000'),
    array('id'=>'32','name'=>'黑龙江卫视HD','liveid'=>'hljwshd8m_8000000'),
    array('id'=>'33','name'=>'广东卫视HD','liveid'=>'gdwshd8m_8000000'),
    array('id'=>'34','name'=>'深圳卫视HD','liveid'=>'szwshd8m_8000000'),
    array('id'=>'35','name'=>'湖北卫视HD','liveid'=>'hubeiws8m_8000000'),
    array('id'=>'36','name'=>'吉林卫视HD','liveid'=>'jlwshd8m_8000000'),
    array('id'=>'37','name'=>'山东卫视HD','liveid'=>'sdws8m_8000000'),
    array('id'=>'38','name'=>'江西卫视HD','liveid'=>'jxws8m_8000000'),
    array('id'=>'39','name'=>'河南卫视HD','liveid'=>'hnwshd8m_8000000'),
    array('id'=>'40','name'=>'河北卫视HD','liveid'=>'hbwshd8m_8000000'),
    array('id'=>'41','name'=>'甘肃卫视HD','liveid'=>'gswshd8m_8000000'),
    array('id'=>'42','name'=>'重庆卫视HD','liveid'=>'cqws8m_8000000'),
    array('id'=>'43','name'=>'东南卫视HD','liveid'=>'dnwshd8m_8000000'),
    array('id'=>'44','name'=>'云南卫视HD','liveid'=>'ynwshd8m_8000000'),
    array('id'=>'45','name'=>'贵州卫视HD','liveid'=>'gzwshd8m_8000000'),
    array('id'=>'46','name'=>'海南卫视HD','liveid'=>'hainanwshd8m_8000000'),
    array('id'=>'47','name'=>'欢笑剧场HD','liveid'=>'hxjc8m_8000000'),
    array('id'=>'48','name'=>'劲爆体育HD','liveid'=>'jbtyhd8m_8000000'),
    array('id'=>'49','name'=>'快乐垂钓HD','liveid'=>'klcd8m_8000000'),
    array('id'=>'50','name'=>'金鹰纪实HD','liveid'=>'jyjs8m_8000000'),
    array('id'=>'51','name'=>'戏曲精选HD','liveid'=>'xqjx8m_8000000'),
    array('id'=>'52','name'=>'上海第一财经HD','liveid'=>'dycjhd8m_8000000'),
    array('id'=>'53','name'=>'上视新闻HD','liveid'=>'xwzhhd8m_8000000'),
    array('id'=>'54','name'=>'上海都市HD','liveid'=>'dshd8m_8000000'),
    array('id'=>'55','name'=>'上海纪实HD','liveid'=>'jspdhd_4000000'),//
    array('id'=>'56','name'=>'东方影视HD','liveid'=>'dfyshd8m_8000000'),
    array('id'=>'57','name'=>'五星体育HD','liveid'=>'wxtyhd8m_8000000'),
    array('id'=>'58','name'=>'上视外语HD','liveid'=>'icshd8m_8000000'),
    array('id'=>'59','name'=>'七彩戏剧HD','liveid'=>'qcxjhd8m_8000000'),
    array('id'=>'60','name'=>'上海教育HD','liveid'=>'setvhd_8000000'),
    array('id'=>'61','name'=>'全纪实HD','liveid'=>'qjshd8m_8000000'),
    array('id'=>'62','name'=>'生活时尚HD','liveid'=>'shss8m_8000000'),
    array('id'=>'63','name'=>'新视觉HD','liveid'=>'xsjhd8m_8000000'),
    array('id'=>'64','name'=>'游戏风云HD','liveid'=>'yxfy8m_8000000'),
    array('id'=>'65','name'=>'热门综艺HD','liveid'=>'rmzy8m_8000000'),
    array('id'=>'66','name'=>'超级体育HD','liveid'=>'qcsj8m_8000000'),
    array('id'=>'67','name'=>'健康养生HD','liveid'=>'jkys8m_8000000'),
    array('id'=>'68','name'=>'百变课堂HD','liveid'=>'bbkt8m_8000000'),
    array('id'=>'69','name'=>'看天下精选HD','liveid'=>'ktxjx8m_8000000'),
    array('id'=>'70','name'=>'华语影院HD','liveid'=>'hyyy8m_8000000'),
    array('id'=>'71','name'=>'电竞天堂HD','liveid'=>'djtt8m_8000000'),
    array('id'=>'72','name'=>'青春动漫HD','liveid'=>'qcdm8m_8000000'),
    array('id'=>'73','name'=>'宝宝动画HD','liveid'=>'bbdh8m_8000000'),
    array('id'=>'74','name'=>'星光影院HD','liveid'=>'xgyy8m_8000000'),
    array('id'=>'75','name'=>'谍战剧场HD','liveid'=>'dzjc8m_8000000'),
    array('id'=>'76','name'=>'全球大片HD','liveid'=>'qqdp8m_8000000'),
    array('id'=>'77','name'=>'热门剧场HD','liveid'=>'rmjc8m_8000000'),
    array('id'=>'78','name'=>'陶瓷高清HD','liveid'=>'taocihd_8000000'),
    array('id'=>'79','name'=>'中国教育-1HD','liveid'=>'zgjy1t8m_8000000'),
    array('id'=>'80','name'=>'中国教育-4HD','liveid'=>'zgjy4hd8m_8000000'),
    array('id'=>'81','name'=>'卡酷少儿HD','liveid'=>'kkse8m_8000000'),
    array('id'=>'82','name'=>'纪实科教HD','liveid'=>'dajs8m_8000000'),
    array('id'=>'83','name'=>'茶频道HD','liveid'=>'cpdhdavs8m_8000000'),
    array('id'=>'84','name'=>'足球高清HD','liveid'=>'zqpd8m_8000000'),
    array('id'=>'85','name'=>'炫动卡通HD','liveid'=>'hhxd8m_8000000'),
    array('id'=>'86','name'=>'东方财经HD','liveid'=>'dfcjhd8m_8000000'),
    array('id'=>'87','name'=>'都市剧场HD','liveid'=>'dsjc8m_8000000'),
    array('id'=>'88','name'=>'动漫秀场HD','liveid'=>'dmxc8m_8000000'),
    array('id'=>'89','name'=>'法治天地HD','liveid'=>'fztd8m_8000000'),
    array('id'=>'90','name'=>'金色学堂HD','liveid'=>'jingsepd8m_8000000'),
    array('id'=>'91','name'=>'魅力足球HD','liveid'=>'mlyyhd8m_8000000'),
    );
$json=json_encode($json);
$json=json_decode($json);
if ($type == 'txt') {
  // 密钥正确，将JSON转换为列表
echo '百视5G云,#genre#'.PHP_EOL;
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
    echo '#EXTINF:-1 tvg-id="'.$cid.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="百视5G云",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
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
    "title" =>"百视5G云",
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
  if(empty($_GET['key'])){
$ssid=explode('_',$playurl);
$stream = 'http://ts-gitv-hb-yh.189smarthome.com/live/program/live/'.$ssid[0].'/'.$ssid[1].'/';
//$timestamp = substr(time(), 0, 9) - 7;
$timestamp = intval((time()-50)/10);
$current = "#EXTM3U" . PHP_EOL;
$current .= "#EXT-X-VERSION:3" . PHP_EOL;
$current .= "#EXT-X-TARGETDURATION:3" . PHP_EOL;
$current .= "#EXT-X-MEDIA-SEQUENCE:{$timestamp}" . PHP_EOL;
for ($i = 0; $i < 3; $i++) {
    $timematch = $timestamp . '0';
    $timefirst = date('YmdH', $timematch);
    $current .= "#EXTINF:3," . PHP_EOL;
    $current .= $stream . $timefirst . "/" . $timestamp . ".ts" . PHP_EOL;
    $timestamp = $timestamp + 1;
}
//header("Content-Disposition: attachment; filename=playlist.m3u8");
    $arryList = array();
	$arryCount = preg_match_all('/.*?\.ts/', $current, $arryList);
			for($i = 0; $i < $arryCount; $i++) {
    $current = str_replace($arryList[0][$i],'?id='.$cid.'&key='.Mcrypt::encode($arryList[0][$i],$key), $current);
}
//header('Content-Type:application/vnd.apple.mpegurl');
echo $current;
}else{
   
 $ts=Mcrypt::decode($_GET['key'],$key);
 header('Location:'.$ts);

 }

}}


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
