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
    $cols = array('cs.title','section_id','name','job','lecture_title');
    $db->where('cm.section_id',NULL,' IS NOT');
    $db->join("conference_sections cs", "cm.section_id=cs.id", "LEFT");
    $users = $db->get ("conference_members cm", null, $cols);
    $result = array();
    foreach($users as $k => $v) {
        $result[$v['section_id']][$v['title']][] = array('name'=>$v['name'],'job'=>$v['job'],'lecture_title'=>$v['lecture_title']);
    }
    return $result;
}