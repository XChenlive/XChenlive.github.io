<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$id = $_GET["id"];
$QUALITY = $_GET["q"];
$channel_id = array(
    "tvbs" => "2mCSYvcfhtc",//TVBS新闻
    "ttv" => "xL0ch83RAK8",//台视新闻
    "set" => "FoBfXvlOR6I",//三立新闻
    "ctv" => "TCnaIE_SAtM",//中视新闻
    "ftv" => "P8DRJChuQQQ",//民视新闻
    "ebc" => "R2iMq5LKXco",//东森新闻
    "ebcf" => "ABn_ccXn_jc",//东森财经
    "cti" => "_QbRXRnHMVY",//中天新闻
    "gntv" => "HXcm22-69Og",//寰宇新闻
    "cgtn" => "FGabkYr-Sfs",//CGTN Live
    "nhk" => "f0lYkdA-Gtw",//NHK World
    "fr24" => "h3MuIUNCCzI",//France 24
    "pinhfr" => "8ysjF7BCtRE",//凤凰卫视 60fps
    "cgtnhfr" => "oWwQuAN-KZc",//CGTN 60fps
);

function get_data($url){
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, "facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)");
    curl_setopt($ch, CURLOPT_REFERER, "http://facebook.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$string = get_data('https://www.youtube.com/watch?v=' . $channel_id[$id]);
preg_match_all('/hlsManifestUrl(.*m3u8)/', $string, $matches, PREG_PATTERN_ORDER);
$rawURL = str_replace("\/", "/", substr($matches[1][0], 3));
switch($QUALITY){
	case '301': /*301 =1920x1080 60FPS*/
		$QUALITY_REGEX ='/(https:\/.*\/301\/.*index.m3u8)/';
           	break;
	case '300': /* 300 = 1280x720 60FPS */
		$QUALITY_REGEX ='/(https:\/.*\/300\/.*index.m3u8)/';
	break;
	case '96': /* 96 =1920x1080 */
		$QUALITY_REGEX ='/(https:\/.*\/96\/.*index.m3u8)/';
	break;
	case '95': /* 95 = 1280x720 */
		$QUALITY_REGEX ='/(https:\/.*\/95\/.*index.m3u8)/';
	break;
	case '94': /* 94 = 960x480 */
		$QUALITY_REGEX ='/(https:\/.*\/94\/.*index.m3u8)/';
	break;
	default:
		$QUALITY_REGEX ='/(https:\/.*\/96\/.*index.m3u8)/';
}
preg_match_all($QUALITY_REGEX, get_data($rawURL), $playURL, PREG_PATTERN_ORDER);
//header("Content-type: application/vnd.apple.mpegurl");
//header("Location: " . $playURL[1][0]);
if(empty($_GET['key'])){
echo$playstream=$playURL[1][0];
$current =get_data($playstream);
    $arryList = array();
	$arryCount = preg_match_all('/.*?\.ts/', $current, $arryList);
			for($i = 0; $i < $arryCount; $i++) {
    $current = str_replace($arryList[0][$i],'?id='.$id.'&q='.$QUALITY.'&key='.$arryList[0][$i], $current);
			}
			//print_r($current);
}else{
   
 //echo $ts=get_data($_GET['key']);
}
