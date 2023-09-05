<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
//,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000488
$txt='CCTV1综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000488
CCTV2财经,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000061
CCTV3综艺,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000062
CCTV4中文国际,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000063
CCTV5体育,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000064
CCTV5+体育赛事,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000246
CCTV6电影,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000065
CCTV6国防军事,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000127
CCTV8电视剧,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000066
CCTV9纪录,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000128
CCTV10科教,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000129
CCTV11戏曲,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000130
CCTV12社会与法,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000131
CCTV13新闻,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000067
CCTV14少儿,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000132
CCTV15音乐,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000133
CCTV17农业农村,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000204
CCTV电视指南,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000164
CCTV女性时尚,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000176
CCTV世界地理,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000177
中央新影-老故事,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000166
中央新影-发现之旅,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000151
书画,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000180
中华特产,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000158
中国天气,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000160
央广购物,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000079
CGTN,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000134
CGTN,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000305
CGTN西班牙语,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000306
CGTN法语,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000307
CGTN阿拉伯语,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000308
CGTN俄语,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000309
CETV1,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000135
CETV4,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000492
北京卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000083
东方卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000093
天津卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000084
重庆卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000107
黑龙江卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000095
吉林卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000097
延边卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000117
辽宁卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000058
内蒙古卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000110
宁夏卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000118
甘肃卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000119
青海卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000111
陕西卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000512
农林卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000122
河北卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000108
山西卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000109
山东卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000099
安徽卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000096
河南卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000104
湖北卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000102
湖南卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000086
江西卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000098
江苏卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000085
浙江卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000094
广东卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000092
深圳卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000100
广西卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000116
云南卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000115
贵州卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000101
四川卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000103
新疆卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000150
兵团卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000124
西藏卫视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000121
北京纪实科教,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000113
卡酷少儿,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000106
四海钓鱼,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000229
车迷频道,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000146
环球旅游,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000147
生态环境,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000149
优优宝贝,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000153
百姓健康,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000219
聚鲨环球精选,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000078
法治天地,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000162
新视觉,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000249
汽摩,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000168
篮球,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000237
家有购物,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000082
家庭理财,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000139
新动漫,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000140
网络棋牌,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000141
游戏竞技,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000142
电子体育,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000143
北方导视,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000187
辽宁都市,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000068
辽宁影视剧,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000070
辽宁北方,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000071
辽宁体育,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000611
辽宁生活,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000073
辽宁教育青少,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000075
辽宁经济,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000076
辽宁公共,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000077
沈阳新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000059
大连新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000273
鞍山新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000274
抚顺综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000275
丹东新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000276
锦州新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000277
营口新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000278
阜新综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000279
辽阳新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000280
铁岭新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000281
朝阳新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000282
盘锦新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000283
葫芦岛新闻综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000284
本溪综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000312
连山区综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000491
龙港区综合,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000490
风尚音乐,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000294
山东教育,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000112
收藏天下,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000155
国学频道,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000169
文物宝库,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000165
武术世界,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000182
茶频道,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000181
金鹰卡通,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000105
陶瓷,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000175
靓妆,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000179
财富天下,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000231
家政,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000167
天元围棋,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000144
摄影频道,http://httplive.slave.bfgd.com.cn:14311/playurl?playtype=live&protocol=hls&accesstoken=R621C86FCU319FA04BK783FB5EBIFA29A0DEP2BF4M340CAC5V0Z339C9W16D7E5AFCA1ADFD1&playtoken=31603DJJUNKICCS10&programid=4200000222';
$rows = explode(PHP_EOL, $txt);
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
echo '北方广电,#genre#'.PHP_EOL;
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
    echo '#EXTINF:-1 tvg-id="'.$cid.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="北方广电",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
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
    "title" =>"北方广电",
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
/*$seq = intval((time() - 1691667085) / 5);
$current = "#EXTM3U" . PHP_EOL;
$current .= "#EXT-X-VERSION:3" . PHP_EOL;
$current .= "#EXT-X-TARGETDURATION:6" . PHP_EOL;
$current .= "#EXT-X-MEDIA-SEQUENCE:{$seq}" . PHP_EOL;
for ($i = 0; $i < 3; $i++) {
    $current .= "#EXTINF:5.000000," . PHP_EOL;
    $current .= $playurl."&redirect=1&hls_segment=4_0_1_2_3_4_" . $seq . ".ts" . PHP_EOL;
    $seq = $seq + 1;
}
//header('Content-Type:application/vnd.apple.mpegurl');
echo $current;*/
//echo $playurl;
  //header('Location:'.$playurl);
  $playm=curl($playurl);
  echo preg_replace('/http:\/\/.*?\//','http://httplive.slave.bfgd.com.cn:14311/',$playm);
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
