<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99c11773273cd7e70bf7d7ca15ad012f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit99c11773273cd7e70bf7d7ca15ad012f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99c11773273cd7e70bf7d7ca15ad012f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}