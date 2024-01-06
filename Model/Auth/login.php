<?php 

    if ($process == 'login') {

        if (!$data['email']) {
            return [
                'success' => false,
                'type' => 'danger',
                'message' => 'Lütfen e-posta adresinizi giriniz.',
            ];
        }

        if (!$data['password']) {
            return [
                'success' => false,
                'type' => 'danger',
                'message' => 'Lütfen şifrenizi giriniz.'
            ];
        }
        
        

        // print_r($data);
        $q = $db->prepare('SELECT *, CONCAT(name, " ", surname) as fullname FROM users WHERE email=? && password=?');
        $q->execute([$data['email'], md5($data['password'])]);

        if ($q->rowCount()) {
            // echo 'Kullanıcı var';
            $user = $q->fetch(PDO::FETCH_ASSOC);
            // print_r($user);
            addSession('id', $user['id']);
            addSession('name', $user['name']);
            addSession('surname', $user['surname']);
            addSession('email', $user['email']);
            addSession('fullname', $user['fullname']);
            addSession('login', True);
            
            return [
                'success' => True,
                'type' => 'success',
                'message' => 'Giriş Başarılı',
                'data' => $user,
                'redirect' => 'home',
            ];
        } else {
            // echo 'Kullanıcı yok';

            return [
                'success' => False,
                'type' => 'danger',
                'message' => 'Kullanıcı adı veya şifreniz hatalı',

            ];

        }
    }

?>