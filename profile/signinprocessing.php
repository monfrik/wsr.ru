<?php 
require '../database.php';
$dataForm = json_decode($_POST["dataForm"],true);
$userInfo=[];
$respond = [
    "success" => 0,
    "error" => ""
];
foreach ( $dataForm as $key => &$value) {
    $userInfo["{$value['name']}"] = "{$value['value']}";
}
$login= $userInfo['login'];
$login = htmlspecialchars($login, ENT_QUOTES); 
$password= $userInfo['password']; 
$password = htmlspecialchars($password, ENT_QUOTES); 
$hash=md5(md5($password.$hash));
$password =$hash;
if (empty($login) || empty($password)){
    $respond['error'] = "введите логин и пароль";
    respond($respond);
} 
if($connect){
    $preparedStatement = $connect->prepare('SELECT * FROM users WHERE login = ? AND password = ? ');
    $preparedStatement->bind_param("ss",$login,$password);
    $preparedStatement->execute(); 
    $result=$preparedStatement->get_result();
    $user = $result->fetch_array(MYSQLI_ASSOC);
    if(!$result->num_rows) {
        $respond['error'] = "введите правильный логин или пароль";
        respond($respond);
    } else {
        $id = $user['id'];
        session_start([
            'cookie_lifetime' => 86400*2,
            'read_and_close'  => false,
        ]);
        $_SESSION['id'] = $id;
        $respond['success'] = 1;
        respond($respond);
    }
    $preparedStatement->close();
}
function respond($respond){
    die(json_encode($respond));
}