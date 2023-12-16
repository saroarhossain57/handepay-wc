<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e8a723ffd8f4706c611674a5f671d44
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HandePayWC\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HandePayWC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e8a723ffd8f4706c611674a5f671d44::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e8a723ffd8f4706c611674a5f671d44::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e8a723ffd8f4706c611674a5f671d44::$classMap;

        }, null, ClassLoader::class);
    }
}
