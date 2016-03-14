<?php
require_once('settings.php');
require_once('admin/models/site_participants.model.php');
$user_sem = get_user_sem();
$user_conf = get_user_conf();

require_once('admin/templates/site_participants.template.php');