<?php 
    
    // echo "Home Sayfası";    
    // echo route(0);

    if (route(0) == 'home' && !route(1)) {

        $return = model('home',[], 'list');
        view('home/home', $return['data']);
    }elseif (route(0) == 'home' && route(1) == 'calendar') {
        view('home/calendar');

    }
?>