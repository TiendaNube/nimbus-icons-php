# Nimbus Icons - PHP

This is a PHP version from [Nimbus Icon](https://github.com/TiendaNube/nimbus-icons)

👾 See live [demo here](https://phpsandbox.io/e/x/loklf?layout=EditorPreview&defaultPath=%2F&theme=dark&showExplorer=no&openedFiles=)

## Get started

This project using composer.

```sh
$ composer require tiendanube-nimbus/icons
```

## How to use

```php
<?php
use Nimbus\Icon;

// Icon::get(ICON_NAME, SIZE, COLOR)
$icon = Icon::get("home", 40, '#000000');
echo $icon;
```

## Options

Params allowed on `Icon::get()` method

| Param    | Type       | Required | Default   |
| -------- | ---------- | -------- | --------- |
| `$name`  | **string** | _true_   | null      |
| `$size`  | **int**    | _false_  | 16        |
| `$color` | **string** | _false_  | "#000000" |

### Available Icons

To use on `$name` param as string.

| Available icons      | Preview                                                                                 |
| -------------------- | --------------------------------------------------------------------------------------- |
| accordion            | <img align="center" width="30" src="/src/static/nimbus-icons/accordion.svg">            |
| align-center         | <img align="center" width="30" src="/src/static/nimbus-icons/align-center.svg">         |
| align-left           | <img align="center" width="30" src="/src/static/nimbus-icons/align-left.svg">           |
| align-right          | <img align="center" width="30" src="/src/static/nimbus-icons/align-right.svg">          |
| apps                 | <img align="center" width="30" src="/src/static/nimbus-icons/apps.svg">                 |
| archive              | <img align="center" width="30" src="/src/static/nimbus-icons/archive.svg">              |
| arrow-left           | <img align="center" width="30" src="/src/static/nimbus-icons/arrow-left.svg">           |
| arrow-right          | <img align="center" width="30" src="/src/static/nimbus-icons/arrow-right.svg">          |
| arrows-horizontal    | <img align="center" width="30" src="/src/static/nimbus-icons/arrows-horizontal.svg">    |
| arrows-vertical      | <img align="center" width="30" src="/src/static/nimbus-icons/arrows-vertical.svg">      |
| backspace            | <img align="center" width="30" src="/src/static/nimbus-icons/backspace.svg">            |
| barcode              | <img align="center" width="30" src="/src/static/nimbus-icons/barcode.svg">              |
| bold                 | <img align="center" width="30" src="/src/static/nimbus-icons/bold.svg">                 |
| box-packed           | <img align="center" width="30" src="/src/static/nimbus-icons/box-packed.svg">           |
| box-unpacked         | <img align="center" width="30" src="/src/static/nimbus-icons/box-unpacked.svg">         |
| briefcase            | <img align="center" width="30" src="/src/static/nimbus-icons/briefcase.svg">            |
| browser              | <img align="center" width="30" src="/src/static/nimbus-icons/browser.svg">              |
| browser-search       | <img align="center" width="30" src="/src/static/nimbus-icons/browser-search.svg">       |
| calculator           | <img align="center" width="30" src="/src/static/nimbus-icons/calculator.svg">           |
| calendar-days        | <img align="center" width="30" src="/src/static/nimbus-icons/calendar-days.svg">        |
| calendar             | <img align="center" width="30" src="/src/static/nimbus-icons/calendar.svg">             |
| camera               | <img align="center" width="30" src="/src/static/nimbus-icons/camera.svg">               |
| cash                 | <img align="center" width="30" src="/src/static/nimbus-icons/cash.svg">                 |
| cashier              | <img align="center" width="30" src="/src/static/nimbus-icons/cashier.svg">              |
| chat-dots            | <img align="center" width="30" src="/src/static/nimbus-icons/chat-dots.svg">            |
| check-circle         | <img align="center" width="30" src="/src/static/nimbus-icons/check-circle.svg">         |
| check                | <img align="center" width="30" src="/src/static/nimbus-icons/check.svg">                |
| chevron-down         | <img align="center" width="30" src="/src/static/nimbus-icons/chevron-down.svg">         |
| chevron-left         | <img align="center" width="30" src="/src/static/nimbus-icons/chevron-left.svg">         |
| chevron-right        | <img align="center" width="30" src="/src/static/nimbus-icons/chevron-right.svg">        |
| chevron-up           | <img align="center" width="30" src="/src/static/nimbus-icons/chevron-up.svg">           |
| christ               | <img align="center" width="30" src="/src/static/nimbus-icons/christ.svg">               |
| clock                | <img align="center" width="30" src="/src/static/nimbus-icons/clock.svg">                |
| close                | <img align="center" width="30" src="/src/static/nimbus-icons/close.svg">                |
| code                 | <img align="center" width="30" src="/src/static/nimbus-icons/code.svg">                 |
| cog                  | <img align="center" width="30" src="/src/static/nimbus-icons/cog.svg">                  |
| color-palette        | <img align="center" width="30" src="/src/static/nimbus-icons/color-palette.svg">        |
| copy                 | <img align="center" width="30" src="/src/static/nimbus-icons/copy.svg">                 |
| credit-card          | <img align="center" width="30" src="/src/static/nimbus-icons/credit-card.svg">          |
| desktop              | <img align="center" width="30" src="/src/static/nimbus-icons/desktop.svg">              |
| discount-circle      | <img align="center" width="30" src="/src/static/nimbus-icons/discount-circle.svg">      |
| diskette             | <img align="center" width="30" src="/src/static/nimbus-icons/diskette.svg">             |
| download             | <img align="center" width="30" src="/src/static/nimbus-icons/download.svg">             |
| drag-dots            | <img align="center" width="30" src="/src/static/nimbus-icons/drag-dots.svg">            |
| drag                 | <img align="center" width="30" src="/src/static/nimbus-icons/drag.svg">                 |
| drink                | <img align="center" width="30" src="/src/static/nimbus-icons/drink.svg">                |
| drop                 | <img align="center" width="30" src="/src/static/nimbus-icons/drop.svg">                 |
| drums                | <img align="center" width="30" src="/src/static/nimbus-icons/drums.svg">                |
| duplicate            | <img align="center" width="30" src="/src/static/nimbus-icons/duplicate.svg">            |
| ecosystem            | <img align="center" width="30" src="/src/static/nimbus-icons/ecosystem.svg">            |
| edit                 | <img align="center" width="30" src="/src/static/nimbus-icons/edit.svg">                 |
| ellipsis             | <img align="center" width="30" src="/src/static/nimbus-icons/ellipsis.svg">             |
| exclamation-circle   | <img align="center" width="30" src="/src/static/nimbus-icons/exclamation-circle.svg">   |
| exclamation-triangle | <img align="center" width="30" src="/src/static/nimbus-icons/exclamation-triangle.svg"> |
| external-link        | <img align="center" width="30" src="/src/static/nimbus-icons/external-link.svg">        |
| eye-off              | <img align="center" width="30" src="/src/static/nimbus-icons/eye-off.svg">              |
| eye                  | <img align="center" width="30" src="/src/static/nimbus-icons/eye.svg">                  |
| file-alt             | <img align="center" width="30" src="/src/static/nimbus-icons/file-alt.svg">             |
| file                 | <img align="center" width="30" src="/src/static/nimbus-icons/file.svg">                 |
| fingerprint          | <img align="center" width="30" src="/src/static/nimbus-icons/fingerprint.svg">          |
| fire                 | <img align="center" width="30" src="/src/static/nimbus-icons/fire.svg">                 |
| flag                 | <img align="center" width="30" src="/src/static/nimbus-icons/flag.svg">                 |
| font                 | <img align="center" width="30" src="/src/static/nimbus-icons/font.svg">                 |
| forbidden            | <img align="center" width="30" src="/src/static/nimbus-icons/forbidden.svg">            |
| gift-box             | <img align="center" width="30" src="/src/static/nimbus-icons/gift-box.svg">             |
| gift-card            | <img align="center" width="30" src="/src/static/nimbus-icons/gift-card.svg">            |
| glasses              | <img align="center" width="30" src="/src/static/nimbus-icons/glasses.svg">              |
| globe                | <img align="center" width="30" src="/src/static/nimbus-icons/globe.svg">                |
| google               | <img align="center" width="30" src="/src/static/nimbus-icons/google.svg">               |
| guitar               | <img align="center" width="30" src="/src/static/nimbus-icons/guitar.svg">               |
| generative-stars     | <img align="center" width="30" src="/src/static/nimbus-icons/generative-stars.svg">     |
| heart                | <img align="center" width="30" src="/src/static/nimbus-icons/heart.svg">                |
| history              | <img align="center" width="30" src="/src/static/nimbus-icons/history.svg">              |
| home                 | <img align="center" width="30" src="/src/static/nimbus-icons/home.svg">                 |
| id-card              | <img align="center" width="30" src="/src/static/nimbus-icons/id-card.svg">              |
| infinite             | <img align="center" width="30" src="/src/static/nimbus-icons/infinite.svg">             |
| info-circle          | <img align="center" width="30" src="/src/static/nimbus-icons/info-circle.svg">          |
| invoice              | <img align="center" width="30" src="/src/static/nimbus-icons/invoice.svg">              |
| italic               | <img align="center" width="30" src="/src/static/nimbus-icons/italic.svg">               |
| life-ring            | <img align="center" width="30" src="/src/static/nimbus-icons/life-ring.svg">            |
| lightbulb            | <img align="center" width="30" src="/src/static/nimbus-icons/lightbulb.svg">            |
| link-off             | <img align="center" width="30" src="/src/static/nimbus-icons/link-off.svg">             |
| link                 | <img align="center" width="30" src="/src/static/nimbus-icons/link.svg">                 |
| list                 | <img align="center" width="30" src="/src/static/nimbus-icons/list.svg">                 |
| location             | <img align="center" width="30" src="/src/static/nimbus-icons/location.svg">             |
| lock-open            | <img align="center" width="30" src="/src/static/nimbus-icons/lock-open.svg">            |
| lock                 | <img align="center" width="30" src="/src/static/nimbus-icons/lock.svg">                 |
| log-out              | <img align="center" width="30" src="/src/static/nimbus-icons/log-out.svg">              |
| mail                 | <img align="center" width="30" src="/src/static/nimbus-icons/mail.svg">                 |
| marketing            | <img align="center" width="30" src="/src/static/nimbus-icons/marketing.svg">            |
| mate                 | <img align="center" width="30" src="/src/static/nimbus-icons/mate.svg">                 |
| meta                 | <img align="center" width="30" src="/src/static/nimbus-icons/meta.svg">                 |
| menu                 | <img align="center" width="30" src="/src/static/nimbus-icons/menu.svg">                 |
| mobile               | <img align="center" width="30" src="/src/static/nimbus-icons/mobile.svg">               |
| money                | <img align="center" width="30" src="/src/static/nimbus-icons/money.svg">                |
| moon                 | <img align="center" width="30" src="/src/static/nimbus-icons/moon.svg">                 |
| notification         | <img align="center" width="30" src="/src/static/nimbus-icons/notification.svg">         |
| obelisk              | <img align="center" width="30" src="/src/static/nimbus-icons/obelisk.svg">              |
| online-store         | <img align="center" width="30" src="/src/static/nimbus-icons/online-store.svg">         |
| ordered-list         | <img align="center" width="30" src="/src/static/nimbus-icons/ordered-list.svg">         |
| pencil               | <img align="center" width="30" src="/src/static/nimbus-icons/pencil.svg">               |
| peso                 | <img align="center" width="30" src="/src/static/nimbus-icons/peso.svg">                 |
| pinterest            | <img align="center" width="30" src="/src/static/nimbus-icons/pinterest.svg">            |
| picture              | <img align="center" width="30" src="/src/static/nimbus-icons/picture.svg">              |
| pix                  | <img align="center" width="30" src="/src/static/nimbus-icons/pix.svg">                  |
| planet               | <img align="center" width="30" src="/src/static/nimbus-icons/planet.svg">               |
| plus-circle          | <img align="center" width="30" src="/src/static/nimbus-icons/plus-circle.svg">          |
| printer              | <img align="center" width="30" src="/src/static/nimbus-icons/printer.svg">              |
| qr-code              | <img align="center" width="30" src="/src/static/nimbus-icons/qr-code.svg">              |
| pyramid              | <img align="center" width="30" src="/src/static/nimbus-icons/pyramid.svg">              |
| question-circle      | <img align="center" width="30" src="/src/static/nimbus-icons/question-circle.svg">      |
| real                 | <img align="center" width="30" src="/src/static/nimbus-icons/real.svg">                 |
| redo                 | <img align="center" width="30" src="/src/static/nimbus-icons/redo.svg">                 |
| remove-format        | <img align="center" width="30" src="/src/static/nimbus-icons/remove-format.svg">        |
| repeat               | <img align="center" width="30" src="/src/static/nimbus-icons/repeat.svg">               |
| rocket               | <img align="center" width="30" src="/src/static/nimbus-icons/rocket.svg">               |
| scooter              | <img align="center" width="30" src="/src/static/nimbus-icons/scooter.svg">              |
| search               | <img align="center" width="30" src="/src/static/nimbus-icons/search.svg">               |
| share                | <img align="center" width="30" src="/src/static/nimbus-icons/share.svg">                |
| shopping-cart        | <img align="center" width="30" src="/src/static/nimbus-icons/shopping-cart.svg">        |
| shot                 | <img align="center" width="30" src="/src/static/nimbus-icons/shot.svg">                 |
| size-height          | <img align="center" width="30" src="/src/static/nimbus-icons/size-height.svg">          |
| size-width           | <img align="center" width="30" src="/src/static/nimbus-icons/size-width.svg">           |
| sliders              | <img align="center" width="30" src="/src/static/nimbus-icons/sliders.svg">              |
| star                 | <img align="center" width="30" src="/src/static/nimbus-icons/star.svg">                 |
| stats                | <img align="center" width="30" src="/src/static/nimbus-icons/stats.svg">                |
| steps                | <img align="center" width="30" src="/src/static/nimbus-icons/steps.svg">                |
| sticky-note          | <img align="center" width="30" src="/src/static/nimbus-icons/sticky-note.svg">          |
| stop                 | <img align="center" width="30" src="/src/static/nimbus-icons/stop.svg">                 |
| store                | <img align="center" width="30" src="/src/static/nimbus-icons/store.svg">                |
| sun                  | <img align="center" width="30" src="/src/static/nimbus-icons/sun.svg">                  |
| tag                  | <img align="center" width="30" src="/src/static/nimbus-icons/tag.svg">                  |
| telephone            | <img align="center" width="30" src="/src/static/nimbus-icons/telephone.svg">            |
| text-size            | <img align="center" width="30" src="/src/static/nimbus-icons/text-size.svg">            |
| tiktok               | <img align="center" width="30" src="/src/static/nimbus-icons/tiktok.svg">               |
| tiendanube           | <img align="center" width="30" src="/src/static/nimbus-icons/tiendanube.svg">           |
| tools                | <img align="center" width="30" src="/src/static/nimbus-icons/tools.svg">                |
| transfer-peso        | <img align="center" width="30" src="/src/static/nimbus-icons/transfer-peso.svg">        |
| transfer-real        | <img align="center" width="30" src="/src/static/nimbus-icons/transfer-real.svg">        |
| trash                | <img align="center" width="30" src="/src/static/nimbus-icons/trash.svg">                |
| truck                | <img align="center" width="30" src="/src/static/nimbus-icons/truck.svg">                |
| undo                 | <img align="center" width="30" src="/src/static/nimbus-icons/undo.svg">                 |
| university           | <img align="center" width="30" src="/src/static/nimbus-icons/university.svg">           |
| upload               | <img align="center" width="30" src="/src/static/nimbus-icons/upload.svg">               |
| user-circle          | <img align="center" width="30" src="/src/static/nimbus-icons/user-circle.svg">          |
| user-group           | <img align="center" width="30" src="/src/static/nimbus-icons/user-group.svg">           |
| user                 | <img align="center" width="30" src="/src/static/nimbus-icons/user.svg">                 |
| vertical-stacks      | <img align="center" width="30" src="/src/static/nimbus-icons/vertical-stacks.svg">      |
| volume               | <img align="center" width="30" src="/src/static/nimbus-icons/volume.svg">               |
| wallet               | <img align="center" width="30" src="/src/static/nimbus-icons/wallet.svg">               |
| whatsapp             | <img align="center" width="30" src="/src/static/nimbus-icons/whatsapp.svg">             |

## Test locally

We have a simple docker file to test locally, run:

```sh
$ docker-compose up
```

And open: `http://localhost/src/example.php` to see live sample.
