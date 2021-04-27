<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d0ed311289f314fe08a70cbb34e6ee3
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'repositories\\' => 13,
        ),
        'e' => 
        array (
            'entities\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'repositories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model/repositories',
        ),
        'entities\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model/entities',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d0ed311289f314fe08a70cbb34e6ee3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d0ed311289f314fe08a70cbb34e6ee3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d0ed311289f314fe08a70cbb34e6ee3::$classMap;

        }, null, ClassLoader::class);
    }
}