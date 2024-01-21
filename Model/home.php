<?php 

if ($process == 'list') {
    $q = $db->prepare("SELECT todos.*, c.title as category_title FROM todos 
                    LEFT JOIN categories c on c.id = todos.category_id
                    WHERE todos.user_id=? && status=? ORDER BY start_date ASC");
    $q->execute([getSession('id'), 's']);
    $todos = $q->fetchAll(PDO::FETCH_ASSOC);

        $title = $data['title'];
        // print_r($data);
        $q = $db->prepare("SELECT status, count(todos.id) as toplam,
                            (count(todos.id) * 100 / (SELECT COUNT(id) FROM todos WHERE user_id = ?)) as yuzde
                            FROM todos WHERE todos.user_id = ? 
                            GROUP BY todos.status");
        $get = $q->execute([getSession('id'), getSession('id')]);

        if ($q->rowCount()) {
            
            return [
                'success' => True,
                'type' => 'success',
                'data' => array_merge(['istatistik' => $q->fetchAll(PDO::FETCH_ASSOC)], ['surec' => $todos]),
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
    } 
?>