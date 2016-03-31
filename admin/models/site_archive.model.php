<?php
function get_files(){
    global $db;
    return $db->get('conference_files');
}