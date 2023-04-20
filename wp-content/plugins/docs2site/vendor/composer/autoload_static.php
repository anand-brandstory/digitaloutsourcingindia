<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit560bf258e1826c9d2a18e228e60654e5
{
    public static $files = array (
        'a2a9ff191f44e44f6788326a30bf8198' => __DIR__ . '/../..' . '/src/Functions/HelperFunctions.php',
        '86d44dad9d7fb19e6e5d8bfe5e0557e4' => __DIR__ . '/../..' . '/src/Functions/AjaxFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'D' => 
        array (
            'Docs2Site_Importer\\' => 19,
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Docs2Site_Importer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit560bf258e1826c9d2a18e228e60654e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit560bf258e1826c9d2a18e228e60654e5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
