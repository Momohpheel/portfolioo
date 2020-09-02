<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06d9b5d78409265d88b871f894724d36
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit06d9b5d78409265d88b871f894724d36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06d9b5d78409265d88b871f894724d36::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
