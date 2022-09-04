<?php

/*
 * Nimbus Icons
 * Method to show Tiendanube Nimbus icons inline
 * Base repo: https://github.com/TiendaNube/nimbus-icons
 */

namespace Nimbus;

class Icon {
    private const NIMBUS_ICONS_PATH = './static/nimbus-icons/';

    public static function get(string $name, int $size = 16, string $color = 'currentColor') {
        $icon_source = file_get_contents(self::NIMBUS_ICONS_PATH . $name . '.svg');

        $output = strtr($icon_source, array(
            'width="16"' => 'width="'. ($size) .'"',
            'height="16"' => 'height="'. ($size) .'"',
            '<svg' => '<svg fill="'. $color .'"'
        ));

        return $output;
    }
}