<?php

function addUser($data){
    global $db;
    $id = $db->insert('conference_users',$data);
    return $id;
}

function searchEmail($email) {
    global $db;
    $db->where ("email", $email);
    $email = $db->getOne ("conference_users");
    return $email['id'];
}

function getEmails(){
    global $db;
    $cols = Array ("name", "email");
    $emails = $db->get ("conference_users", null, $cols);
    return $emails;
}