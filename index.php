<?php
// echo __DIR__;

session_start();

require_once __DIR__.'/config/config.php';

if (DEV_MODE == true) {
    error_reporting(E_ALL);
    ini_set('error_reporting', true);
} else {
    error_reporting(0);
    ini_set('error_reporting', false);
}


foreach (glob(BASEDIR.'/helpers/*.php') as $file ) {
    // echo $file;
    require_once $file;
}

glob(BASEDIR.'/helpers/*.php');

// print_r($_GET);
$config['route'][0] = 'home';
$config['lang'] = 'tr';

if (isset($_GET['route'])) {
    $regex = '@(?<lang>\b[a-z]{2}\b)?/?(?<route>.+)/?@'; // URL route

    preg_match($regex, $_GET['route'], $result);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

}

if (isset($result['lang'])) {
    if (file_exists(BASEDIR.'/language/'.$result['lang'].'.php')) {
        $config['lang'] = $result['lang'];
    } else {
        $config['lang'] = 'tr';
    }

}

if (isset($result['route'])) {
    
    $config['route'] = explode('/', $result['route']);
    
}


require_once __DIR__.'/language/'. $config['lang'].'.php';

if (file_exists(__DIR__.'/Controller/'.$config['route'][0].'.php')) {
    require_once __DIR__.'/Controller/'.$config['route'][0].'.php'; 
} else {
    echo "Sayfa Bulunamadı...";
}



?>