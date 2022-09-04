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
require __DIR__ . '/../config.php';
require SRC_PATH . '/NimbusIcons/Icon.php';

use Nimbus\Icon;

// Icon::get(ICON_NAME, SIZE, COLOR)
$icon = Icon::get("home", 40, '#000000');
echo $icon;
```

### Available Icons

| Available icons      |
| -------------------- |
| accordion            |
| align-center         |
| align-left           |
| align-right          |
| apps                 |
| archive              |
| arrow-left           |
| arrow-right          |
| arrows-horizontal    |
| arrows-vertical      |
| backspace            |
| barcode              |
| bold                 |
| box-packed           |
| box-unpacked         |
| briefcase            |
| browser              |
| calendar-days        |
| calendar             |
| camera               |
| cash                 |
| chat-dots            |
| check-circle         |
| check                |
| chevron-down         |
| chevron-left         |
| chevron-right        |
| chevron-up           |
| christ               |
| clock                |
| close                |
| code                 |
| cog                  |
| copy                 |
| credit-card          |
| desktop              |
| discount-circle      |
| diskette             |
| download             |
| drag-dots            |
| drag                 |
| drink                |
| drop                 |
| drums                |
| duplicate            |
| ecosystem            |
| edit                 |
| ellipsis             |
| exclamation-circle   |
| exclamation-triangle |
| external-link        |
| eye-off              |
| eye                  |
| file-alt             |
| file                 |
| fingerprint          |
| fire                 |
| flag                 |
| font                 |
| forbidden            |
| gift-box             |
| gift-card            |
| glasses              |
| globe                |
| guitar               |
| heart                |
| history              |
| home                 |
| infinite             |
| info-circle          |
| invoice              |
| italic               |
| life-ring            |
| lightbulb            |
| link-off             |
| link                 |
| list                 |
| location             |
| lock-open            |
| lock                 |
| log-out              |
| mail                 |
| marketing            |
| mate                 |
| menu                 |
| mobile               |
| money                |
| moon                 |
| notification         |
| obelisk              |
| ordered-list         |
| pencil               |
| peso                 |
| picture              |
| pix                  |
| planet               |
| plus-circle          |
| printer              |
| pyramid              |
| question-circle      |
| real                 |
| redo                 |
| remove-format        |
| rocket               |
| scooter              |
| search               |
| share                |
| shopping-cart        |
| shot                 |
| size-height          |
| size-width           |
| sliders              |
| star                 |
| stats                |
| sticky-note          |
| stop                 |
| store                |
| sun                  |
| tag                  |
| telephone            |
| text-size            |
| tiendanube           |
| tools                |
| transfer-peso        |
| transfer-real        |
| trash                |
| truck                |
| undo                 |
| university           |
| upload               |
| user-circle          |
| user-group           |
| user                 |
| volume               |
| wallet               |
| whatsapp             |
