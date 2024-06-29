<?php
require 'vendor/autoload.php';
$config = require 'hybridauth_config.php';
$hybridauth = new Hybridauth\Hybridauth($config);
$adapter = $hybridauth->getAdapter('Google');
$userProfile = $adapter->getUserProfile();
// Process user profile
?>
