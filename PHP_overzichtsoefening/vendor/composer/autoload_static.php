<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaebde24d07d0f0546fcc64c21e53e20e
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'map\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'map\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/map',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaebde24d07d0f0546fcc64c21e53e20e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaebde24d07d0f0546fcc64c21e53e20e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaebde24d07d0f0546fcc64c21e53e20e::$classMap;

        }, null, ClassLoader::class);
    }
}
