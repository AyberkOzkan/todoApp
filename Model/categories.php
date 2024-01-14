<?php 

    if ($process == 'add') {

        if (!$data['title']) {
            return [
                'success' => false,
                'type' => 'danger',
                'message' => 'Lütfen kategoriniz için bir başlık giriniz.',
            ];
        }

        $title = $data['title'];
        // print_r($data);
        $q = $db->prepare("INSERT INTO categories SET title=?, user_id=?");
        $q->execute([$title, getSession('id')]);

        if ($q->rowCount()) {
            
            return [
                'success' => True,
                'type' => 'success',
                'message' => 'Kategoriniz başarıyla eklendi.',
                'redirect' => 'categories/list',
            ];
        } else {
            // echo 'Kullanıcı yok';

            return [
                'success' => False,
                'type' => 'danger',
                'message' => 'Kategoriniz eklenirken bir hata oluştu.',

            ];

        }
    } elseif ($process == 'list') {

        $title = $data['title'];
        // print_r($data);
        $q = $db->prepare("SELECT * FROM categories WHERE user_id=?");
        $get = $q->execute([getSession('id')]);

        if ($q->rowCount()) {
            
            return [
                'success' => True,
                'type' => 'success',
                'data' => $q->fetchAll(PDO::FETCH_ASSOC),
            ];
        } else {

            return [
                'success' => True,
                'type' => 'success',
                'data' => [],
            ];

        }
    } elseif ($process == 'remove') {

        $id = $data['id'];

        $q = $db->prepare("DELETE FROM categories WHERE categories.id=? && categories.user_id=?");
        $get = $q->execute([$id, getSession('id')]);

        if ($q->rowCount()) {
            
            return [
                'success' => True,
                'type' => 'success',
                'message' => 'Başarıyla silindi.',
            ];
        } else {

            return [
                'success' => True,
                'type' => 'danger',
                'message' => 'Silme işlemi başarısız oldu.',
                'data' => [],
            ];

        }
    } elseif ($process == 'getsingle') {

        $id = $data['id'];
        
        $q = $db->prepare("SELECT * FROM categories WHERE categories.id=? && user_id=?");
        $get = $q->execute([$id, getSession('id')]);

        if ($q->rowCount()) {
            
            return [
                'success' => True,
                'type' => 'success',
                'data' => $q->fetch(PDO::FETCH_ASSOC),
            ];
        } else {

            return [
                'success' => True,
                'type' => 'success',
                'data' => [],
            ];

        }
    } elseif ($process == 'edit') {

        $id = $data['id'];
        $title = $data['title'];

        if (!$data['title']) {
            return [
                'success' => false,
                'type' => 'danger',
                'message' => 'Lütfen kategoriniz için bir başlık giriniz.',
            ];
        }

        $q = $db->prepare("UPDATE categories SET categories.title = ? WHERE categories.id=? && user_id=?");
        $edit = $get = $q->execute([$title, $id, getSession('id')]);

        if ($edit) {
            
            return [
                'success' => True,
                'type' => 'success',
                'message' => 'Kategoriniz güncellendi.',
                'data' => $q->fetch(PDO::FETCH_ASSOC),
            ];
        } else {

            return [
                'success' => True,
                'type' => 'danger',
                'message' => 'Kategoriniz güncellenemedi.',
                'data' => [],
            ];

        }
    }

?>