<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit253c713363d0809835e3ed7f6dd398b8
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dharit\\Demopackage\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dharit\\Demopackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit253c713363d0809835e3ed7f6dd398b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit253c713363d0809835e3ed7f6dd398b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit253c713363d0809835e3ed7f6dd398b8::$classMap;

        }, null, ClassLoader::class);
    }
}
