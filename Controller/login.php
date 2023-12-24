<?php 
    if (route(0) == 'login') {
        if (isset($_POST['signin'])) {
            
            //    print_r($_POST);
            addSession('hata', 'mesajınız eklendi!');
            $eposta = post('email');
            $password = post('password');
            echo $eposta.' '.$password;
        
        }

        view('auth/login');
    }
?>