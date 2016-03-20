<?php

function getAllSection(){
    global $db;
    return $db->get('conference_sections');
}

function addMember($fullname,$job,$titlelecture,$section_id){
    global $db;
    $data = array('name' => $fullname,
        'job' => $job,
        'lecture_title' => $titlelecture,
        'section_id' => $section_id
    );
    $id = $db->insert('conference_members',$data);
    return $id;
}

function getMembers() {
    global $db;
    $db->join("conference_sections cs", "cm.section_id=cs.id", "LEFT");
    $result = $db->get('conference_members cm',null,'cs.title,cm.id,cm.name,cm.job,cm.lecture_title,cm.head');
    $members = array();

    foreach($result as $k => $v){
        if($v['title'] == NULL){
            continue;
        }
        $members[$v['title']][] = array('id'=>$v['id'],'name'=>$v['name'],'job'=>$v['job'],'lecture_title'=>$v['lecture_title'],'head'=>$v['head']);
    }

    return $members;
}

function delMember($id){
    global $db;
    $db->where('id', $id);
    return $db->delete('conference_members');
}

function saveUser($id,$name,$job,$lecture_title){
    global $db;
    $data = array(
        'name'=>$name,
        'job'=>$job,
        'lecture_title'=>$lecture_title
    );
    $db->where('id',$id);
    return $db->update('conference_members', $data);
}