<?php 

session_start();

$admin = FALSE;

if($_SERVER['REMOTE_ADDR']){
    $admin = TRUE;
}

$_SESSION['include_path'] = 'nav.php';
$_SESSION['admin'] = $admin;

function fuck_path_change_or_check($path){
    if(preg_match("/\//isUD", $path)){
        exit("어이쿠 걸려버렸네?");
    }elseif(preg_match("/base64/i", $path)){
        exit("어이쿠 걸려버렸네?");
    }else{
        return str_replace("\\", "/", $path);
    }
}

function fuck_extract_filtering($get){
    if(preg_match("/_|session/isUD", $get)){
        exit("으아닛 이건 안된다구!");
    }else{
        return fuck_path_change_or_check($get);
    }
}

?>