<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4f4e96d0e91b6f85f7173cc181e5070
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4f4e96d0e91b6f85f7173cc181e5070::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4f4e96d0e91b6f85f7173cc181e5070::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
