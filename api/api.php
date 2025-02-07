<?php
/*{
    "id": 5510,
    "uuid": "618fe6a9-58eb-46a2-82c0-de3e0490f4fc",
    "hitokoto": "宠辱不惊，闲看庭前花开花落；去留无意，漫随天外云卷云舒。",
    "type": "i",
    "from": "菜根谭·概论",
    "from_who": null,
    "creator": "a632079",
    "creator_uid": 1044,
    "reviewer": 1044,
    "commit_from": "api",
    "created_at": 1586266061,
    "length": 28
}*/
header('Content-Type:text/json;charset=UTF-8');
$type = $_GET['type'];
if($type=='bz'){
    $data=json_decode(file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=8'))->images;
    $jsondata=array(
    "images" =>(
        $data
    )
);
}elseif($type=='yy'){
    $jsondata=json_decode(file_get_contents('https://v1.hitokoto.cn/'));
}else{
    $jsondata=array(
    "code" =>-1,
    'message'=>'error',
);
}
echo json_encode($jsondata, JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);