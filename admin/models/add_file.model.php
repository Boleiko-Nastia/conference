<?php

function add_file($title,$date){
    global $db;
    $data = array('file_name' => $title,
                  'create_date' => date('Y-m-d',$date)
            );
    $id = $db->insert('conference_files',$data);
    return $id;
}