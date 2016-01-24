<?php
function site_setting_all()
{
    $db = new Mysqlidb ('localhost', 'root', '', 'conference');
    $admin_data = $db->get('conference_config');
    return $admin_data[0];
}