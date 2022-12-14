<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a2eb7c0f1d5fdaee47ebefaac09e2d9
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medot\\BasicAuthLib\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medot\\BasicAuthLib\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a2eb7c0f1d5fdaee47ebefaac09e2d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a2eb7c0f1d5fdaee47ebefaac09e2d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a2eb7c0f1d5fdaee47ebefaac09e2d9::$classMap;

        }, null, ClassLoader::class);
    }
}
