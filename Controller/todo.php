<?php 
    
    if (!getSession('login') || getSession('login') != true) { // giriş yapıldıktan sonra login ekranına dönülmemesi için.
        redirect('login');
    }

    if (route(0) == 'categories' && !route(1)) {

        // if (isset($_POST['signin'])) {
            
        //     $_SESSION['post'] = $_POST;
        //     //    print_r($_POST);
            
        //     $eposta = post('email');
        //     $password = post('password');
            
        //     $return = model('auth/login',['email' => $eposta, 'password' => $password], 'login');
        //     // print_r($return);
        //     // print_r($_SESSION);
        //     if ($return['success'] == true) {
        //         addSession('error', [
        //             'message' => $return['message'] ?? '',
        //             'type' => $return['type'] ?? '',
        //         ]);
        //         if (isset($return['redirect'])) {
        //             redirect($return['redirect']);
        //         }
        //     } else {
        //         addSession('error', [
        //             'message' => $return['message'] ?? '',
        //             'type' => $return['type'] ?? '',
        //         ]);
        //     }
        // }

        view('categories/home');
    } elseif (route(0) == 'todo' && route(1) == 'add') {
        
        $return = model('categories',[], 'list');
        view('todo/todo_add', $return['data']);
    } elseif (route(0) == 'todo' && route(1) == 'edit' && is_numeric(route(2))) {

        $return = model('todo',['id' => route(2)], 'getsingle');

        view('todo/todo_edit', $return['data']);
    } elseif (route(0) == 'todo' && route(1) == 'list') {
        
        $return = model('todo',[], 'list');
        view('todo/todo_list', $return['data']);
    }
?>