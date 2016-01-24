<?php
function site_setting_all()
{
    global $db;
    $admin_data = $db->get('conference_config');
    return $admin_data[0];
}