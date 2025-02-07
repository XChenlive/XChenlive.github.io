<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
date_default_timezone_set("Asia/Shanghai");
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
$txt='华丽台,Wlt
欢喜台,Huahee
Astro QJ,Quanjia
TVB翡翠台,Tvbjade
TVB星河台,Xinhe
TVBJ2,j2_twn
TVB珍珠台,pearl_twn
TVB亚洲,Tvbasia
TVB Entertainment,Tvbentertainment
TVB Classic,Tvbclassic
爱奇艺,Qiyi
翡翠台,jade_twn
iNews新闻台,inews_twn
凤凰香港,hkphoenix_twn
凤凰卫视,phoenixtv_hd
凤凰资讯,phoenixinfo_hd
ViuTV,viu1_twn
ViuTV6,viusix_twn
卫视中文台 Star Movies Chinese,weishichinese_twn
美亚电影,meiyamovie_twn
爱尔达影剧台,eltayingju_twn
爱尔达综合台,eltazonghe_twn
星卫电影,xingwei_movie
爱尔达影剧,eltayingju_twn
HBO-HD,hbohd_twn
HBO-HITS,hbohits_twn
HBO-Family,Hbofamily
Hollywood-Movies,hollywoodmovies_twn
龙华戏剧,lunghuaxiju_twn
龙华戏剧台,lunghuaxiju_twn
龙华经典台,lunghuajingdian_twn
龙华偶像,lunghuaidol_twn
龙详时代,lungxiangtime_twn
东森洋片,ettvwestern
龙华洋片,lunghuawestern_twn
纬来日本台,videolandjapan
纬来电影台,videolandmovie_twn
纬来体育台,videolandsport
纬来综合台,videolandzonghe
纬来育乐,videolandyule
纬来精彩,videolandspecial_twn
东森电影,ettvmovie
Movies-Now,moviesnow_raj
Star-Movies,starmovies_raj
博斯运动-1,bosisport1_twn
博斯运动-2,bosisport2_twn
博斯高球-1,bosigolf1_twn
博斯高球-2,bosigolf2_twn
博斯网球,bositennis_twn
博斯无限,bosiunlimited_twn
Astro体育,Assp4
Astro Cricket,Acricket
Astro Golf,Agolf
NBA TV,nbatv
天空体育F1,tiankongf1
Skysports Cricket,tiankongcricket
Skysports EPL,tiankongepl
Skysports Golf,tiankonggolf
Skysports Main Event,tiankongmain
Skysports News,tiankongnews
Skysports Mix,tiankongmix
爱尔达体育2台,eltasport2_twn
爱尔达体育3台,eltasport3_twn
WWE,Wwe';
$rows = explode("\n", $txt);
$json = [];

