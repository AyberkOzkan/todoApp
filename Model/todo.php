<?php 

if ($process == 'list') {

        $title = $data['title'];
        // print_r($data);
        $q = $db->prepare("SELECT todos.*, c.title as category_title FROM todos LEFT JOIN categories c on c.id = todos.category_id WHERE todos.user_id=?");
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

        $user_id = getSession('id');
        $q = $db->query("SELECT * FROM categories WHERE user_id = '$user_id'" );
        $category = $q->fetchAll(PDO::FETCH_ASSOC);
        
        $q = $db->prepare("SELECT todos.*, c.title as category_title FROM todos LEFT JOIN categories c on c.id = todos.category_id WHERE todos.id = ? && todos.user_id = ? ");
        $get = $q->execute([$id, getSession('id')]);

        if ($q->rowCount()) {
            
            return [
                'success' => True,
                'type' => 'success',
                'data' => array_merge($q->fetch(PDO::FETCH_ASSOC), ['categories'=> $category]),
            ];
        } else {

            return [
                'success' => True,
                'type' => 'success',
                'data' => [],
            ];

        }
    } 
?>