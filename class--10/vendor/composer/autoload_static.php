<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit483dba47b858c8e9a28d42ccf953cb72
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit483dba47b858c8e9a28d42ccf953cb72::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit483dba47b858c8e9a28d42ccf953cb72::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit483dba47b858c8e9a28d42ccf953cb72::$classMap;

        }, null, ClassLoader::class);
    }
}
