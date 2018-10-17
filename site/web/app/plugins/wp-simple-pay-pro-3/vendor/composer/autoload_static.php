<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit930bb64310829146ad769829f09bd6b5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit930bb64310829146ad769829f09bd6b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit930bb64310829146ad769829f09bd6b5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
