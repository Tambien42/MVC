<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74ad443903bfdbc7142213e19b7ba3e9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74ad443903bfdbc7142213e19b7ba3e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74ad443903bfdbc7142213e19b7ba3e9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit74ad443903bfdbc7142213e19b7ba3e9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}