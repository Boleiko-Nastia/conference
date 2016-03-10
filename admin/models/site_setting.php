<?php
function site_setting_all()
{
    global $db;
    $admin_data = $db->map('name')->ObjectBuilder()->get('conference_config');
    return $admin_data;
}