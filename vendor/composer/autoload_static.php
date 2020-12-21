<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8544e88ba84d1c316eea664e9bec98b7
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8544e88ba84d1c316eea664e9bec98b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8544e88ba84d1c316eea664e9bec98b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8544e88ba84d1c316eea664e9bec98b7::$classMap;

        }, null, ClassLoader::class);
    }
}