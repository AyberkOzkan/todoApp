<?php 
    
    if (getSession('login') && getSession('login') == true) { // giriş yapıldıktan sonra login ekranına dönülmemesi için.
        redirect('home');
    }

    if (route(0) == 'login') {

        if (isset($_POST['signin'])) {
            
            $_SESSION['post'] = $_POST;
            //    print_r($_POST);
            
            $eposta = post('email');
            $password = post('password');
            
            $return = model('auth/login',['email' => $eposta, 'password' => $password], 'login');
            // print_r($return);
            // print_r($_SESSION);
            if ($return['success'] == true) {
                addSession('error', [
                    'message' => $return['message'] ?? '',
                    'type' => $return['type'] ?? '',
                ]);
                if (isset($return['redirect'])) {
                    redirect($return['redirect']);
                }
            } else {
                addSession('error', [
                    'message' => $return['message'] ?? '',
                    'type' => $return['type'] ?? '',
                ]);
            }
        }

        view('auth/login');
    }
?>