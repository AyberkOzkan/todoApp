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
    } elseif (route(0) == 'categories' && route(1) == 'add') {
        
        if (isset($_POST['submit'])) {
            
            $_SESSION['post'] = $_POST;
            //    print_r($_POST);
            
            $title = post('title');
            
            $return = model('categories',['title' => $title], 'add');
            // print_r($return);
            // print_r($_SESSION);
            if ($return['success'] == true) {
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

        view('categories/cat_add');
    } elseif (route(0) == 'categories' && route(1) == 'edit' && is_numeric(route(2))) {

        if (isset($_POST['submit'])) {
            
            $_SESSION['post'] = $_POST;
            //    print_r($_POST);
            $title = post('title');
            $id = post('id');

            $return = model('categories',['title' => $title, 'id' => $id], 'edit');

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
        } else

        $return = model('categories', ['id' => route(2)], 'getsingle');

        view('categories/cat_edit', $return['data']);
    } elseif (route(0) == 'categories' && route(1) == 'list') {
        
        $return = model('categories',[], 'list');
        view('categories/cat_list', $return['data']);
    } elseif (route(0) == 'categories' && route(1) == 'remove' && is_numeric(route(2))) {
        $return = model('categories',['id' => route(2)], 'remove');
        
        redirect('categories/list/?type='.$return['type'].'&message='.$return['message']);

    }
?>