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