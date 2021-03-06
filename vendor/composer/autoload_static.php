<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita43b9a45d7e0c639cdcc5bda92e914b6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita43b9a45d7e0c639cdcc5bda92e914b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita43b9a45d7e0c639cdcc5bda92e914b6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita43b9a45d7e0c639cdcc5bda92e914b6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
