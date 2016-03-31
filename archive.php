<?php
require_once('settings.php');
require_once('admin/models/site_archive.model.php');
$files = get_files();
require_once('admin/templates/site_archive.template.php');