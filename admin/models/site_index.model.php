<?php
function add_user($data){
    global $db;
    $id = $db->insert('conference_users',$data);
    return $id;
}