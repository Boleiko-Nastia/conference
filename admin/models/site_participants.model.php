<?php
function get_user_sem() {
    global $db;
    $cols = array('name','head','job','lecture_title');
    $db->where('cm.section_id',NULL,' IS');
    $users = $db->get ("conference_members cm", null, $cols);
    return $users;
}

function get_user_conf(){
    global $db;
    $cols = array('name','job','lecture_title');
    $db->where('cm.section_id',NULL,' IS NOT');
    $users = $db->get ("conference_members cm", null, $cols);
    return $users;
}