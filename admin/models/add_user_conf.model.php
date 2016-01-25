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