<?php

function add_file($data){
    global $db;
    $id = $db->insert('conference_files',$data);
    return $id;
}

function del_file($id){
    global $db;
    $db->where('id',$id);
    $id = $db->delete('conference_files');
    return $id;
}