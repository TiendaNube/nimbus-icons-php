<?php
require __DIR__ . '/../config.php';
require SRC_PATH . '/NimbusIcons/Icon.php';

use Nimbus\Icon;

$icon = Icon::get("home", 40, '#000000');
echo $icon;
