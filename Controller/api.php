<?php 

    if (route(1) == 'addtodo') {
        // echo json_encode(print_r($_POST));
        $post = filter($_POST);
        $start_date = date('Y-m-d H:i:s');
        $end_date = date('Y-m-d H:i:s');
        
        if (post('start_date_time') && post('start_date')) {
            $start_date = $post['start_date'] . ' ' . $post['start_date_time'];
        }
        if (post('end_date_time') && post('end_date')) {
            $end_date = $post['end_date'] . ' ' . $post['end_date_time'];
        }
        
        // Eğer kullanıcı tarih belirtmemişse, varsayılan olarak şu anki tarihi kullan
        if (empty(post('start_date_time')) && empty(post('start_date'))) {
            $start_date = date('Y-m-d H:i:s');
        }
        if (empty(post('end_date_time')) && empty(post('end_date'))) {
            $end_date = date('Y-m-d H:i:s');
        }
        
        if (!$post['title']) {
            $status = 'error';
            $title = 'Ops! Dikkat';
            $msg = 'Lütfen başlığı giriniz.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
            exit();
        }
        if (!$post['description']) {
            $status = 'error';
            $title = 'Ops! Dikkat';
            $msg = 'Lütfen açıklama giriniz.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
            exit();
        }
        if ($post['category_id']) {
            
            $user_id = getSession('id');
            $c_id = $post['category_id'];
            $q = $db->query("SELECT id FROM categories WHERE user_id= '$user_id' && categories.id='$c_id'");
            $c = $q->fetch(PDO::FETCH_ASSOC);
            // print_r($c);
            if (!$c) {

                $status = 'error';
                $title = 'Ops! Dikkat';
                $msg = 'Sadece oluşturduğunuz kategoriler için ekleme yapabilirsiniz.';
                echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
                exit();
            }
        }
        $q = $db->prepare("INSERT INTO todos SET 
            todos.title=?,
            todos.description=?, 
            todos.color=?, 
            todos.status=?, 
            todos.progress=?, 
            todos.start_date=?, 
            todos.end_date=?, 
            todos.category_id=?,
            todos.user_id=?",
        );

        $insert = $q->execute([
            $post['title'],
            $post['description'],
            $post['color'] ?? '#007bff',
            $post['status'] ?? 'a',
            intval($post['progress']) ?? 1,
            $start_date,
            $end_date,
            $post['category_id'] ?? 0,
            getSession('id'),
        ]);
        if ($insert) {

            $status = 'success';
            $title = 'Başarılı';
            $msg = 'Yapılacaklar, listenize başarıyla eklendi.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg, 'redirect' => url('todo/list')]);
            exit();
            
        } else {

            $status = 'error';
            $title = 'Ops! Dikkat';
            $msg = 'Beklenmedik bir hata meydana geldi.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
            exit();
            
        }
    } elseif (route(1) == 'removetodo') {
        
        // $status = 'error';
        // $title = 'Ops! Dikkat';
        // $msg = 'Lütfen başlığı giriniz.';
        // echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
        // exit();
        
        $post = filter($_POST);
        if (!$post['id']) {
            
            $status = 'error';
            $title = 'Ops! Dikkat';
            $msg = 'ID bilgisi alınamadı.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
            exit();

        }
        $user = getSession('id');
        $id = $post['id'];
        $q = $db->query("DELETE FROM todos WHERE todos.id = '$id' && todos.user_id= '$user'");

        if ($q) {

            $status = 'success';
            $title = 'Başarılı';
            $msg = 'Başarıyla listeden silindi.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg, 'id' => $id]);
            exit();

            
        } else {
            $status = 'error';
            $title = 'Ops! Dikkat';
            $msg = 'Bir hata meydana geldi.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
            exit();

        }
    } elseif (route(1) == 'edittodo') {
        // echo json_encode(print_r($_POST));
        $post = filter($_POST);
        $start_date = date('Y-m-d H:i:s');
        $end_date = date('Y-m-d H:i:s');
        
        if (post('start_date_time') && post('start_date')) {
            $start_date = $post['start_date'] . ' ' . $post['start_date_time'];
        }
        if (post('end_date_time') && post('end_date')) {
            $end_date = $post['end_date'] . ' ' . $post['end_date_time'];
        }
        
        // Eğer kullanıcı tarih belirtmemişse, varsayılan olarak şu anki tarihi kullan
        if (empty(post('start_date_time')) && empty(post('start_date'))) {
            $start_date = date('Y-m-d H:i:s');
        }
        if (empty(post('end_date_time')) && empty(post('end_date'))) {
            $end_date = date('Y-m-d H:i:s');
        }
        
        if (!$post['title']) {
            $status = 'error';
            $title = 'Ops! Dikkat';
            $msg = 'Lütfen başlığı giriniz.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
            exit();
        }
        if (!$post['description']) {
            $status = 'error';
            $title = 'Ops! Dikkat';
            $msg = 'Lütfen açıklama giriniz.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
            exit();
        }
        if ($post['category_id']) {
            
            $user_id = getSession('id');
            $c_id = $post['category_id'];
            $q = $db->query("SELECT id FROM categories WHERE user_id= '$user_id' && categories.id='$c_id'");
            $c = $q->fetch(PDO::FETCH_ASSOC);
            // print_r($c);
            if (!$c) {

                $status = 'error';
                $title = 'Ops! Dikkat';
                $msg = 'Sadece oluşturduğunuz kategoriler için ekleme yapabilirsiniz.';
                echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
                exit();
            }
        }
        $q = $db->prepare("UPDATE todos SET 
            todos.title=?,
            todos.description=?, 
            todos.color=?, 
            todos.status=?, 
            todos.progress=?, 
            todos.start_date=?, 
            todos.end_date=?, 
            todos.category_id=?
            WHERE todos.id =? && todos.user_id=?"
        );

        $update = $q->execute([
            $post['title'],
            $post['description'],
            $post['color'] ?? '#007bff',
            $post['status'] ?? 'a',
            intval($post['progress']) ?? 1,
            $start_date,
            $end_date,
            $post['category_id'] ?? 0,
            $post['id'],
            getSession('id'),
        ]);
        if ($update) {

            $status = 'success';
            $title = 'Başarılı';
            $msg = 'Başarıyla düzenlendi.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg, 'redirect' => url('todo/list')]);
            exit();
            
        } else {

            $status = 'error';
            $title = 'Ops! Dikkat';
            $msg = 'Beklenmedik bir hata meydana geldi.';
            echo json_encode(['status' => $status, 'title' => $title, 'msg' => $msg]);
            exit();
            
        }
    }

?>