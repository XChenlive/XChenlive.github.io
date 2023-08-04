<?php
error_reporting(0);
header('Content-Type:text/json;charset=UTF-8');
$key="@_._@_@_._@_@_._@";
$id = isset($_GET['id'])?$_GET['id']:'';
$type = $_GET['type'];
$json = array(
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/76f6ac22de1631dce56550d51c9469bb.png','id'=>'75','name'=>'CCTV-1 综合','liveid'=>'cctv1'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/e657b56596d96fffff3074eba0a738f0.png','id'=>'97','name'=>'CCTV-2 财经','liveid'=>'cctv2'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/7342c95efd04ed9793cbfc5a0a8c879e.png','id'=>'98','name'=>'CCTV-3 综艺','liveid'=>'cctv3'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/e0163c90dfbd0e5f61b4211a690fc9f6.png','id'=>'99','name'=>'CCTV-4 中文国际','liveid'=>'cctv4'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/066bacb565742da8fbd5a0c7028084db.png','id'=>'100','name'=>'CCTV-5 体育','liveid'=>'cctv5'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c33edddbe29ec9143d428f27d4a646ac.png','id'=>'101','name'=>'CCTV-6 电影','liveid'=>'cctv6'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c80decf1aaac9eb5b55d262293d22567.png','id'=>'102','name'=>'CCTV-7 国防军事','liveid'=>'cctv7'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/da83cb27fd0848fb6ba28c79974b6867.png','id'=>'103','name'=>'CCTV-8 电视剧','liveid'=>'cctv8'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/f5a5867f230cbb1ed3dcd3bd690e9be4.png','id'=>'105','name'=>'CCTV-9 纪录','liveid'=>'cctv9'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/224d871be82883fc071ce82b2fbc8978.png','id'=>'106','name'=>'CCTV-10 科教','liveid'=>'cctv10'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/5b37d3f796bacd161fc8ad525fdfbfd9.png','id'=>'107','name'=>'CCTV-11 戏曲','liveid'=>'cctv11'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/a0fd933f26f3573d5049c50e109c41b4.png','id'=>'108','name'=>'CCTV-12 社会与法','liveid'=>'cctv12'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/053124d7e916a14c60e7cb77cd95bd0f.png','id'=>'109','name'=>'CCTV-13 新闻','liveid'=>'cctv13'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/a79b5b3bb88b512ce968a369ac193176.png','id'=>'110','name'=>'CCTV-14 少儿','liveid'=>'cctv14'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/3639c6aaa5151cb9d7b75d5994046e3f.png','id'=>'111','name'=>'CCTV-15 音乐','liveid'=>'cctv15'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/504d70fb569134a353f5ffc39ceb0229.png','id'=>'112','name'=>'CCTV-16 奥林匹克','liveid'=>'cctv16'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/3dc3e477aba3405133386eee71238a40.png','id'=>'113','name'=>'CCTV-17 农业农村','liveid'=>'cctv17'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/dc090d2903d93841e3a322cb8e1ff6e9.png','id'=>'114','name'=>'CCTV-5+ 体育赛事','liveid'=>'cctv5plus'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/290ebbfaed1914c1de1b752359f49421.png','id'=>'116','name'=>'湖南卫视','liveid'=>'hunan'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/904ac9e8ca1d53d171b0119d98df71f1.png','id'=>'134','name'=>'南方卫视','liveid'=>'nanfang'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/47ceafd9cf44cccd24a129ae2a62c0ea.png','id'=>'117','name'=>'浙江卫视','liveid'=>'zhejiang'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/cbeb656f088d3cab170d886c74c31f86.png','id'=>'119','name'=>'江苏卫视','liveid'=>'jiangsu'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/181eb4f3053e6c94e4206704c4074492.png','id'=>'140','name'=>'深圳卫视','liveid'=>'shenzhen'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/65a07c81762d75b5dfb15e87aba4b5b6.png','id'=>'248','name'=>'广东卫视','liveid'=>'guangdong'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/12bcd007d60ac36a7236475a27960705.png','id'=>'123','name'=>'甘肃卫视','liveid'=>'gansu'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/bc40658602043d05d7d41f5b5690ecc2.png','id'=>'118','name'=>'东方卫视','liveid'=>'dongfang'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/cb492997db7349599890321d13790ec7.png','id'=>'122','name'=>'福建海峡卫视','liveid'=>'fujianhaixia'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/58293d3dfee292fe584261f617ca31f2.png','id'=>'121','name'=>'东南卫视','liveid'=>'dongnan'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/f17a70863e213abac648cf2c0975fa87.png','id'=>'129','name'=>'黑龙江卫视','liveid'=>'heilongjiang'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/83df61a38e9619fcf473dd9fc25f2710.png','id'=>'128','name'=>'河北卫视','liveid'=>'hebei'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/cddf68286ede702507f089e5aa8ae7e5.png','id'=>'138','name'=>'山东卫视','liveid'=>'shandong'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c773f7c6705b79b31dd5402eb688e0f4.png','id'=>'292','name'=>'河南卫视','liveid'=>'henan'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/f414ec22f12993e13996639d34c14c62.png','id'=>'141','name'=>'四川卫视','liveid'=>'sichuan'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/74fc5d74452ea644913a950977fca5d2.png','id'=>'133','name'=>'辽宁卫视','liveid'=>'liaoning'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/54689a36ae39c43655c984143adfb058.png','id'=>'293','name'=>'青海卫视','liveid'=>'qinghai'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/511cdb6f94db861ace7f246f55cacb36.png','id'=>'125','name'=>'广西卫视','liveid'=>'guangxi'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/b53bb38bf456ebc9d20be7922ea10a70.png','id'=>'126','name'=>'贵州卫视','liveid'=>'guizhou'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/ee5ca106d68ac8f503af86c701ad9427.png','id'=>'143','name'=>'厦门卫视','liveid'=>'xiamen'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/0e674400a99bc3dd9bba3a90e6f86957.png','id'=>'145','name'=>'西藏卫视','liveid'=>'xizang'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/4c6794058ccefe2d561823a849d84430.png','id'=>'146','name'=>'云南卫视','liveid'=>'yunnan'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/8debab5a161889613e07cf8555433463.png','id'=>'139','name'=>'山西卫视','liveid'=>'shanxi'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/1e4b95da850b6b9c0bead92047ef2660.png','id'=>'120','name'=>'重庆卫视','liveid'=>'chongqing'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/d7b25866d437441782e7a316614d8484.png','id'=>'291','name'=>'安徽卫视','liveid'=>'anhui'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/cced15e2301aefcc56374669b8841cf6.png','id'=>'131','name'=>'江西卫视','liveid'=>'jiangxi'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/718b049d79afb39fab491d4c9d0abb59.png','id'=>'135','name'=>'内蒙古卫视','liveid'=>'neimenggu'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/95f170d56a00f1eb078055322cf85aaf.png','id'=>'127','name'=>'海南卫视','liveid'=>'hainan'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/95d03fedb9867e96ea69aa59d198ae5b.png','id'=>'130','name'=>'湖北卫视','liveid'=>'hubei'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/7b7e7e72f91a764a35c74abbf5eeceb6.png','id'=>'144','name'=>'新疆卫视','liveid'=>'xinjiang'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/5f766f08b644f9914250b66c7ecb9d2c.png','id'=>'137','name'=>'陕西卫视','liveid'=>'shaanxi'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/ae4cc844873c10620a98d5610afdceb9.png','id'=>'142','name'=>'天津卫视','liveid'=>'tianjin'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/3011fd583d4a12fddceb9bff10f5729d.png','id'=>'136','name'=>'宁夏卫视','liveid'=>'ningxia'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/2394d416aabb7865ed790faefd263ec5.png','id'=>'115','name'=>'北京卫视','liveid'=>'beijing'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c97c03243af4d641d4e25f4ef87cb3cc.png','id'=>'132','name'=>'吉林卫视','liveid'=>'jilin'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/399c9f39670f0184e9f47486da2225ac.png','id'=>'155','name'=>'TVB 翡翠台','liveid'=>'feicui'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/50369f61dd95ed0757f891893415ae3d.png','id'=>'278','name'=>'TVB 无线新闻台','liveid'=>'tvb-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-25/83fa11d0d5cedb3a1208c2ddd625780a.png','id'=>'548','name'=>'TVB 星河台','liveid'=>'tvb-xinghe'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-06-09/fec7afd2671662023e43442dc004c594.png','id'=>'564','name'=>'TVB 娱乐新闻台','liveid'=>'TVB ylxw'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/2db307befa8363babede83dd83097733.png','id'=>'323','name'=>'TVB 经典台','liveid'=>'tvb-classic'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/04ef63fdad37dd502fcfd016b9a9c49b.png','id'=>'279','name'=>'TVB 无线财经体育资讯台','liveid'=>'tvb-finance'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-06-09/747ac1f702ac416718f7258366ea2ce7.png','id'=>'566','name'=>'TVB 粤语片台','liveid'=>'tvb-yueyu'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/1c6d11dd96fb687d6e2dbadb50b6e158.png','id'=>'153','name'=>'TVB 明珠台','liveid'=>'pearl'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-06-09/e10f4078e1d6a35f129726a3aeceea89.png','id'=>'567','name'=>'TVB 亚洲剧台','liveid'=>'tvb-asia-drama'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-19/9d46e98dcc8dbfebba0f184041ba6ec8.png','id'=>'428','name'=>'TVB 华语剧台','liveid'=>'tvb-drama'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/28d6845d4a7c5bf1d883812771ef296a.png','id'=>'228','name'=>'凤凰卫视','liveid'=>'phtv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/a2ba87c3a92d8c3405cdd499f02b62c4.png','id'=>'149','name'=>'凤凰卫视 资讯台','liveid'=>'phtv-info'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/f91bf4be0368c384d6b89fee973fe19f.png','id'=>'148','name'=>'凤凰卫视 中文台','liveid'=>'phtv-cn'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/ebb5fbfd2d6beb46775014731f5781a3.png','id'=>'324','name'=>'凤凰卫视 香港台','liveid'=>'phtv-hk'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/825246738b4d937fa3e4adb3492a6f35.png','id'=>'173','name'=>'Now 财经台','liveid'=>'now-finance'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-07-19/6d9ebc3d2ac68cb96754cfd821ed7d67.png','id'=>'583','name'=>'Now 华剧台','liveid'=>'nowhjt'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-06-05/a759c098f343a0d786e82e6e87b430ec.png','id'=>'565','name'=>'Now 星影台','liveid'=>'now-baogu-superstars'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-26/56162888526c89dd07f29ee0855d8c0a.png','id'=>'558','name'=>'Now 爆谷台','liveid'=>'baogu-movies'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/10bc585d63a7412efe5fb0c2ad16138d.png','id'=>'389','name'=>'天映频道 HD','liveid'=>'celestial'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/b0d62f754541d971b77027f5fe72962c.png','id'=>'376','name'=>'天映经典','liveid'=>'cccm'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/0eaa193be35dd1c988cb0b5f71c2a6a1.png','id'=>'152','name'=>'J2','liveid'=>'j2'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/073d7fa599cf9e6949d1a9c47450defd.png','id'=>'154','name'=>'ViuTV','liveid'=>'viutv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c643fd19a43b9bd717dac14fe37c9657.png','id'=>'280','name'=>'ViuTV6','liveid'=>'viutv6'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/a40676e3892cb653fe17391534ccacfe.png','id'=>'283','name'=>'HOY TV','liveid'=>'hoytv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c9887a22769a3efd48eed67bdb4cb071.png','id'=>'297','name'=>'HOY 资讯台','liveid'=>'hoy-info'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-17/e71736a532525f498ac213159f799699.png','id'=>'231','name'=>'澳门莲花卫视','liveid'=>'lotustv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/bb4ec9fc1d0b012e97e31d1ba20ca5e8.png','id'=>'281','name'=>'港台电视 31','liveid'=>'rthk31'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/a40bcf74cd0220c02dac0d6a252588d7.png','id'=>'282','name'=>'港台电视 32','liveid'=>'rthk32'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/f50526acd0e99026ca4766ae29a84277.png','id'=>'319','name'=>'澳门资讯','liveid'=>'amzx'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/29ea29b790092c9a8add3a0e684f6f78.png','id'=>'320','name'=>'澳视澳门','liveid'=>'asam'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/b4b9eda704de79aea3b6c532719f452c.png','id'=>'284','name'=>'香港国际财经台','liveid'=>'hkibc'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c05565c60a84f492db45e27425b1f001.png','id'=>'330','name'=>'中天综合台','liveid'=>'ctitv36'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/9ffc0ecc6a1995900630ea2eda4ab88e.png','id'=>'331','name'=>'中天亚洲台','liveid'=>'cti-asia'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/13128ee3ad19c9b26d3484ba55c05906.png','id'=>'549','name'=>'纬来日本','liveid'=>'videoland-japan'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/c13bbedc8023c62e2d2e34d7171727c4.png','id'=>'550','name'=>'纬来综合台','liveid'=>'videoland'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-18/f503185e6adce0a93335be7396c70269.png','id'=>'391','name'=>'TVBS Asia','liveid'=>'tvbs-asia'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/70fda4dde38d46532b07675a6de8e95a.png','id'=>'491','name'=>'东森综合台','liveid'=>'ebc-ettv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/96b6fb40724f3fefed649f457dbefc33.png','id'=>'339','name'=>'东森超视 HD','liveid'=>'ebc-supertv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/9192739a88bbcc951393db9af80b307c.png','id'=>'518','name'=>'台视','liveid'=>'ttv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/d7c3a4c3d53f9f74d75324b973818ce9.png','id'=>'489','name'=>'八大综合台','liveid'=>'gtv28'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/3daf3fd593161fe583f20e0f37646c0f.png','id'=>'553','name'=>'八大第一台','liveid'=>'gtv27'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/441d57a2232bf1ff9f4e6ecb1060ca07.png','id'=>'299','name'=>'中视 HD','liveid'=>'ctv-hd'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/145339891c6f7a3b10c419e5609eecad.png','id'=>'516','name'=>'中视','liveid'=>'ctv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/083c995ab55bae1a27326cd45d35c859.png','id'=>'517','name'=>'华视','liveid'=>'cts'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/82ceb1a252ff880a28437eb96faf9346.png','id'=>'554','name'=>'ELTA 综合','liveid'=>'elta-tv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/bbf7de5abf4b2ec22dc3677245594a6b.png','id'=>'490','name'=>'客家电视台','liveid'=>'hakkatv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/5cd054e867c79b3b44148a223bff521b.png','id'=>'327','name'=>'公视3台','liveid'=>'pts3'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/544ec39a29335b6ddd858cdcb314cdd5.png','id'=>'326','name'=>'公视','liveid'=>'pts'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c1554ffd0e9d53c23b876fb106ff27ea.png','id'=>'341','name'=>'靖天国际台','liveid'=>'jtgj'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-18/db88abb55834d8b0864ba681c3f4d80a.png','id'=>'295','name'=>'大爱一台','liveid'=>'daai1'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/3047fff0f5a07dd0c3a4fc9958f24335.png','id'=>'245','name'=>'大爱二台','liveid'=>'daai2'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/bc5aca03df0b8481f2f0d1d90167c9d1.png','id'=>'242','name'=>'中天新闻','liveid'=>'cti-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/d47922aa38afaebce601c441ad172cb4.png','id'=>'514','name'=>'TVBS HD','liveid'=>'tvbs-hd'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/b4555f5a3a2c872195304987e9f4f324.png','id'=>'157','name'=>'TVBS 新闻台','liveid'=>'tvbs-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/90050ed8b153419ad48c29c1f610d5ab.png','id'=>'521','name'=>'东森新闻','liveid'=>'ebc-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/20804acec838b898ce1d7c285ba0b620.png','id'=>'515','name'=>'东森财经新闻','liveid'=>'ebc-finance'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/0874fd4d77ca35ccaa61ea95e9fc0fb5.png','id'=>'315','name'=>'壹新闻 HD','liveid'=>'nexttv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-17/e85e6017ebe02e7feb82688866d83666.png','id'=>'512','name'=>'中视新闻','liveid'=>'ctv-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/2f530a19f9ec55c127ba68a5bd2dfea4.png','id'=>'519','name'=>'年代新闻','liveid'=>'era-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/9086bc40db3d082feae4a09fffbbf811.png','id'=>'166','name'=>'寰宇新闻台','liveid'=>'global-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/0b4d8f48cc1b12293be8f91ffa72034c.png','id'=>'513','name'=>'台视新闻','liveid'=>'ttv-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/40c9525f8f12ebda432350bd49f26bec.png','id'=>'520','name'=>'非凡新闻','liveid'=>'ustv-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/6fabf96a75d3cada67158ab5b66633d4.png','id'=>'237','name'=>'华视新闻','liveid'=>'cts-news'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/8c98c63946afa00f460e15f5f8330122.png','id'=>'312','name'=>'镜新闻','liveid'=>'mnews'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/d662794cd0f95069e2376c6e654c64ad.png','id'=>'342','name'=>'靖天资讯台','liveid'=>'jtzx'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/8ded074f4befbc34f264c378cc823d9c.png','id'=>'508','name'=>'星卫HD电影台','liveid'=>'star-movies'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/620759a7094b315d6841ca3cb6ce9603.png','id'=>'500','name'=>'纬来戏剧台','liveid'=>'videoland-drama'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/39c9b2c01ae539a57bd0e674d45844fc.png','id'=>'374','name'=>'东森电影 HD','liveid'=>'ebc-movie-hd'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/c0d9239ba4048db181fb1a2fac57a932.png','id'=>'492','name'=>'东森电影','liveid'=>'ebc-movie'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/548efcbaee6549ca5f653ecbaa44be2a.png','id'=>'494','name'=>'东森洋片','liveid'=>'ebc-emovie'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/aab74c2a7dbcc91184d8cec9e503b8d1.png','id'=>'493','name'=>'东森戏剧','liveid'=>'ebc-drama'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/8526f4e3db31a2a64ba90680462d5664.png','id'=>'496','name'=>'卫视电影台','liveid'=>'star-chinese-movies'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/a1b8a20fe446ed3676ff859b6dec53aa.png','id'=>'509','name'=>'星卫娱乐台','liveid'=>'star-entetainment'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/0374fe1183ef54f1dafe344868ee255a.png','id'=>'495','name'=>'卫视中文台','liveid'=>'star-chinese-channel'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/e9d3aaa2365ec961e38f3dfec83b2f2c.png','id'=>'502','name'=>'龙华电影台','liveid'=>'ltv-movies'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/a32970159c0aecfc2db3a633ec7e73f3.png','id'=>'503','name'=>'龙华洋片台','liveid'=>'ltv-yangpian'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/429a2c0837d5a0c335aee14d5724911f.png','id'=>'498','name'=>'好莱坞电影台','liveid'=>'hollywood-tw'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/37e3078e70e65577602ab9b033471c3c.png','id'=>'328','name'=>'TVBS 欢乐台','liveid'=>'tvbs-huanle'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/d0e77065c43c303730c3cf99f8e54433.png','id'=>'506','name'=>'ELTA 影剧','liveid'=>'elta-drama'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/94e2fe21f47230e1e4424e880845b397.png','id'=>'497','name'=>'龙祥电影台','liveid'=>'lstime'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/a9edbbfbaf80ce93846ddb7c75b06b5f.png','id'=>'507','name'=>'EYE 戏剧台','liveid'=>'eye-drama'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/7ad1820056de0ab1043a4d062e1ffae3.png','id'=>'499','name'=>'八大戏剧台','liveid'=>'gtv41'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/180c68238e13b1ec44170a87f848cbd5.png','id'=>'335','name'=>'八大娱乐台','liveid'=>'gtv86'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/4675bcb8862312cb5f881fda10623b8f.png','id'=>'510','name'=>'MTV Live HD 频道','liveid'=>'mtv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/97d335b08f3c19e143b0459e1d25f9b5.png','id'=>'504','name'=>'靖天电影台','liveid'=>'jtdy'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/6bad6989b3ed57e0c86deecef20873ef.png','id'=>'329','name'=>'中天娱乐台','liveid'=>'ctitv39'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-07-18/bef189dee708f89262d2c97794c2d5e8.png','id'=>'511','name'=>'靖洋戏剧台','liveid'=>'jyxj'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/03eca8ccd8c7c33fb673652eff43fbc9.png','id'=>'505','name'=>'美亚电影台','liveid'=>'meiah-movies'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/62dc355ef2837b5560d8fe61985cf1a7.png','id'=>'383','name'=>'8TV','liveid'=>'8tv'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/2eec9e9d776078f020ee5fd6e1e8e47e.png','id'=>'386','name'=>'Astro AEC','liveid'=>'astro-aec'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-19/b2f66938a11e172be25c364168794f3b.png','id'=>'430','name'=>'Astro 华丽台','liveid'=>'astro-wahlaitoi'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/463395568027d510ab8caaa38d13b5e0.png','id'=>'392','name'=>'Astro 欢喜台','liveid'=>'astro-huaheedai'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/f09aa7619b2db0ba10ca457287f5cbc1.png','id'=>'390','name'=>'Astro AOD HD','liveid'=>'astro-aod-hd'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/78eb149b70c9581b7430e498d86d4497.png','id'=>'393','name'=>'Astro AOD','liveid'=>'astro-aod'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-19/7381f73a8ec06bceefa354c2fdf03767.png','id'=>'427','name'=>'Channel U','liveid'=>'channel-u'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-19/55fe3bb483cd8de3522c52594b287748.png','id'=>'426','name'=>'Channel 5','liveid'=>'channel-5'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-26/7cd06e6bed6316526cb9c13fb636bf6b.png','id'=>'561','name'=>'Channel 8','liveid'=>'channel8'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/4154b915bd420bd5d45c463b81788d72.png','id'=>'403','name'=>'Astro 爱奇艺','liveid'=>'astro-iqiyi'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/39970d113af7c20780a52f84459e50d8.png','id'=>'388','name'=>'Astro 全佳台 HD','liveid'=>'astro-quanjia'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/02835f4908ba8138d583190b47a0b73d.png','id'=>'387','name'=>'Astro 双星台','liveid'=>'astro-shuangxing'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-05-15/47f40982897b9361cc0e55602cb9b12b.png','id'=>'394','name'=>'Astro Arena HD','liveid'=>'astro-arena-hd'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c851fe8e2c3ed5e6c88f3bda85e39ba0.png','id'=>'395','name'=>'Astro Arena 2','liveid'=>'astro-arena2'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/6081ff8e0282a0d4435f55f5f67f8524.png','id'=>'377','name'=>'Astro ONE','liveid'=>'astro-one'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/14e2826f23a9ccbc27e5f4598fdf9617.png','id'=>'246','name'=>'Astro Awani','liveid'=>'astro-awani'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-19/def82539b36b63df2224b884f1a85fb1.png','id'=>'429','name'=>'OKEY','liveid'=>'okey'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/8d213d44b4f0ac0320ade237dfe62cc5.png','id'=>'384','name'=>'TV9','liveid'=>'tv9'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/c45ed0d384271e0c0a27077853a1b703.png','id'=>'298','name'=>'Astro Ceria','liveid'=>'astro-ceria'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/287d3ab87e00e61ff8fc1306f17ac444.png','id'=>'378','name'=>'Astro Prima','liveid'=>'astro-prima'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/eb983f0237970b756a150c95e0f44de5.png','id'=>'380','name'=>'Astro Warna','liveid'=>'astro-warna'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/7f1fa0d6891ab4d4df2b55a08be9f799.png','id'=>'382','name'=>'Astro Aura','liveid'=>'astro-aura'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/1ef6b128d9510e585c8676ebb3ea522a.png','id'=>'379','name'=>'Astro Oasis','liveid'=>'astro-oasis'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/88681c959cb4052c6d0e5d6ae2fe8f13.png','id'=>'381','name'=>'Astro Rania','liveid'=>'astro-rania'),
    array('logo'=>'https://d3ifppxyz9sa2s.cloudfront.net/media/img/2023-04-12/504a7a04b3aee4560fe0a15dcde11137.png','id'=>'385','name'=>'Astro Citra','liveid'=>'astro-citra'),
);
$json=json_encode($json);
$json=json_decode($json);
if ($type == 'txt') {
  // 密钥正确，将JSON转换为列表
echo '星视界直播,#genre#'.PHP_EOL;
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
    echo '#EXTINF:-1 tvg-id="'.$cid.'" tvg-name="'.$name.'" tvg-logo="'.$logo.'" group-title="星视界直播",'.$name.PHP_EOL.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id='.$cid.''.PHP_EOL;
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
    "title" =>"星视界直播",
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
$data=curl('https://www.histar.tv/live/'.$playurl);
preg_match('/"playUrl":"(.*?)"/', $data, $matches);
$play=str_replace('\u0026','&',$matches[1]);
header('Content-Type:application/vnd.apple.mpegurl');
echo curl($play);
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
    curl_setopt($curl, CURLOPT_REFERER, "https://www.histar.tv/");
    //构造来路
    curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
    curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
    //gzip压缩内容
    $data = curl_exec($curl);
    // 抓取URL并把它传递给浏览器
    curl_close($curl);
    return $data;
}
