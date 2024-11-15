<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite51344f80a7e944d6a6e2e0b45e8d771
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite51344f80a7e944d6a6e2e0b45e8d771::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite51344f80a7e944d6a6e2e0b45e8d771::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}