foreach ($rows as $index => $row) {
    $columns = explode(",", $row);
    $json[] = [
        "id" => str_pad($index+1, 3, '0', STR_PAD_LEFT),
        "name" => $columns[0],
        "liveid" => $columns[1]
    ];
}
 $json=json_encode($json);
 $json=json_decode($json);
 foreach ($json as $quity) {
	$cid= $quity->id;
	$name=$quity->name;
	$logo=$quity->logo;
	$playdata='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid;
	$txtdata.=$name.','.$playdata.PHP_EOL;
	$m3udata.='#EXTINF:-1 tvg-id="'.$name.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="杂烩台",'.$name.PHP_EOL.$playdata.PHP_EOL;
	$liebiao[]=array(
	            'name'=>$name,
	            'url'=>$playdata,
	          );
	$jsondata=array(
	    "AppStore" =>"http://".$_SERVER['HTTP_HOST']."/",
	    "CreateBy" =>"庸俗的时光",
	    "title" =>"杂烩台",
	    "UpDate" =>"2022-09-14 14:02:33",
	    "data" =>(
	        $liebiao
	    )
	);
}
if ($type == 'txt') {
	echo '杂烩台,#genre#'.PHP_EOL;
	echo $txtdata;
} elseif ($type == 'm3u') {
	// 密钥正确，将JSON转换为列表
	echo '#EXTM3U'.PHP_EOL;
	echo $m3udata;
} elseif($type == 'json') {
	die(json_encode($jsondata, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
} else {
	if(empty($id)) {
	echo '#EXTM3U'.PHP_EOL;
	echo $m3udata;
		//die ('m3u文本订阅:'.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=txt'.PHP_EOL.'JSON订阅'.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=json');
		/*die ('If you need to access txt, please add type=txt'.PHP_EOL.'Example:http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=txt'.PHP_EOL.'If you need to access json, please add type=json'.PHP_EOL.'Example:http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?type=json'.PHP_EOL.'Enjoy using');*/
	} else {
		foreach ($json as $quity) {
			$cid= $quity->id;
			$name=$quity->name;
			$logo=$quity->logo;
			if($quity->id==$id) {
				$sid=$quity->liveid;
				if($sid) {
					$playurl=$sid;
					break;
				}
			}
		}
if(empty($playurl)){die('hello word');}else{
        $seed = "tvata nginx auth module";
		$uri = '/'.$playurl.'/playlist.m3u8';
		$tid = "mc42afe745533";
		$t = strval(intval(time()/150));
		$str = $seed.$uri.$tid.$t;
		$tsum = md5($str);

		//echo$link = 'httpyy://198.16.80.178:8278/'.$playurl.'/playlist.m3u8?tid='.$tid.'&ct='.$t.'&tsum='.$tsum;
		$link1 = 'http://198.16.100.186:8278/'.$playurl.'/playlist.m3u8?tid='.$tid.'&ct='.$t.'&tsum='.$tsum;
		$host=dirname($link1).'/';
		//echo$link = 'httpyy://50.7.234.10:8278/'.$playurl.'/playlist.m3u8?tid='.$tid.'&ct='.$t.'&tsum='.$tsum;
		
		//$link = 'http://'.$_SERVER['HTTP_HOST'].'/sss/'.$playurl.'/playlist.m3u8?tid='.$tid.'&ct='.$t.'&tsum='.$tsum;
		//$host = dirname($link).'/';
		//$host = 'http://'.$_SERVER['HTTP_HOST'].'/sss/'.$playurl.'/';*/
		$m3u8 = curl($link1,[
		    'Header'=>[
		        'CLIENT-IP: 127.0.0.1',
		        'X-FORWARDED-FOR: 127.0.0.1',
		        'User-Agent: Dalvik/2.1.0 (Linux; U; Android 12; 22101316C Build/SP1A.210812.016)'
		        ],
		    ]);
		    if(empty($_GET['key'])){ 
		    $arryList = array();
			$arryCount = preg_match_all('/(.*?.ts.*)/i', $m3u8, $arryList);
			for($i = 0; $i < $arryCount; $i++) {
            $m3u8 = str_replace($arryList[0][$i], 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.'&key='.$arryList[0][$i], $m3u8);
			}
			header('Content-Type:application/vnd.apple.mpegurl');
            print($m3u8);
		        
		    }else{
		      echo $ts=curl($host.$_GET['key'],[
		    'Header'=>[
		        'CLIENT-IP: 127.0.0.1',
		        'X-FORWARDED-FOR: 127.0.0.1',
		        'User-Agent: Dalvik/2.1.0 (Linux; U; Android 12; 22101316C Build/SP1A.210812.016)'
		        ],
		    ]);  
		    }
  }

}}

function curl($url, $paras = array())
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if (@$paras['Header']) {
        $Header = $paras['Header'];
    } else {
        $Header[] = "Accept:*/*";
        $Header[] = "Accept-Encoding:gzip,deflate,sdch";
        $Header[] = "Accept-Language:zh-CN,zh;q=0.8";
        $Header[] = "Connection:close";
    }
    curl_setopt($ch, CURLOPT_HTTPHEADER, $Header);
    if (@$paras['ctime']) { // 连接超时
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $paras['ctime']);
    } else {
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    }
    if (@$paras['rtime']) { // 读取超时
        curl_setopt($ch, CURLOPT_TIMEOUT, $paras['rtime']);
    }
    if (@$paras['post']) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $paras['post']);
    }
    if (@$paras['header']) {
        curl_setopt($ch, CURLOPT_HEADER, true);
    }
    if (@$paras['cookie']) {
        curl_setopt($ch, CURLOPT_COOKIE, $paras['cookie']);
    }
    if (@$paras['refer']) {
        if ($paras['refer'] == 1) {
            curl_setopt($ch, CURLOPT_REFERER, 'http://m.qzone.com/infocenter?g_f=');
        } else {
            curl_setopt($ch, CURLOPT_REFERER, $paras['refer']);
        }
    }
    if (@$paras['ua']) {
        curl_setopt($ch, CURLOPT_USERAGENT, $paras['ua']);
    } else {
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36");
    }
    if (@$paras['nobody']) {
        curl_setopt($ch, CURLOPT_NOBODY, 1);
    }
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if (@$paras['GetCookie']) {
        curl_setopt($ch, CURLOPT_HEADER, 1);
        $result = curl_exec($ch);
        preg_match_all("/Set-Cookie: (.*?);/m", $result, $matches);
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($result, 0, $headerSize); //状态码
        $body = substr($result, $headerSize);
        $ret = [
            "Cookie" => $matches, "body" => $body, "header" => $header, 'code' => curl_getinfo($ch, CURLINFO_HTTP_CODE)
        ];
        curl_close($ch);
        return $ret;
    }
    $ret = curl_exec($ch);
    if (@$paras['code']) {
        $SCODE = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $ret = $SCODE;
    }
    if (@$paras['loadurl']) {
        $Headers = curl_getinfo($ch);
        //$ret = $Headers['redirect_url'];
        $ret = $Headers['url'];
    }
    curl_close($ch);
    return $ret;
}
