<?php 

function status($status){
    if ($status == 'a') {
        return [
            'title' => 'Aktif',
            'color' => '28a745',
            'icon' => 'fa fa-question',
            'bg-color' => 'success'
        ];
    }elseif ($status == 'p') {
        return [
            'title' => 'Pasif',
            'color' => '6c757d' ,
            'icon' => 'fa fa-trophy',
            'bg-color' => 'dark'
        ];
    }elseif ($status == 's') {
        return [
            'title' => 'Süreçte',
            'color' => 'ffc107',
            'icon' => 'fa fa-tasks',
            'bg-color' => 'warning'

        ];
    }
}

?>