<?php

function addMember($fullname,$job,$titlelecture,$mentorname){
    global $db;
    $data = array(
        'name' => $fullname,
        'job' => $job,
        'lecture_title' => $titlelecture,
        'head' => $mentorname
    );
    $id = $db->insert('conference_members',$data);
    return $id;
}

function getMembers() {
    global $db;
    $db->where('cm.section_id',NULL,' IS');
    $result = $db->get('conference_members cm',null,'cm.id,cm.name,cm.job,cm.lecture_title,cm.head');
    $members = array();

    foreach($result as $k => $v){
        $members[] = array('id'=>$v['id'],'name'=>$v['name'],'job'=>$v['job'],'lecture_title'=>$v['lecture_title'],'head'=>$v['head']);
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