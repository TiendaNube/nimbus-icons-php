<?php
require 'config.php';
require ROOT_PATH . '/NimbusIcons/Icon.php';

use Nimbus\Icon;

$icon = Icon::get("home", 20, '#000000');
echo $icon;