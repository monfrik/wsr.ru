<?php 
require '../database.php';
$dataForm = json_decode($_POST["dataForm"],true);
$respond = [
    "success" => 0,
    "error" => ""
];
$userInfo=[]; // array all user info from form - multiplle arguments
foreach ( $dataForm as $key => &$value) {
    $userInfo["{$value['name']}"] = "{$value['value']}";
}
$login= $userInfo['login']; 
$login = htmlspecialchars($login, ENT_QUOTES); 
$password= $userInfo['password']; 
$password = htmlspecialchars($password, ENT_QUOTES); 
$hash=md5(md5($password.$hash));
$password =$hash;
$mail= $userInfo['mail'];
$mail = htmlspecialchars($mail, ENT_QUOTES); 
if (empty($login) || empty($password) || empty($mail)){
    $respond['error'] = "введите логин, пароль и почту";
    respond($respond);
} 
$gender=$userInfo['gender'];
$age= ($userInfo['age'] == "") ? 'null' : $userInfo['age']; 
$news= (int)$userInfo["news"]; 
$events= (int)$userInfo["events"]; 
$games= (int)$userInfo["games"]; 
$business= $userInfo['business']; 

$SRC='../user/img/';
$tmp = $_FILES[0]["tmp_name"];
$realName = $_FILES[0]["name"];
$nameFile = time().'_'.$realName;
$allowedTypes = ["image/jpeg", "image/png", "image/jpg"];

if($connect){
    $data = $connect->query("SELECT * FROM `users` WHERE `login`='".$login."' ");
    $result=$data->fetch_assoc();
    if(!empty($result)){
        $respond['error'] = 'такой юзер уже зареган';
        respond($respond);
    } else {
        if (is_uploaded_file($tmp)) {
            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $fileMimeType = finfo_file($fileInfo, $tmp);
            if (in_array($fileMimeType, $allowedTypes)){
                $srcCurrent = $SRC.$nameFile;
            }
            move_uploaded_file($tmp, $srcCurrent);
            finfo_close($fileInfo);
        }
        $insQuery = "INSERT INTO `users` (login, password, mail, gender, age, news, events, games, business, avatar) VALUES ('".$login."', '".$password."', '".$mail."', '".$gender."', $age, $news, $events, $games, '".$business."', '".$srcCurrent."') ";
        $data2=$connect->query($insQuery);
        $data3=$connect->query("SELECT LAST_INSERT_ID()");
        $id = $data3->fetch_all(MYSQLI_ASSOC)[0]["LAST_INSERT_ID()"];
        $respond['success'] = 1;
        respond($respond);
    }
}
function respond($respond){
    die(json_encode($respond));
}