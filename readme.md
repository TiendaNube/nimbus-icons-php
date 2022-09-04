# Nimbus Icons - PHP
This is a PHP version from [Nimbus Icon](https://github.com/TiendaNube/nimbus-icons)

Nimbus Icon version 0.2.7

## Get started
This project using composer.
```sh
$ composer require tiendanube/nimbus-icons-php
```

## How to use
```php
<?php
require 'config.php';
require ROOT_PATH . '/NimbusIcons/Icon.php';

use Nimbus\Icon;
// Icon::get(ICON_NAME, SIZE, COLOR)
$icon = Icon::get("home", 20, '#000000');
echo $icon;
```

### Available Icons
- WIP