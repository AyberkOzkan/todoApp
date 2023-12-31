<?php 

function route($index){
    global $config;
    if (isset($config['route'][$index])) {
        return $config['route'][$index];
    } else {
        return false;
    }
}

function view($viewName, $pageData = []){
    $data = $pageData;
    if (file_exists(BASEDIR.'/view/'.$viewName.'.php')) {
        require BASEDIR.'/view/'.$viewName.'.php';
    } else {
        return false;
    }
}

function model($modelName, $pageData = [], $data_process = null){
    global $db;
    if ($data_process != null) {
        $process = $data_process;
    }
    $data = $pageData;
    if (file_exists(BASEDIR.'/model/'.$modelName.'.php')) {
        return require BASEDIR.'/model/'.$modelName.'.php';
    } else {
        return false;
    }
}

function assets($assetName){
    if (file_exists(BASEDIR.'/public/'.$assetName)) {
        return URL.'public/'. $assetName;
    } else {
        return false;
    }
}

function lang($text){
    global $lang;
    if (isset($lang[$text])) {
        return $lang[$text];
    } else {
        return $text;
    }
}

function addSession($index, $value){
    $_SESSION[$index] = $value;
}

function getSession($index){
    if (isset($_SESSION[$index])) {
        return $_SESSION[$index];
    } else {
        return false;
    }
}

function post($index){
    if (isset($_POST[$index])) {
        return htmlspecialchars(trim($_POST[$index]));
    } else {
        return false;
    }
}

function get($index){
    if (isset($_GET[$index])) {
        return htmlspecialchars(trim($_GET[$index]));
    } else {
        return false;
    }
}

function getCookie($index){
    if (isset($_COOKIE[$index])) {
        return trim($_COOKIE[$index]);
    } else {
        return false;
    }
}

function redirect($link){
    header('location:'.URL.$link);
}

function url($url){

    global $config;
    return URL.$config['lang'].'/'.$url;
}
?>